<?php

namespace Database\Seeders;

use App\Models\Phones\Brand\PhoneBrand;
use App\Models\Phones\FeaturePhone;
use App\Models\Phones\Model\PhoneModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FeaturePhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = PhoneBrand::where('id', '>=', 7)->get();
        $models = PhoneModel::where('id', '>=', 19)->get();

        $colorIndex = 1;

        foreach ($brands as $brand) {
            foreach ($models as $model) {
                FeaturePhone::create([
                    'phone_color_id' => $colorIndex,
                    'phone_brand_id' => $brand->id,
                    'phone_model_id' => $model->id,
                    'price' => random_int(50,300)
                ]);

                $colorIndex = ($colorIndex % 5) + 1;
            }
        }
    }
}
