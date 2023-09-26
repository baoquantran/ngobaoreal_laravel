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
        Schema::create('tuvan', function (Blueprint $table) {
            $table->id('id_tuvan');
            $table->string('name', 50);
            $table->string('email', 255)->nullable();
            $table->string('phone',11);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
        // Schema::create('tuvan', function (Blueprint $table) {
        //     $table->id('id_tuvan');
        //     $table->string('name',50);
        //     $table->string('email',50)->nullable();
        //     $table->integer('phone',11);
        //     $table->tinyInteger('status')->default(0);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuvan');
    }
};
