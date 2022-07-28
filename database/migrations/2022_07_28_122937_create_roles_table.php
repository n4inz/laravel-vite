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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role');
        
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('stafs_id');

            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('stafs_id')
            ->references('id')->on('stafs')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
