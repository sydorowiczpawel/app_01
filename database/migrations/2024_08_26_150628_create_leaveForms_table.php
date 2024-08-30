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
        Schema::create('leaveForms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('passNumber');
            $table->foreign('passNumber')->references('passNumber')->on('users');
            $table->string('vehicle_number');
            $table->foreign('vehicle_number')->references('vehicle_number')->on('tanks');
            $table->string('series')->unique();
            $table->date('start_date');
            $table->date('end_date');
            $table->double('km_before_use');
            $table->double('km_after_use')->nullable();
            $table->double('geh_start');
            $table->double('geh_end')->nullable();
            $table->double('leh_start');
            $table->double('leh_end')->nullable();
            $table->integer('heater_min')->nullable();
            $table->integer('7,62 bullets')->nullable();
            $table->integer('.50 bullets')->nullable();
            $table->integer('main_gun_rounds')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_forms');
    }
};
