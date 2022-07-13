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
        Schema::create('defined_check_lists', function (Blueprint $table) {
            $table->id();
            $table->string('body');
            $table->unsignedBigInteger('setting_additionals_id');
            $table->timestamps();

            $table->foreign('setting_additionals_id')
            ->references('id')->on('setting_additionals')
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
        Schema::dropIfExists('defined_check_lists');
    }
};
