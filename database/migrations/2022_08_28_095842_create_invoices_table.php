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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('id_invoice');
            $table->string('id_costumer');
            $table->string('id_prod');
            $table->string('id_price');
            $table->string('name_costumer')->nullable();
            $table->string('email_costumer');
            $table->string('hosted_invoice_url');
            $table->string('invoice_pdf');
            $table->string('status');
            $table->unsignedBigInteger('clients_id');
            $table->unsignedBigInteger('job_models_id');
            $table->unsignedBigInteger('users_id');

            $table->foreign('job_models_id')
            ->references('id')->on('job_models')
            ->onDelete('cascade');

            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('clients_id')
            ->references('id')->on('clients')
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
        Schema::dropIfExists('invoices');
    }
};
