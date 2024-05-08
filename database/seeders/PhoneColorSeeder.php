<?php

namespace Database\Seeders;

use App\Models\Phones\Color\PhoneColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ["name" => "Black"],
            ["name" => "Blue"],
            ["name" => "Green"],
            ["name" => "White"],
            ["name" => "Red"]
        ];

        foreach ($colors as $color) {
            PhoneColor::create($color);
        }
    }
}
