<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     // create the days of the weeks table in the DB
    public function up(): void
    {
        Schema::create('day_of_the_weeks', function (Blueprint $table) {
            $table->id()->autoIncrement;
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_of_the_weeks');
    }
};
