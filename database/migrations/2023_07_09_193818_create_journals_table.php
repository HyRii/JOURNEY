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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('id_user')->unsigned();
            $table->string('image')->nullable();
            $table->string('place');
            $table->string('country')->index();;
            $table->date('date');
            $table->string('experience');
            // $table->foreign('id_user')->references('id')->on('journals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
