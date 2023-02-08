<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Laravel8から使うコントローラのuseが必要
use App\Http\Controllers\BookController;

// Laravel8から書き方が変更された
// apiに対応したrestfulにしておく
Route::apiResource('/books',BookController::class);


