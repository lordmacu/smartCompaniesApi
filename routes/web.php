<?php

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

Route::get('/aqui', function () {
    return view('welcome');
});
 
Route::get('/process', 'Processdata@index');
Route::get('/getDropdowns', 'Processdata@getDropdowns');
Route::get('/getControls', 'Processdata@getControls');
Route::get('/getComments', 'Processdata@getComments');
Route::get('/getFlowers', 'Processdata@getFlowers');
Route::get('/getProceses', 'Processdata@getProceses');
Route::get('/getSedes', 'Processdata@getSedes');
Route::get('/getVarities', 'Processdata@getVarities');
Route::get('/getEmployee', 'Processdata@getEmployee');
Route::get('/processEmploys', 'Processdata@processEmploys');
Route::post('/saveData', 'Processdata@saveData');
Route::post('/deleteLabor', 'Processdata@deleteLabor');
Route::post('/deleteLabor', 'Processdata@deleteLabor');

