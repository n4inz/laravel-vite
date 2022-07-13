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
        Schema::create('setting_additionals', function (Blueprint $table) {
            $table->id();
            $table->boolean('notification_email');
            $table->string('dashboard_color_theme');
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
        Schema::dropIfExists('setting_additionals');
    }
};
