<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lent_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID');
            $table->foreignId('productID');
            $table->boolean('lent')->default(1);

            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('productID')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lent_items', function(Blueprint $table) {
            $table->dropForeign('lent_items_userID_foreign');
            $table->dropForeign('lent_items_productID_foreign');
        });
        Schema::dropIfExists('lent_items');
    }
}
