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
        Schema::create('week_days', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->string('day_week')->nullable();
            $table->string('clock')->nullable();
            $table->string('liturgy')->nullable();
            $table->string('moleben')->nullable();
            $table->string('service')->nullable();
            $table->unsignedInteger('week_id')->nullable();
            $table->string('bg_color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('week_days');
    }
};
