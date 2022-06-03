<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID');
            $table->foreignId('writerID');
            $table->text('text');
            $table->timestamps();

            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('writerID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function(Blueprint $table) {
            $table->dropForeign('reviews_userID_foreign');
            $table->dropForeign('reviews_writerID_foreign');
        });
        Schema::dropIfExists('reviews');
        
    }
}
