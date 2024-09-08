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
        Schema::create('tanks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('passNumber')->nullable();
            $table->foreign('passNumber')->references('passNumber')->on('users');
            $table->string('manufacturer')->nullable();
            $table->string('model')->nullable();
            $table->string('vehicle_number')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanks');
    }
};
