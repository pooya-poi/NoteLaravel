<?php

use Illuminate\Support\Facades\Route;


//  Route::get('/', function () {
// 	 return view('welcome');
//  });


// Route::resource('/note','NoteController');
// Route::resource('/','NoteController');
Route::get('/','NoteController@index');
Route::get('/create','NoteController@create');
Route::post('/create','NoteController@store');
Route::get('/{id}/edit','NoteController@edit');
Route::patch('/{id}/edit','NoteController@update');
Route::delete('/{id}/destroy','NoteController@destroy')->name('/.destroy');;




