<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitationLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitation_lots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('bid_submitted');
            $table->string('receiver');
            $table->double('bid_amount',8,2);
            $table->string('status');
            $table->dateTime('bid_opened');
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
        Schema::dropIfExists('invitation_lots');
    }
}
