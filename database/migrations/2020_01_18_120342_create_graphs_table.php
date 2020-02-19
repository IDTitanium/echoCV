<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graphs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('desc');
            $table->string('percent')->nullable();
            $table->string('numb')->nullable();
            $table->string('field1')->nullable();
            $table->string('field2')->nullable();
            $table->string('field3')->nullable();
            $table->string('field4')->nullable();
            $table->string('field5')->nullable();
            $table->string('field6')->nullable();
            $table->string('field7')->nullable();
            $table->string('field8')->nullable();
            $table->string('field9')->nullable();
            $table->string('field10')->nullable();
            $table->string('field11')->nullable();
            $table->string('field12')->nullable();
            $table->bigInteger('value1')->unsigned()->nullable();
            $table->bigInteger('value2')->unsigned()->nullable();
            $table->bigInteger('value3')->unsigned()->nullable();
            $table->bigInteger('value4')->unsigned()->nullable();
            $table->bigInteger('value5')->unsigned()->nullable();
            $table->bigInteger('value6')->unsigned()->nullable();
            $table->bigInteger('value7')->unsigned()->nullable();
            $table->bigInteger('value8')->unsigned()->nullable();
            $table->bigInteger('value9')->unsigned()->nullable();
            $table->bigInteger('value10')->unsigned()->nullable();
            $table->bigInteger('value11')->unsigned()->nullable();
            $table->bigInteger('value12')->unsigned()->nullable();
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
        Schema::dropIfExists('graphs');
    }
}
