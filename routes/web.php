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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'dane@wyswietl' );

Route::get('operacje/stworz', 'dane@stworz');

Route::post('operacje/stworz', 'dane@dodaj');

Route::get('operacje/{id}', 'dane@pokaz' );

Route::get('operacje/usun/{id}', 'dane@usun');

Route::get('operacje/edytuj/{id}', 'dane@edytuj');

Route::post('operacje/edytuj/', 'dane@edytujUzytkownika');
