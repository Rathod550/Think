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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id')->nullable();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->string('title_hindi')->nullable();
            $table->string('title_gujrati')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_hindi')->nullable();
            $table->longText('description_gujrati')->nullable();
            $table->date('post_publish_date')->nullable();
            $table->tinyInteger('is_published')->default(0);
            $table->integer('blog_category_id')->nullable();
            $table->string('slug')->nullable();
            $table->longText('seo_tags')->nullable();
            $table->tinyInteger('post_type')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
