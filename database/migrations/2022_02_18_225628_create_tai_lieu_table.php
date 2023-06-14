<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_lieu', function (Blueprint $table) {
            $table->id('id');
            $table->text('content')->nullable();
            $table->longText('title')->nullable();
            $table->bigInteger('chuong_id')->unsigned();
            $table->foreign('chuong_id')->references('id')->on('chuong')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_lieu');
    }
};
