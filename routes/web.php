<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Memocontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('memos', MemoController::class);
