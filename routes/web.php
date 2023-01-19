<?php

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

Route::get('/', function () {  return view('welcome');  })->name('welcome'); //welcome page


//crud project
Route::get('/crud', 'Crud\CrudController@Index')->name('crudIndex');

//rekotbajet project
Route::get('/rekotBajet', function () {  return view('rekot.rekotBajet'); })->name('rekotBajetIndex'); //RekotBajet page


