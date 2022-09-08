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
        Schema::create('setting_defined_check_lists', function (Blueprint $table) {
            $table->id();
            $table->string('body')->nullable();
            $table->string('day')->nullable();
            $table->integer('order')->nullable();
            $table->unsignedBigInteger('setting_additionals_id');
            $table->unsignedBigInteger('users_id');

            $table->timestamps();

            $table->foreign('setting_additionals_id')
            ->references('id')->on('setting_additionals')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_defined_check_lists');
    }
};
