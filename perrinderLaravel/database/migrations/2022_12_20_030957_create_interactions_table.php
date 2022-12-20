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
        Schema::create('interactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_interested_dog');
            $table->unsignedBigInteger('id_candidate_dog');
            $table->string('preference', 100)->nullable();
            $table->timestamps();
            $table->foreign('id_interested_dog')->references('id')->on('dogs');
            $table->foreign('id_candidate_dog')->references('id')->on('dogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interactions');
    }
};
