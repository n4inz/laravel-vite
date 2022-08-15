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
        Schema::create('setting_calendly_apis', function (Blueprint $table) {
            $table->id();
            $table->text('token');
            $table->string('current_organization');
            $table->string('scheduling_url');
            $table->string('uri');
            $table->unsignedBigInteger('users_id');
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
        Schema::dropIfExists('setting_calendly_apis');
    }
};
