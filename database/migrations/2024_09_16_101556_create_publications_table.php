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
        Schema::table('publications', function (Blueprint $table) {
            $table->id();
            $table->string('images')->default('default_image.jpg');
            $table->date('published_at');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('publications');
        Schema::table('publications', function (Blueprint $table) {
            $table->dropColumn('images');
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('published_at');
        });
    }
};
