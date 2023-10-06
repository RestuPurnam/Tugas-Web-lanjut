<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return ('hello world');
});

Route::get('/admin', function() {
    return view('dasboard');
});
