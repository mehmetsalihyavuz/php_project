<?php

namespace Database\Seeders;
use App\Models\Phones\Model\PhoneModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            "iPhone 12",
            "iPhone SE",
            "iPhone 11 Pro",
            "Galaxy S21",
            "Galaxy Note 20",
            "Galaxy A52",
            "Mi 11",
            "Redmi Note 10",
            "Poco X3",
            "KX-TGC210",
            "KX-TGD310",
            "KX-TG3711BX",
            "Gigaset A220",
            "Gigaset C530A",
            "Gigaset E630A",
            "CL82207",
            "CL84102",
            "ML17929",
            "Nokia 3310",
            "Nokia 8110 4G",
            "Nokia 2720 Flip",
            "Motorola Razr",
            "Motorola W377",
            "Motorola RAZR V3i",
            "Alcatel GO FLIP",
            "Alcatel 3026",
            "Alcatel One Touch 10.16G"
        ];

        foreach ($models as $modelName) {
            PhoneModel::create(["name" => $modelName]);
        }
    }
}
