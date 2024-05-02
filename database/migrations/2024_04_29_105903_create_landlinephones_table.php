<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('landlinephone', function (Blueprint $table) {
            $table->id();

            $table->string('phone_color_id');
            $table->string('phone_brand_id');
            $table->string('phone_model_id');

            $table->foreign('phone_color_id')->references('id')->on('color');
            $table->foreign('phone_brand_id')->references('id')->on('brand');
            $table->foreign('phone_model_id')->references('id')->on('model');

            $table->timestamps();

       
        });

        /* Schema::create('landlinephone', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Phones\Brand\PhoneBrand::class);
            $table->foreignIdFor(App\Models\Phones\Color\PhoneColor::class);
            $table->foreignIdFor(App\Models\Phones\Model\PhoneModel::class);
            $table->timestamps();
        }); */
    }      
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landlinephone');
    }
};