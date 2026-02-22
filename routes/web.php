<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 244107020100 <br> Nama: Rafazian Alief Fatah';
});