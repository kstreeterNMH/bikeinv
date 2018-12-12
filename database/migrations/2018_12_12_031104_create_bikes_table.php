<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * Description
     * WheelSize
     * FrameSize
     * Speeds
     * Price
     * ImagePath
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('Description');
            $table->string('WheelSize');
            $table->string('FrameSize');
            $table->intval('Speeds');
            $table->floatval('Price');
            $table->string('ImagePath');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bikes');
    }
}
