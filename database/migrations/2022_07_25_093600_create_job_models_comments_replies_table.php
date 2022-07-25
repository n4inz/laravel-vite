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
        Schema::create('job_models_comments_replies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('comment');
            $table->string('avatar');


            $table->unsignedBigInteger('job_models_comments_id');
            $table->unsignedBigInteger('job_models_id');
            $table->unsignedBigInteger('users_id');

            $table->foreign('job_models_comments_id')
            ->references('id')->on('job_models_comments')
            ->onDelete('cascade');

            $table->foreign('job_models_id')
            ->references('id')->on('job_models')
            ->onDelete('cascade');
            
            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

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
        Schema::dropIfExists('job_models_comments_replies');
    }
};
