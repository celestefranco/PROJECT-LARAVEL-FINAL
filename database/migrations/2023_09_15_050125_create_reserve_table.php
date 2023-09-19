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
        Schema::create('reserve', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_status');
            $table->unsignedBigInteger('id_room');
            $table->unsignedBigInteger('id_client');           
            $table->date('star_date');
            $table->date('end_date');
            $table->string('status_reserve');
            $table->timestamps();

            $table->foreign('id_status')->references('id')->on('status');
            $table->foreign('id_room')->references('id')->on('room');
            $table->foreign('id_client')->references('id')->on('client');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserve');
    }
};
