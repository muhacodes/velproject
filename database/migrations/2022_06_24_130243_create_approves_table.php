<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approves', function (Blueprint $table) {
            $table->id();
            $table->integer('job_card_no');
            $table->string('branch_name');
            $table->string('customer_name');
            $table->string('description', 2000);
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('actual_amount');
            $table->integer('price_difference');
            $table->integer('total_difference');
            $table->string('is_approved')->nullable();
            $table->integer('user_id')->nullable()->unsigned();
            $table->timestamps();
        });

        Schema::table('approves', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approves');
    }
}
