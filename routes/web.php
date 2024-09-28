<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return 'Jobs';
});

Route::post('/submit', function () {
    return 'Submitted';
});

Route::get(('/posts/{id}'), function (string $id) {
    return 'Post ' . $id;
});