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
        Schema::create('job_models', function (Blueprint $table) {
            // $table->id();
            // $table->string('uid');
            // $table->string('family');
            // $table->string('title');
            // $table->text('description');
            // $table->unsignedInteger('id_unique');

            // // $table->string('id_unique');

            // $table->string('location')->nullable();
            // $table->string('category')->nullable();
            // $table->string('part_time')->nullable();
            // $table->string('desired_living')->nullable();
            // $table->string('english_level')->nullable();

            // $table->boolean('comfortable_with_pets')->nullable()->default(false);
            // $table->boolean('has_transportation')->nullable()->default(false);
            // $table->boolean('has_driver_license')->nullable()->default(false);

            // $table->time('start_time');
            // $table->time('end_time');
            // $table->string('duration');

            // $table->date('start_date')->nullable();
            // $table->date('end_date')->nullable();
            // $table->boolean('asap')->nullable()->default(false);
            // $table->boolean('tbd')->nullable()->default(false);

            // $table->string('salary_type');
            // $table->string('rate');
            // $table->string('pay_frequency');
            // $table->string('pay_with');
            // $table->boolean('rate_negotiable')->nullable()->default(false);

            // $table->string('status');
            // $table->enum('type', ['active', 'archived']);
            // $table->string('url_calendly')->nullable();
            // $table->unsignedBigInteger('users_id');

            // // $table->unsignedBigInteger('tenants_id');
            // $table->timestamps();

            // $table->foreign('users_id')
            // ->references('id')->on('users')
            // ->onDelete('cascade');


            // $table->foreign('tenants_id')
            // ->references('id')->on('tenants')
            // ->onDelete('cascade');


            $table->id();
            $table->string('uid');
            $table->string('family')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('id_unique');

            // $table->string('id_unique');

            $table->string('location')->nullable();
            $table->string('category')->nullable();
            $table->string('part_time')->nullable();
            $table->string('desired_living')->nullable();
            $table->string('english_level')->nullable();

            $table->boolean('comfortable_with_pets')->nullable()->default(false);
            $table->boolean('has_transportation')->nullable()->default(false);
            $table->boolean('has_driver_license')->nullable()->default(false);

            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('duration')->nullable();

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('asap')->nullable()->default(false);
            $table->boolean('tbd')->nullable()->default(false);

            $table->string('salary_type')->nullable();
            $table->string('rate')->nullable();
            $table->string('pay_frequency')->nullable();
            $table->string('pay_with')->nullable();
            $table->boolean('rate_negotiable')->nullable()->default(false);

            $table->string('status')->nullable();
            $table->enum('type', ['active', 'archived']);
            $table->string('url_calendly')->nullable();
            $table->string('uri_api')->nullable();
            $table->unsignedBigInteger('users_id');

            $table->unsignedBigInteger('stafs_id')->nullable();


            // $table->unsignedBigInteger('tenants_id');
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
        Schema::dropIfExists('job_models');
    }
};
