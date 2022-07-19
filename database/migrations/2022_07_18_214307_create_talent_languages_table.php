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
        Schema::create('talent_languages', function (Blueprint $table) {
            $table->id();
            $table->string('languages');
            $table->unsignedBigInteger('talents_id');
            $table->unsignedBigInteger('users_id');

            $table->foreign('talents_id')
            ->references('id')->on('talents')
            ->onDelete('cascade')->onUpdate('cascade');


            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('talent_languages');
    }
};
