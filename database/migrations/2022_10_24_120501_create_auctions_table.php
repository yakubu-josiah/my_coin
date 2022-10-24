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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->double('amount')->default(0);
            $table->double('received')->default(0);
            $table->enum('status', array('Pending', 'Part', 'Paid', 'Cancelled'))->default('Pending');
            $table->enum('is_on', array('On', 'Off'))->nullable();
            $table->integer('is_recommit')->nullable();
            $table->dateTime('matured_date')->nullable();
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
        Schema::dropIfExists('auctions');
    }
};
