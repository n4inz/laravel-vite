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
        Schema::create('setting_status_talent', function (Blueprint $table) {
            $table->id();
            $table->string('status_name');
            $table->string('status_key');
            $table->string('color')->nullable();
            $table->unsignedBigInteger('users_id');
            $table->timestamps();
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
        Schema::dropIfExists('setting_status_talent');
    }
};
