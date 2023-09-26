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
            $table->unsignedBigInteger('id_cate');
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_status');
            $table->unsignedBigInteger('id_room');
            $table->unsignedBigInteger('id_local');
            $table->foreign('id_cate')->references('id_cate')->on('category');
            $table->foreign('id_project')->references('id_project')->on('project');
            $table->foreign('id_status')->references('id_status')->on('status');
            $table->foreign('id_room')->references('id_room')->on('room');
            $table->foreign('id_local')->references('id_local')->on('local');
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
