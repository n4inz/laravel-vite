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
        Schema::create('job_models_new_aplicants_files', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->unsignedBigInteger('new_applicants_id');
            $table->foreign('new_applicants_id')
            ->references('id')->on('job_models_new_applicants')
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
        Schema::dropIfExists('job_models_new_aplicants_files');
    }
};
