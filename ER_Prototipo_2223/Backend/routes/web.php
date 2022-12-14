<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\MainController;

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



Route::get('/ent', function () {
    return view('pages.dashboardEntidade');
});



Route::get('/createReport', function () {
    return view('pages.createReport');
});


Route::post('/createReport', [ReportController::class, 'store']);

Route::get('/', [MainController::class,'index'])->name('tecTags');

Route::get('/tec', [ReportController::class,'index'])->name('tecReports');

Route::post('/addEntity', [ReportController::class, 'storeent']);

Route::put('/tec/{id}', [ReportController::class,'update'])->name('tecTagsupdate');

Route::get('/ent', [ReportController::class,'indexin'])->name('entReports');

Route::get('/entphishing', [ReportController::class,'indexin'])->name('entReports');

Route::get('/entpharming', [ReportController::class,'indexin'])->name('entReports');

Route::put('/ent/{id}', [ReportController::class,'update'])->name('entReportsState');
Route::put('/entphising/{id}', [ReportController::class,'updatephi'])->name('entReportsState');
Route::put('/entpharming/{id}', [ReportController::class,'updatepha'])->name('entReportsState');


