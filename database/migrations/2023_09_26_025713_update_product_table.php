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
        //
        Schema::table('product', function (Blueprint $table) {
            $table->unsignedBigInteger('id_status');
            $table->unsignedBigInteger('id_room');
            $table->foreign('id_status')->references('id_status')->on('status');
            $table->foreign('id_room')->references('id_room')->on('room');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
