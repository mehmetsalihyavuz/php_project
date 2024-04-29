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
            $table->foreignId('phone_id')->constrained('phone')->cascadeOnDelete();
            $table->foreignId('landlinephone_color_id')->constrained('color');
            $table->foreignId('landlinephone_brand_id')->constrained('brand');
            $table->foreignId('landlinephone_model_id')->constrained('model');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landlinephone');
    }
};
