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
        Schema::create('bobas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->String('liquid');
            $table->String('cupSize');
            $table->String('temperature');
            $table->String('topping');
            $table->String('sugarLevel');
            $table->String('iceLevel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bobas');
    }
};
