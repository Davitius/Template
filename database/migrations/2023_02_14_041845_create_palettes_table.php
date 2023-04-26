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
        Schema::create('palettes', function (Blueprint $table) {
            $table->id();

            $table->string('modul')->nullable();
            $table->string('backcolor')->default('#828281');
            $table->string('color')->default('#bfbebb');
            $table->string('hovercolor')->default('#29395a');
            $table->string('size')->default('12px');
            $table->string('position')->default('center');
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
        Schema::dropIfExists('palettes');
    }
};
