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
Route::prefix('{lang}')->group(function () {
    Route::get('/','Home@index')->name('home');

    Route::get('about', function () {
        return view('about');
    })->name('about_us');

    Route::get('services', function () {
        return view('practice');
    })->name('our_services');

    Route::get('attorneys', function () {
        return view('attorney');
    })->name('attorneys');

    Route::get('case_studies', function () {
        return view('blog');
    })->name('case_studies');

    Route::get('contact', function () {
        return view('contact');
    })->name('contact');

    // Admin Panel Routes
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('adminpanel/dashboard');
        })->name('adminpanel_dashboard');
        Route::resource('testimonials', 'adminpanel\Testimonials');
    });
});

