<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualanController;

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
    return view('welcome');
});

Route::get('/jualan', [JualanController::class,'index']);
Route::get('/jualan/create', [JualanController::class,'create']);
//Route::post('/jualan/create', [JualanController::class,'create']);
Route::post('/jualan/store', [JualanController::class,'store']);
Route::get('/jualan/{id}/edit', [JualanController::class,'edit']);
Route::put('/jualan/{id}', [JualanController::class,'update']);
Route::delete('/jualan/{id}', [JualanController::class,'destroy']);
$router->get('data','JualanController@index');
