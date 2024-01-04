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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('brand');
            $table->integer('year');
            $table->string('fuel');
            $table->string('transmission');
            $table->integer('mileage');
            $table->string('availability');
            $table->integer('price');
            $table->text('extra_info');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('postal_code');
            $table->text('photos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
