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
        Schema::create('job_models_match_talent_adds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('talents_id');
            $table->string('status')->nullable();
            $table->string('color_status')->nullable();
            $table->unsignedBigInteger('job_models_id');

            $table->foreign('job_models_id')
            ->references('id')->on('job_models')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('talents_id')
            ->references('id')->on('talents');
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
        Schema::dropIfExists('job_models_match_talent_adds');
    }
};
