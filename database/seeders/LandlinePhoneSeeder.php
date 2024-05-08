<?php

namespace Database\Seeders;
use App\Models\Phones\Brand\PhoneBrand;
use App\Models\Phones\LandlinePhone;
use App\Models\Phones\Model\PhoneModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandlinePhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $brands = PhoneBrand::where('id','>=',4)->where('id', '<=', 6)->get();
        $models = PhoneModel::where('id','>=',10)->where('id', '<=', 18)->get();

        $colorIndex = 1;

        foreach ($brands as $brand) {
            foreach ($models as $model) {
                LandlinePhone::create([
                    'phone_color_id' => $colorIndex,
                    'phone_brand_id' => $brand->id,
                    'phone_model_id' => $model->id,
                    'price' => random_int(25,100)
                ]);

                $colorIndex = ($colorIndex % 5) + 1;
            }
        }
    }
}
