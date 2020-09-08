<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kelas', 'KelasController@show');
Route::post('/kelas','KelasController@store');

Route::get('/siswa', 'SiswaController@show');
Route::get('/siswa/{id}', 'SiswaController@detail');
Route::post('/Siswa','SiswaController@store');
