<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualBiddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actual_biddings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('amount',20,2)->nullable();
            $table->string('receiver')->nullable();
            $table->string('status')->nullable();
            $table->string('notice')->nullable();
            $table->boolean('submitted')->nullable();
            $table->unsignedBigInteger('invitation_id');
            $table->foreign('invitation_id')->references('id')->on('invitations')->onDelete('cascade');
            $table->unsignedBigInteger('bidder_id');
            $table->foreign('bidder_id')->references('id')->on('bidders')->onDelete('cascade');
            
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
        Schema::dropIfExists('actual_biddings');
    }
}
