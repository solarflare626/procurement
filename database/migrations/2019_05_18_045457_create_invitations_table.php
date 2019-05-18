<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name');
            $table->string('procurement_type');
            $table->string('reference_no');
            $table->string('location');
            $table->double('approved_budget',20,2);
            $table->string('fund_source');
            $table->double('bidder_fee',20,2);
            $table->string('delivery_period');
            $table->string('delivery_status');
            // $table->unsignedBigInteger('supplier_id');
            // $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
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
        Schema::dropIfExists('invitations');
    }
}
