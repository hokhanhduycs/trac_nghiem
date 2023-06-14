<?php

namespace App\Http\Controllers;

use App\Models\De;
use App\Models\DeCauhoi;
use App\Models\PhongThi;
use App\Models\TraLoi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexExam(Request $request)
    {
        $dsphong=PhongThi::all();
        return view('admin.index_exam',compact('dsphong'));
    }

    public function createExam(Request $request)
    {
        return view('admin.create_exam');
    }

    public function storeExam(Request $request, PhongThi $phongthi)
    {
        PhongThi::create($request->all());
        return back();
    }

    public function updateExam(Request $request, PhongThi $phongthi)
    {
        $phongthi->update($request->all());
        return back();
    }

    public function deleteExam(Request $request, PhongThi $phongthi)
    {
        $phongthi->delete();
        return back();
    }

    public function resultExam(Request $request, PhongThi $phongthi)
    {
        $dsketqua=De::where('id',$phongthi->id)->get();
        return view('admin.result_exam',compact('dsketqua'));
    }

    public function detailExam(Request $request, De $de)
    {
        $cauhoi = DeCauhoi::with('cau_hoi.dap_ans')->where('de_id', $de->de_id)->get();
        foreach ($cauhoi as $key => $value) {
            foreach ($value->cau_hoi->dap_ans as $key2 => $value2) {
                if(TraLoi::where('de_id',$de->de_id)->where('da_id',$value2->id)->where('ch_id',$value->cau_hoi->ch_id)->first()){
                    $value2->chon=true;
                }else $value2->chon=false;
                
            }
        }
        
        return view('admin.detail_exam',compact('de','cauhoi'));

    }
}
