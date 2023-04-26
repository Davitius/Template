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
        Schema::table('palettes', function (Blueprint $table) {
            $table->string('title_GE')->nullable()->after('modul');
            $table->string('title_EN')->nullable()->after('title_GE');
            $table->string('title_RU')->nullable()->after('title_EN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('palettes', function (Blueprint $table) {
            $table->dropColumn('title_GE');
        });
        Schema::table('palettes', function (Blueprint $table) {
            $table->dropColumn('title_EN');
        });
        Schema::table('palettes', function (Blueprint $table) {
            $table->dropColumn('title_RU');
        });
    }
};
