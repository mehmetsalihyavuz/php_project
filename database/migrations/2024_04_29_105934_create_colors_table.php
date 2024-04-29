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
        Schema::create('color', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('smartphone_color_id')->nullable()->constrained('smartphone')->cascadeonDelete();
            $table->foreignId('featurephone_color_id')->nullable()->constrained('featurephone')->cascadeonDelete();
            $table->foreignId('landlinephone_color_id')->nullable()->constrained('landlinephone')->cascadeonDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color');
    }
};
