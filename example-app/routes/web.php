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

Route::get('/', function () {
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/index2.html', function () {
    return view('index2');
});

Route::get('/index3.html', function () {
    return view('index3');
});

Route::get('/tables.html', function () {
    return view('tables');
});

Route::get('/tables_dynamic.html', function () {
    return view('tables_dynamic');
});

Route::get('/form.html', function () {
    return view('form');
});

Route::get('/form_advanced.html', function () {
    return view('form_advanced');
});

Route::get('/general_elements.html', function () {
    return view('general_elements');
});

Route::get('/media_gallery.html', function () {
    return view('media_gallery');
});

Route::get('/fixed_sidebar.html', function () {
    return view('fixed_sidebar');
});

Route::get('/fixed_footer.html', function () {
    return view('fixed_footer');
});