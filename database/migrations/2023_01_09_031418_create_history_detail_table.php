<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ItemID')->constrained('products','ItemID');
            $table->foreignId('historyId')->constrained('history','id');
            $table->integer('Quantity');
            $table->string('ReceiverName');
            $table->string('ReceiverAddress');
            $table->timestamps();
            //$table->foreign('itemID')->references('ItemID')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_detail');
    }
}
