<?php

namespace Database\Seeders;

use App\Models\Phones\Brand\PhoneBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            "Apple",
            "Samsung",
            "Xiaomi",
            "Panasonic",
            "Siemens",
            "AT&T",
            "Nokia",
            "Motorola",
            "Alcatel"
        ];

        foreach ($brands as $brandName) {
            PhoneBrand::create(["name" => $brandName]);
        }

    }
}