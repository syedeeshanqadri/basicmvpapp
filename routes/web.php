<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/{slug}',[PageController::class,'show']);

Route::get('/', function () {
    return redirect('/home');
});
