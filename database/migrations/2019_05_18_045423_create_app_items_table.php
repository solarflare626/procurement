<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('item_description');
            $table->longText('specifications');
            $table->string('unit');
            $table->double('unit_price',8, 2);
            $table->integer('quantity');
            $table->double('amount',8, 2);
            $table->string('cost_center');
            $table->string('procurement_mode');
            $table->integer('acc_no');
            $table->boolean('disabled')->nullable();
            $table->unsignedBigInteger('lot_id')->nullable();
            $table->foreign('lot_id')->references('id')->on('lots')->onDelete('cascade');
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
        Schema::dropIfExists('app_items');
    }
}
