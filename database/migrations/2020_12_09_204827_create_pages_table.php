<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id');
            $table->string('title');
            $table->string('image');
            $table->string('path');
            $table->string('body');
            $table->string('slug');
            $table->string('is_published')->nullable();
            $table->string('seo_description');
            $table->string('seo_keywords');
            $table->string('seo_title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
