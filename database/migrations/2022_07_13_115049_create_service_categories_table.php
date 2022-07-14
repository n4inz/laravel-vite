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
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->boolean('chile_care');
            $table->boolean('nanny_sister');
            $table->boolean('au_pair');
            $table->boolean('maternity_care');
            $table->boolean('at_home_daycare');
            $table->boolean('senior_care');
            $table->boolean('companion');
            $table->boolean('personal_full_care');
            $table->boolean('home_care');
            $table->boolean('meal_prepation_coking');
            $table->boolean('house_cleaning');
            $table->boolean('private_home_kitchen');
            $table->string('other');
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
        Schema::dropIfExists('service_categories');
    }
};
