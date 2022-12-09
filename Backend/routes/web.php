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


Route::get('/', function () {
    return view('pages.mainpage');
});

Route::get('/createReport', function () {
    return view('pages.createReport');
});

Route::get('/createReport/create', [ReportController::class, 'create']);
Route::post('/createReport', [ReportController::class, 'store']);
