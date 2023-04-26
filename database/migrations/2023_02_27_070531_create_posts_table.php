<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('type')->nullable();
            $table->string('title_ge')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->longText('text_ge')->nullable();
            $table->longText('text_en')->nullable();
            $table->longText('text_ru')->nullable();
            $table->string('image')->nullable();
            $table->string('active')->nullable();

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
        Schema::dropIfExists('posts');
    }
};
