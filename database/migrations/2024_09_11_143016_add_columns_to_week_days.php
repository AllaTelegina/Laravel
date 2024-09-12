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
        Schema::table('week_days', function (Blueprint $table) {
            $table->string('liturgy_evening')->nullable();
            $table->string('bdenie')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('week_days', function (Blueprint $table) {
            //
        });
    }
};
