<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.landing');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
});
