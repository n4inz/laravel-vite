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
        Schema::create('job_models_availabilty_days', function (Blueprint $table) {
            $table->id();
            $table->boolean('monday')->nullable()->default(false);
            $table->boolean('tuesday')->nullable()->default(false);
            $table->boolean('wednesday')->nullable()->default(false);
            $table->boolean('thursday')->nullable()->default(false);
            $table->boolean('friday')->nullable()->default(false);
            $table->boolean('saturday')->nullable()->default(false);
            $table->boolean('sunday')->nullable()->default(false);
            $table->unsignedBigInteger('job_models_id');
            $table->timestamps();
            $table->foreign('job_models_id')
            ->references('id')->on('job_models')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_models_availabilty_days');
    }
};
