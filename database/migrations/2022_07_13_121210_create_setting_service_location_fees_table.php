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
        Schema::create('setting_service_location_fees', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->boolean('send_notifcation')->nullable()->default(false);
            $table->string('aplication_fee')->nullable();
            $table->boolean('aplication_fee_check')->nullable();
            $table->string('placement_fee')->nullable();
            $table->boolean('placement_fee_check')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->boolean('hourly_rate_check')->nullable();
            $table->unsignedBigInteger('setting_details_id');
            $table->unsignedBigInteger('users_id');

            $table->timestamps();

            $table->foreign('setting_details_id')
            ->references('id')->on('setting_details')
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
        Schema::dropIfExists('setting_service_location_fees');
    }
};
