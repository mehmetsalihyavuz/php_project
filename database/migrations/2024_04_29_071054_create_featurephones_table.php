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
        Schema::create('featurephones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('brand_id');

            $table->unsignedBigInteger('phone_id')
            ->references('id')
            ->on('phones')
            ->onDelete('cascade');

            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('model_id')->references('id')->on('models');
            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featurephones');
    }
};
