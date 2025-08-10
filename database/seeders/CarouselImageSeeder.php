<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarouselImages;

class CarouselImageSeeder extends Seeder
{
    public function run()
    {
        CarouselImages::create([
            'src' => 'https://placehold.co/905x509?text=Test+Image',
            'caption' => 'Default Image',
            'blurb' => 'Image Placeholder',
        ]);
    }
}
