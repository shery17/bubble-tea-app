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
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('boba_id');
            
            // Add foreign key with cascade delete
            $table->foreign('boba_id')
                    ->references('id')
                    ->on('bobas')
                    ->onDelete('cascade'); // <- deletes reviews when boba is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('boba_id');
            $table->dropColumn('boba_id');
        });
    }
};
