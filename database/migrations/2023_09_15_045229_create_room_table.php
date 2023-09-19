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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_roomtype');
            $table->unsignedBigInteger('id_status');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price_day',10,2);
            $table->decimal('price_night',10,2);
            $table->string('status_room');
            $table->timestamps();

            $table->foreign('id_roomtype')->references('id')->on('roomtype');
            $table->foreign('id_status')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
