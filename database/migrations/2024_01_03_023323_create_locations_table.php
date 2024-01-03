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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name',256);
            $table->string('street_address',256);
            $table->string('city',56);
            $table->char('state',2);
            $table->char('zip_code',5);
            $table->char('phone_number',10);
            $table->decimal('latitude', $precision = 10, $scale = 8);
            $table->decimal('longitude',$precision = 10, $scale = 8);
            $table->decimal('distance',$precision = 10, $scale = 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
