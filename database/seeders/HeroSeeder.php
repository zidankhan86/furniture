<?php

namespace Database\Seeders;

use App\Models\HeroBanner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroBanner::create([

            'small_tittle'=>"Super Products",
            'tittle'=>"100% Trusted",
            'description'=>"Super Fast Delivery",
            'image'=>"2024071308012901.png",

        ]);
    }
}
