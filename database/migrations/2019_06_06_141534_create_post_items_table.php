<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->string('images');
            $table->integer('price');
            $table->enum('pricing', ['daily','weekly','monthly','yearly']);
            $table->enum('type',['apartment','flat','room','hostel','paying_guest','hotel']);
            $table->string('street_address');
            $table->string('area_address');
            $table->string('city_address');
            $table->integer('number_of_bed_room');
            $table->integer('number_of_wash_room');
            $table->integer('total_area');
            $table->integer('floor');
            $table->string('amenities');
            $table->mediumText('description');
            $table->double('longitude');
            $table->double('latitude');
            $table->boolean('is_sold');
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
        Schema::dropIfExists('post_items');
    }
}
