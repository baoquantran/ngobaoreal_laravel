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
            $table->text('tongquan')->nullable();
            $table->text('vitri')->nullable();
            $table->text('matbang')->nullable();
            $table->text('tienich')->nullable();
            $table->text('thanhtoan')->nullable();
            $table->string('img',300);
            $table->string('slug', 255)->nullable();
            $table->string('content', 500)->nullable();
            $table->boolean('progress')->default(1);
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
