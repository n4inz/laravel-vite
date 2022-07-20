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
            $table->string('companion_elders')->nullable()->default(false);
            $table->string('hour_help')->nullable()->default(false);
            $table->string('cook_meal')->nullable()->default(false);
            $table->string('remind_medicine')->nullable()->default(false);
            $table->string('run_errands')->nullable()->default(false);
            $table->string('simple_housework')->nullable()->default(false);
            $table->string('provide_transportation')->nullable()->default(false);
            $table->string('assist_feeding')->nullable()->default(false);
            $table->string('laundry')->nullable()->default(false);
            $table->string('special_needs')->nullable()->default(false);
            $table->string('prep_meal')->nullable()->default(false);
            $table->string('assist_bathing')->nullable()->default(false);

            $table->string('nanny')->nullable()->default(false);
            $table->string('sister')->nullable()->default(false);
            $table->string('maternity_care')->nullable()->default(false);
            $table->string('at_home_daycare')->nullable()->default(false);
            $table->string('infant')->nullable()->default(false);
            $table->string('young_baby')->nullable()->default(false);
            $table->string('toddler')->nullable()->default(false);
            $table->string('press_schooler')->nullable()->default(false);
            $table->string('grade_schooler')->nullable()->default(false);
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
