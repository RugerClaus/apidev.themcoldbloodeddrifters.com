<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselImages;


class CarouselFeed extends Controller
{
    public function load_images()
    {
        $images= CarouselImages::all();
        return response()->json($images);
    }
}
