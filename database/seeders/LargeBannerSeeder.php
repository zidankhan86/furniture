<?php

namespace Database\Seeders;

use App\Models\BannerTwo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LargeBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerTwo::create([

            'tittle'=>"100% Trusted",
            'image'=>"2024071312540554.png",

        ]);
    }
}
