<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cursos', '\App\Http\Controllers\CursoRestController@index');
Route::post('/cursos', '\App\Http\Controllers\CursoRestController@store');
Route::put('/cursos/{curso}', '\App\Http\Controllers\CursoRestController@update');
Route::delete('/cursos/{curso}', '\App\Http\Controllers\CursoRestController@destroy');

Route::get('/notas', '\App\Http\Controllers\NotaRestController@index');
Route::post('/notas', '\App\Http\Controllers\NotaRestController@store');
Route::put('/notas/{nota}', '\App\Http\Controllers\NotaRestController@update');
Route::delete('/notas/{nota}', '\App\Http\Controllers\NotaRestController@destroy');