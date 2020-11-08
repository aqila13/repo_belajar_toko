<?php

use Illuminate\Http\Request;

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');

Route::group(['middleware' => ['jwt.verify']], function ()
{
    Route::get('/kelas', 'KelasController@show');
    Route::post('/kelas', 'KelasController@store');

    Route::get('/siswa', 'SiswaController@show');
    Route::get('/siswa/{id}', 'SiswaController@detail');
    Route::post('/siswa', 'SiswaController@store');
    Route::put('/siswa/{id}', 'SiswaController@update');
    Route::delete('/siswa/{id}', 'SiswaController@destroy');
});