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
            $table->enum('month', config('month.month'))->default(config('month.month')[date('n')]);
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
