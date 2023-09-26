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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id('id_pd');
            $table->text('tongquan');
            $table->text('vitri');
            $table->text('tienich');
            $table->text('content');
            $table->timestamps();
            $table->foreign('id_pro')->references('id_pro')->on('product');
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
