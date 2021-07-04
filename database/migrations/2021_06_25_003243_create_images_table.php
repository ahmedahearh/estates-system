<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->mediumText('caption');
            $table->longText('full_description');
            $table->string('image',191);
            $table->enum('visibility_status', ['Visible', 'Hidden']);
            $table->foreignId('property_id');
            $table->foreign('property_id')->on('properties')->references('id');
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
        Schema::dropIfExists('images');
    }
}
