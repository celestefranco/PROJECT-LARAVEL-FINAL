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
        Schema::create('trip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_status'); 
            $table->unsignedBigInteger('id_reserve');  
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('type_trip');
            $table->date('date_trip');
            $table->string('image')->nullable();
            $table->decimal('price',10,2); 
            $table->timestamps();

            $table->foreign('id_status')->references('id')->on('status');
            $table->foreign('id_reserve')->references('id')->on('reserve');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip');
    }
};
