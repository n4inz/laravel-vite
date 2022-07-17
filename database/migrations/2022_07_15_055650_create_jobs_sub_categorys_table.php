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
            $table->boolean('companion_elders')->nullable()->default(false);
            $table->boolean('hour_help')->nullable()->default(false);
            $table->boolean('cook_meal')->nullable()->default(false);
            $table->boolean('remind_medicine')->nullable()->default(false);
            $table->boolean('run_errands')->nullable()->default(false);
            $table->boolean('simple_housework')->nullable()->default(false);
            $table->boolean('provide_transportation')->nullable()->default(false);
            $table->boolean('assist_feeding')->nullable()->default(false);
            $table->boolean('laundry')->nullable()->default(false);
            $table->boolean('special_needs')->nullable()->default(false);
            $table->boolean('prep_meal')->nullable()->default(false);
            $table->boolean('assist_bathing')->nullable()->default(false);

            $table->boolean('nanny')->nullable()->default(false);
            $table->boolean('sister')->nullable()->default(false);
            $table->boolean('maternity_care')->nullable()->default(false);
            $table->boolean('at_home_daycare')->nullable()->default(false);
            $table->boolean('infant')->nullable()->default(false);
            $table->boolean('young_baby')->nullable()->default(false);
            $table->boolean('toddler')->nullable()->default(false);
            $table->boolean('press_schooler')->nullable()->default(false);
            $table->boolean('grade_Schooler')->nullable()->default(false);
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
