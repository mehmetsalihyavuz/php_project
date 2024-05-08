<?php

namespace Database\Seeders;

use App\Models\Phones\Brand\PhoneBrand;
use App\Models\Phones\Model\PhoneModel;
use App\Models\Phones\SmartPhone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SmartPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = PhoneBrand::where('id','>=',1)->where('id', '<=', 3)->get();
        $models = PhoneModel::where('id','>=',1)->where('id', '<=', 9)->get();

        $colorIndex = 1;

        foreach ($brands as $brand) {
            foreach ($models as $model) {
                SmartPhone::create([
                    'phone_color_id' => $colorIndex,
                    'phone_brand_id' => $brand->id,
                    'phone_model_id' => $model->id,
                    'price' => random_int(300,950)
                ]);

                $colorIndex = ($colorIndex % 5) + 1;
            }
        }
    }
}
