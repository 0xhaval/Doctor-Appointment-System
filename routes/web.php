<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/admin.php';


Route::get('/',[HomeController::class, 'index'])->name('home');

Auth::routes();
