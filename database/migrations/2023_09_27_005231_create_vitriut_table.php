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
        Schema::create('vitriut', function (Blueprint $table) {
            $table->id('id_vtut');
            $table->string('name_vtut',100);
            $table->string('name',100);
            $table->string('email',50);
            $table->string('phone',11);
            $table->boolean('status')->default(1);
            $table->boolean('hidden')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vitriut');
    }
};
