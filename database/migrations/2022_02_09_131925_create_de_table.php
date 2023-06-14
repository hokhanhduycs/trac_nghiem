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
        Schema::create('de', function (Blueprint $table) {
            $table->id('de_id');
            $table->string('mark')->default(0);
            $table->string('name');
            $table->string('unit');
            $table->string('classification')->nullable();
            $table->integer('status')->default(0);
            $table->date('birth');
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('phong_thi')->onDelete('cascade');
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
        Schema::dropIfExists('de');
    }
};
