<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutUsController::class, 'about']);
Route::get('/catalog', [CatalogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'contact']);