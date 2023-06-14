<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('menu');
})->name('menu');
Route::get('/dang-nhap-kiem-tra', function () {
    return view('index');
})->name('index');
Route::get('/dang-nhap', function () {
    return view('login');
})->name('login');

Route::get('/chuong',  [HomeController::class, 'listChapter'])->name('listChapter');
Route::get('/{chuong}/tai-lieu',  [HomeController::class, 'listLession'])->name('listLesson');
Route::get('/chi-tiet/{tailieu}',  [HomeController::class, 'detail'])->name('detail');

Route::post('/dang-nhap', [HomeController::class, 'loginSubmit'])->name('login.submit');
Route::post('/dang-nhap-lam-bai', [HomeController::class, 'loginExam'])->name('login.exam');
Route::middleware(['CheckExam'])->group(function () {

    Route::get('/kiem-tra', [HomeController::class, 'exam'])->name('exam');

    Route::post('/nop-bai', [HomeController::class, 'examSubmit'])->name('exam.submit');
    Route::get('/ket-qua-thi',  [HomeController::class, 'result'])->name('result');
});

Route::middleware(['CheckAuth'])->group(function () {
    Route::get('/quan-tri',  [AdminController::class, 'indexExam'])->name('admin');
    Route::get('/danh-sach-phong-thi',  [AdminController::class, 'indexExam'])->name('index.exam');
    Route::get('/tao-phong-thi',  [AdminController::class, 'createExam'])->name('create.exam');
    Route::post('/luu-phong-thi',  [AdminController::class, 'storeExam'])->name('store.exam');
    Route::post('/sua-phong-thi/{phongthi}',  [AdminController::class, 'updateExam'])->name('update.exam');
    Route::post('/xoa-phong-thi/{phongthi}',  [AdminController::class, 'deleteExam'])->name('delete.exam');

    Route::get('/xem-ket-qua-thi/{phongthi}',  [AdminController::class, 'resultExam'])->name('resultExam');
    Route::get('/xem-chi-tiet-ket-qua-thi/{de}',  [AdminController::class, 'detailExam'])->name('detailExam');

});
