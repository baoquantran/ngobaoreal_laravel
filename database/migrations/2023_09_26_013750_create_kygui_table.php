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
        Schema::create('kygui', function (Blueprint $table) {
            $table->id('id_kygui');
            $table->string('name',50);
            $table->string('email',50)->nullable();
            $table->string('phone',11);
            $table->boolean('type')->default(0); 
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kygui');
    }
};
