<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BandMembers;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BandMembers::create([
            'user_id' => '2',
            'name' => 'Test',
            'instrument' => "Four score and seven years ago",
            'bio' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum natus dolor consequatur non similique vitae, praesentium amet, aliquid nesciunt doloribus, neque dolorum delectus accusantium. Dolorum, labore sapiente repellendus cupiditate accusantium illo soluta voluptas laudantium quo eligendi exercitationem! Et facere nesciunt illo praesentium, officiis debitis velit quaerat eum dolores quasi quia.',
            'portrait' => "https://placehold.co/300x700",
        ]);
    }
}
