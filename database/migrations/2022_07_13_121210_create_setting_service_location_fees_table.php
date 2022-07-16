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
            $table->boolean('send_notifcation');
            $table->string('aplication_fee');
            $table->string('placement_fee');
            $table->string('hourly_rate');
            $table->unsignedBigInteger('setting_details_id');
            $table->timestamps();

            $table->foreign('setting_details_id')
            ->references('id')->on('setting_details')
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
        Schema::dropIfExists('setting_service_location_fees');
    }
};
