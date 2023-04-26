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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('address_GE')->nullable();
            $table->string('address_EN')->nullable();
            $table->string('address_RU')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('name_GE')->nullable();
            $table->string('name_EN')->nullable();
            $table->string('name_RU')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

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
        Schema::dropIfExists('contacts');
    }
};
