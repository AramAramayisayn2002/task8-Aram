<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('city');
            $table->string('address');
            $table->string('description');
            $table->string('status');
            $table->integer('price');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('property_types')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
