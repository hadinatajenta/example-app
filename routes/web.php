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
    return view('home');
});

Route::get('/lupapassword', function () {
    return view('lupapassword');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/baca2', function () {
    return view('baca2');
});
Route::get('/baca', function () {
    return view('baca');
});

Route::get('/ubahpassword', function () {
    return view('ubahpassword');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/laporan-berita', function () {
    return view('laporan-berita');
});
Route::get('/analitik-iklan', function () {
    return view('analitik-iklan');
});

Route::get('/analitik-keuangan', function () {
    return view('analitik-keuangan');
});
Route::get('/invite', function () {
    return view('invite');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/tambah-iklan', function () {
    return view('tambah-iklan');
});
