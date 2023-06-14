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
        Schema::create('tra_loi', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('de_id')->unsigned();
            $table->foreign('de_id')->references('de_id')->on('de')->onDelete('cascade');
            $table->bigInteger('da_id')->unsigned();
            $table->foreign('da_id')->references('id')->on('dap_an')->onDelete('cascade');
            $table->bigInteger('ch_id')->unsigned();
            $table->foreign('ch_id')->references('ch_id')->on('cau_hoi')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tra_loi');
    }
};
