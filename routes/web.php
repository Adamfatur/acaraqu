<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/galeriqu', function () {
    return view('galeriqu');
})->name('galeriqu');

Route::get('/hadirqu', function () {
    return view('hadirqu');
})->name('hadirqu');

Route::get('/kreasiqu', function () {
    return view('kreasiqu');
})->name('kreasiqu');

Route::get('/undanganqu', function () {
    return view('undanganqu');
})->name('undanganqu');

Route::get('/digitalqu', function () {
    return view('digitalqu');
})->name('digitalqu');

Route::get('/fotoqu', function () {
    return view('fotoqu');
})->name('fotoqu');
