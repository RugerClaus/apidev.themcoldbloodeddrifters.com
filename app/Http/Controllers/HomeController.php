<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeData;

class HomeController extends Controller
{
    public function load_home_data()
    {
        $text = HomeData::first();

        return response()->json([
            "status" => "success",
            "left" => $text->left,
            "right" => $text->right
        ]);
    }
}
