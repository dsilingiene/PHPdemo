<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;


class CreateRadarsTable extends Migration
{
    //use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radars', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('number');
            $table->double('distance');
            $table->double('time');
            $table->integer('driver_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('radars');
    }
}
