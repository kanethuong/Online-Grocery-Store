<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index']);

Route::get('/redirect',[HomeController::class,'redirect']);