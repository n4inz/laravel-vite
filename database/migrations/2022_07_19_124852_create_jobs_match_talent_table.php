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
        Schema::create('jobs_match_talent', function (Blueprint $table) {
            $table->id();
            $table->string('jobs_sub_category');

            $table->unsignedBigInteger('jobs_id');
            $table->unsignedBigInteger('users_id');

            $table->timestamps();

            $table->foreign('jobs_id')
            ->references('id')->on('jobs')
            ->onDelete('cascade');
            $table->foreign('users_id')
            ->references('id')->on('users')
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
        Schema::dropIfExists('jobs_match_talent');
    }
};
