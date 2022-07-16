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
        Schema::create('jobs_sub_categorys', function (Blueprint $table) {
            $table->id();
            $table->boolean('companion_elders');
            $table->boolean('hour_help');
            $table->boolean('cook_meal');
            $table->boolean('remind_medicine');
            $table->boolean('run_errands');
            $table->boolean('simple_housework');
            $table->boolean('provide_transportation');
            $table->boolean('assist_feeding');
            $table->boolean('laundry');
            $table->boolean('special_needs');
            $table->boolean('prep_meal');
            $table->boolean('assist_bathing');

            $table->boolean('nanny');
            $table->boolean('sister');
            $table->boolean('maternity_care');
            $table->boolean('at_home_daycare');
            $table->boolean('infant');
            $table->boolean('young_baby');
            $table->boolean('toddler');
            $table->boolean('press_schooler');
            $table->boolean('grade_Schooler');
            // $table->string('simple_housework');
            // $table->string('laundry');
            // $table->string('prep_meal');
            // $table->string('cook_meal');
            // $table->string('run_errands');
            // $table->string('special_needs');
            // $table->string('provide_transportation');

            $table->unsignedBigInteger('jobs_id');
            $table->timestamps();
            $table->foreign('jobs_id')
            ->references('id')->on('jobs')
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
        Schema::dropIfExists('jobs_sub_categorys');
    }
};
