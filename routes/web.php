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

Route::get('{locale}/', function ($locale) {
    App::setLocale($locale);
    return view('home');
})->name('home');


Route::get('{locale}/about', function ($locale) {
    App::setLocale($locale);
    return view('about');
})->name('about_us');
