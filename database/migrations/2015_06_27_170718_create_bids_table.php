<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('bidtype')->unsigned();
            $table->integer('variant')->unsigned();

            $table->string('name');
            $table->string('email');
            $table->string('phone');

            $table->text('descr');

            $table->dateTime('messagedate');
            $table->boolean('mailed');

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
        Schema::drop('bids');
    }
}
