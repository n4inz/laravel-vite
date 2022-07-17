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
        Schema::create('setting_service_categories', function (Blueprint $table) {
            $table->id();
            $table->boolean('chile_care')->nullable()->default(false);
            $table->boolean('nanny_sister')->nullable()->default(false);
            $table->boolean('au_pair')->nullable()->default(false);
            $table->boolean('maternity_care')->nullable()->default(false);
            $table->boolean('at_home_daycare')->nullable()->default(false);
            $table->boolean('senior_care')->nullable()->default(false);
            $table->boolean('companion')->nullable()->default(false);
            $table->boolean('personal_full_care')->nullable()->default(false);
            $table->boolean('home_care')->nullable()->default(false);
            $table->boolean('meal_prepation_coking')->nullable()->default(false);
            $table->boolean('house_cleaning')->nullable()->default(false);
            $table->boolean('private_home_kitchen')->nullable()->default(false);
            $table->string('other')->nullable();
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
        Schema::dropIfExists('setting_service_categories');
    }
};
