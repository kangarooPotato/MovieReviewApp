<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_rate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('review_id');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');

            $table->foreignId('rate_id');
            $table->foreign('rate_id')->references('id')->on('rates')->onDelete('cascade');
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
        Schema::dropIfExists('review_rate');
    }
}
