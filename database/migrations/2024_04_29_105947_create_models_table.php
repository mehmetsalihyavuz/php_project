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
        Schema::create('model', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('smartphone_model_id')->constrained('smartphone')->cascadeonDelete();
            $table->foreignId('featurephone_model_id')->constrained('featurephone')->cascadeonDelete();
            $table->foreignId('landlinephone_model_id')->constrained('landlinephone')->cascadeonDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model');
    }
};
