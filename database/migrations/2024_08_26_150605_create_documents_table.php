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
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('passNumber');
            $table->foreign('passNumber')->references('passNumber')->on('users');
            $table->string('doc_name');// nazwa dokumentu
            $table->string('doc_number')->unique();// numer dokumentu
            $table->date('start_date');// data rozpoczecia
            $table->date('end_date');// data zakonczenia
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
