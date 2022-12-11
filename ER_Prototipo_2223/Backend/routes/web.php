<?php

use App\Http\Controllers\ReportController;
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

Route::get('/', function () {
    return view('pages.burlasfreq');
});

Route::get('/createReport', function () {
    return view('pages.createReport');
});

Route::get('/createReport/create', [ReportController::class, 'create'])->name('createReport');
Route::post('/createReport', [ReportController::class, 'store']);

Route::get('/tec', [ReportController::class,'index'])->name('tecReports');

//Route::get('/tec', [TagController::class,'index'])->name('tecTags');




