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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('family');
            $table->string('title');
            $table->string('description');
            $table->string('id_unique');

            $table->string('location');
            $table->string('category');
            $table->string('part_time');
            $table->string('desired_living');
            $table->string('english_level');

            $table->boolean('comfortable_with_pets');
            $table->boolean('has_transportation');
            $table->boolean('has_driver_license');

            $table->time('start_time');
            $table->time('end_time');
            $table->string('duration');

            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('asap');
            $table->boolean('tbd');

            $table->string('salary_type');
            $table->string('rate');
            $table->string('pay_frequency');
            $table->string('pay_with');
            $table->boolean('rate_negotiable');

            $table->string('status');
            $table->enum('type', ['active', 'archived']);
            $table->unsignedBigInteger('users_id');
            // $table->unsignedBigInteger('tenants_id');
            $table->timestamps();


            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            // $table->foreign('tenants_id')
            // ->references('id')->on('tenants')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
