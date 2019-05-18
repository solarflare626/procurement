<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('csi_no');
            $table->string('company_name');
            $table->string('address');
            $table->string('contact_person');
            $table->string('contact_no');
            $table->string('email');
            $table->unsignedBigInteger('invitation_id');
            $table->foreign('invitation_id')->references('id')->on('invitations')->onDelete('cascade');
            
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
        Schema::dropIfExists('bidders');
    }
}
