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
        Schema::create('smartphone', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phone_id')->constrained('phone')->cascadeOnDelete();  
            $table->foreignId('smartphone_color_id')->constrained('color');
            $table->foreignId('smartphone_brand_id')->constrained('brand');
            $table->foreignId('smartphone_model_id')->constrained('model');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smartphone');
    }
};
