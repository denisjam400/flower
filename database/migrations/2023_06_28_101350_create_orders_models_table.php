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
        Schema::create('orders_models', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('country');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('Address');
            $table->string('Address_2')->nullable();
            $table->string('State');
            $table->string('Town');
            $table->integer('PostalCode');
            $table->string('Email');
            $table->bigInteger('Phone');
            $table->string('NoteFromSeller')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_models');
    }
};
