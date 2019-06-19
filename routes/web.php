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

Route::get('/', function () {
    return view('home');
    Toastr::info('welcome admin!');
})->name('home');

Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');
Route::get('/quienessomos', function () {
    return view('quienessomos');
})->name('quienessomos');
Route::get('/contactenos', function () {
    return view('contactenos');
})->name('contactenos');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

// Rutas para servicio
Route::get('/guarderiacanica', function () {
    return view('guarderiacanica');
})->name('guarderiacanica');

Route::get('/hotelcanino', function () {
    return view('hotelcanino');
})->name('hotelcanino');

Route::get('/hotel-felino', function () {
    return view('hotelfelino');
})->name('hotelfelino');

Route::get('/grooming', function () {
    return view('grooming');
})->name('grooming');

Route::get('/etologia', function () {
    return view('etologia');
})->name('etologia');

//Ruta que esta señalando nuestro formulario
Route::post('/contactar', 'MailController@contact')->name('contact');
