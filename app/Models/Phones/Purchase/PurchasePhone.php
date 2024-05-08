<?php

namespace App\Models\Phones\Purchase;
use App\Models\Phones\SmartPhone;
use App\Models\Phones\LandlinePhone;
use App\Models\Phones\FeaturePhone;
use App\Models\User;

class PurchasePhone
{
    public function purchaseSmartPhone(User $user, array $attributes)
    {
       /*  $brandID = $attributes[0];
        $modelID = $attributes[1];
        $colorID = $attributes[2];

        unset($attributes[0], $attributes[1], $attributes[2]);

        $smartPhone = new SmartPhone();
        $smartPhone->fill($attributes);

        $smartPhone->user_id = $user->id;
        $smartPhone->phone_brand_id = $brandID;
        $smartPhone->phone_model_id = $modelID;
        $smartPhone->phone_color_id = $colorID;

        $smartPhone->save();

        return $smartPhone; */
    }


    public function purchaseFeaturePhone(User $user, array $attributes)
    {
        /* $brandID = $attributes[0];
        $modelID = $attributes[1];
        $colorID = $attributes[2];

        unset($attributes[0], $attributes[1], $attributes[2]);

        $featurePhone = new Featurephone();
        $featurePhone->fill($attributes);

        $featurePhone->user_id = $user->id;
        $featurePhone->phone_brand_id = $brandID;
        $featurePhone->phone_model_id = $modelID;
        $featurePhone->phone_color_id = $colorID;

        $featurePhone->save();

        return $featurePhone; */
    }

    public function purchaseLandlinePhone(User $user, array $attributes)
    {
        /* $brandID = $attributes[0];
        $modelID = $attributes[1];
        $colorID = $attributes[2];
        
        unset($attributes[0], $attributes[1], $attributes[2]);

        $landlinePhone = new LandlinePhone();
        $landlinePhone->fill($attributes);

        $landlinePhone->user_id = $user->id;
        $landlinePhone->phone_brand_id = $brandID;
        $landlinePhone->phone_model_id = $modelID;
        $landlinePhone->phone_color_id = $colorID;
        

        $landlinePhone->save();

        return $landlinePhone; */
    }
}