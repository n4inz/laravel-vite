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
        Schema::create('setting_service_subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('sub_category_name');
            $table->string('sub_category_key');
            $table->enum('status', ['COSTUM','NOTCOSTUM']);
            $table->boolean('checkbox');
            $table->unsignedBigInteger('users_id');

            $table->unsignedBigInteger('service_categories_id');

            $table->timestamps();

            $table->foreign('service_categories_id')
            ->references('id')->on('setting_service_categories')
            ->onDelete('cascade');

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
        Schema::dropIfExists('setting_service_subcategories');
    }
};
