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
        Schema::table('blog_categories', function (Blueprint $table) {
            $table->string('name_hindi')->nullable();
            $table->string('name_gujrati')->nullable();
            $table->longText('description_english')->nullable();
            $table->longText('description_hindi')->nullable();
            $table->longText('description_gujrati')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_categories', function (Blueprint $table) {
            $table->dropColumn(['name_hindi', 'name_gujrati', 'description_english', 'description_hindi', 'description_gujrati']);
        });
    }
};
