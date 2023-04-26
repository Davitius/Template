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
        Schema::create('constructors', function (Blueprint $table) {
            $table->id();

            $table->string('type')->nullable();
            $table->string('image')->nullable();
            $table->string('name_GE')->nullable();
            $table->string('name_EN')->nullable();
            $table->string('name_RU')->nullable();
            $table->string('icon')->nullable();
            $table->string('color')->default('black');
            $table->string('visible')->default('block');


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
        Schema::dropIfExists('constructors');
    }
};
