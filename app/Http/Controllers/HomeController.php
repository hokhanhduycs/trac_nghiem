<?php

namespace App\Http\Controllers;

use App\Models\CauHoi;
use App\Models\Chuong;
use App\Models\DapAn;
use App\Models\De;
use App\Models\DeCauhoi;
use App\Models\PhongThi;
use App\Models\TaiLieu;
use App\Models\TraLoi;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function loginSubmit(Request $request)
    {
        $arrUser = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (Auth::attempt($arrUser)) {
            return redirect()->route('admin');
        } else {
            return back();
        }
    }

    public function loginExam(Request $request)
    {
        $phongthi = PhongThi::where('password', $request->password)
            ->whereDate('start', '<=', Carbon::now())
            ->whereDate('end', '>=', Carbon::now())->first();
        if ($phongthi) {
            $request->session()->put('de', $phongthi->id);
            $de = De::create([
                'id' => $phongthi->id,
                'name' => $request->username,
                'unit' => $request->unit,
                'birth' => $request->birth,
                'start' => Carbon::now()
            ]);
            $request->session()->put('de', $de->de_id);
            $cauhoi = CauHoi::with(['dap_ans' => function ($q) {
                $q->inRandomOrder();
            }])->inRandomOrder()
                ->limit(Config::get('constants.numberQues'))
                ->get();

            $count = DeCauhoi::where('de_id', $request->session()->get('de'))->count();
            if ($count < Config::get('constants.numberQues')) {
                foreach ($cauhoi as $value) {
                    if ($count < Config::get('constants.numberQues')) {

                        DeCauhoi::create([
                            'de_id' => $de->de_id,
                            'ch_id' => $value->ch_id
                        ]);
                        $count++;
                    }
                }
            }

            return redirect()->route('exam');
        } else {
            return redirect()->route('index')->with('error', 'Mật khẩu không đúng.');
        }
    }

    public function exam(Request $request)
    {
        $cauhoi = DeCauhoi::with('cau_hoi.dap_ans')->where('de_id', $request->session()->get('de'))->get();

        $de =  De::where('de_id', $request->session()->get('de'))->first();
        if ($de->status == 1) {
            return redirect()->route('result');
        }
        $now = Carbon::now();
        $sec = ($now->diffInSeconds($de->start) % 60);
        $mini = $now->diffInMinutes($de->start);
        return view('exam', compact('de', 'cauhoi', 'sec', 'mini'));
    }

    public function examSubmit(Request $request)
    {
        $temp = 0;
        foreach ($request->all() as $key => $value) {
            if (substr($key, 0, 6) == 'cauhoi') {
                $da = DapAn::where('id', $value[0])->first();
                $da->status == 1 && $temp++;

                TraLoi::create([
                    'de_id' => $request->de_id,
                    'da_id' => $value[0],
                    'ch_id' => ltrim($key, 'cauhoi')
                ]);
            }
        }
        $mark = $temp / Config::get('constants.numberQues') * 10 ?? 0;
        $classification = '';
        if (round($mark, 2) >= 8) {
            $classification = 'Giỏi';
        } else if (round($mark, 2) >= 6.5 && round($mark, 2) < 8) {
            $classification = 'Khá';
        } else if (round($mark, 2) >= 5 && round($mark, 2) < 6.5) {
            $classification = 'Đạt yêu cầu';
        } else if (round($mark, 2) < 5) {
            $classification = 'Không đạt yêu cầu';
        }

        De::where('de_id', $request->de_id)->update([
            'mark' => round($mark, 2),
            'end' => Carbon::now(),
            'classification' => $classification
        ]);



        return redirect()->route('result');
    }

    public function result(Request $request)
    {
        $de = De::where('de_id', $request->session()->get('de'))->first();
        $request->session()->forget('de');
        return view('result', compact('de'));
    }

    public function admin()
    {
        return view('admin.template.layout');
    }

    public function listChapter()
    {
        $chuong=Chuong::all();
        return view("study",compact('chuong'));
    }

    public function listLession(Chuong $chuong)
    {
        $tailieu=TaiLieu::where('chuong_id',$chuong->id)->get();
        return view('listLession',compact('tailieu'));
    }

    public function detail(TaiLieu $tailieu)
    {
        return view('detail',compact('tailieu'));
    }
}
