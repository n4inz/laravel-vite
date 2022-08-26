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
        Schema::create('job_models_ranges', function (Blueprint $table) {
            $table->id();
            $table->string('status_from');
            $table->string('status_to');
            $table->string('date_first');
            $table->string('date_second');
            $table->string('day');
            $table->unsignedBigInteger('job_models_id');
            $table->unsignedBigInteger('users_id');

            $table->foreign('job_models_id')
            ->references('id')->on('job_models')
            ->onDelete('cascade');
            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('job_models_ranges');
    }
};
