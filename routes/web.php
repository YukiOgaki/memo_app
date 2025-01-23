<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Memocontroller;


Route::get('/', [MemoController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('memos', MemoController::class);
