<?php

namespace Database\Seeders;

use App\Models\BannerOne;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MedumBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerOne::create([

            'tittle'=>"100% Trusted",
            'image'=>"2024071308014401.png",

        ]);
    }
}
