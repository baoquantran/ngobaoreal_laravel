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
        Schema::create('product', function (Blueprint $table) {
            $table->id('id_pro');
            $table->string('name',100);
            $table->string('address',100);
            $table->string('from_price',50)->nullable();
            $table->string('to_price',50);
            $table->string('acreage',50)->nullable();
            $table->string('img',300);
            $table->string('local',300);
            $table->string('slug', 255)->nullable();
            $table->string('content', 500)->nullable();
            $table->boolean('hide')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
