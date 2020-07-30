<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->default('client-1.jpg');
            $table->string('client_name');
            $table->string('client_position');
            $table->longText('client_says');
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
        Schema::dropIfExists('client_reviews');
    }
}
