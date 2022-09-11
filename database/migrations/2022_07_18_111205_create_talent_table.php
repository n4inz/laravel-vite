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
        Schema::create('talents', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->nullable();
            $table->string('color')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('day_of_birthday');
            $table->string('experience');
            $table->string('email');
            $table->string('phone');

            $table->string('address');
            $table->string('about_talent');
            $table->integer('email_verified')->nullable();
            $table->integer('background_check')->nullable();
            $table->integer('vaccination')->nullable();
            $table->string('file_documents')->nullable();
            $table->unsignedBigInteger('users_id');

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
        Schema::dropIfExists('talents');
    }
};
