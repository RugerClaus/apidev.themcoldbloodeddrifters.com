<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Band;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Band::create([
            'name' => 'Default name',
            "band_list_left_to_right" => "To be determined",
            'image' => 'https://placehold.co/905x509?text=Test+Image',
            'bio' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum natus dolor consequatur non similique vitae, praesentium amet, aliquid nesciunt doloribus, neque dolorum delectus accusantium. Dolorum, labore sapiente repellendus cupiditate accusantium illo soluta voluptas laudantium quo eligendi exercitationem! Et facere nesciunt illo praesentium, officiis debitis velit quaerat eum dolores quasi quia.'
        ]);
    }
}
