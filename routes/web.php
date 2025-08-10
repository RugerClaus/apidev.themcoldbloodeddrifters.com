<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselFeed;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


route::get("/carousel", [CarouselFeed::class, 'load_images']);
route::get("/about_data", [AboutController::class, 'load_about_data']);
route::get("/home_data", [HomeController::class, 'load_home_data']);