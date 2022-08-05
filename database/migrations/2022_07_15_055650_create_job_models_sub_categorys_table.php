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
        Schema::create('job_models_sub_categorys', function (Blueprint $table) {
            $table->id();

            // Child Care
            $table->string('nanny')->nullable()->default(false);
            $table->string('sister')->nullable()->default(false);
            $table->string('au_pair')->nullable()->default(false);
            $table->string('maternity_care')->nullable()->default(false);
            $table->string('at_home_daycare')->nullable()->default(false);
            $table->string('infant')->nullable()->default(false);

            $table->string('young_baby')->nullable()->default(false);
            $table->string('toddler')->nullable()->default(false);
            $table->string('press_schooler')->nullable()->default(false);
            $table->string('grade_schooler')->nullable()->default(false);
            $table->string('assist_bathing')->nullable()->default(false);
            
            // Senior care
            $table->string('companion')->nullable()->default(false);
            $table->string('personal_full_care')->nullable()->default(false);
            $table->string('laundry')->nullable()->default(false);
            $table->string('prep_meal')->nullable()->default(false);
            $table->string('cook_meal')->nullable()->default(false);
            $table->string('run_errands')->nullable()->default(false);
            $table->string('special_needs')->nullable()->default(false);
            $table->string('simple_housework')->nullable()->default(false);
            $table->string('assist_feeding')->nullable()->default(false);
            $table->string('hour_help')->nullable()->default(false);
            $table->string('remind_medicine')->nullable()->default(false); 


            // Home Care
            $table->string('companion_elders')->nullable()->default(false);
            $table->string('private_home_kitchen')->nullable()->default(false);
            $table->string('meal_prepation_coking')->nullable()->default(false);
            $table->string('house_cleaning')->nullable()->default(false);
            $table->string('provide_transportation')->nullable()->default(false);
            
            // Other
            $table->string('tutor')->nullable()->default(false);
            $table->string('pick_up_frop_off')->nullable()->default(false);
            $table->string('other_professional_services')->nullable()->default(false);

            



            $table->unsignedBigInteger('job_models_id');
            $table->timestamps();
            $table->foreign('job_models_id')
            ->references('id')->on('job_models')
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
        Schema::dropIfExists('job_models_sub_categorys');
    }
};
