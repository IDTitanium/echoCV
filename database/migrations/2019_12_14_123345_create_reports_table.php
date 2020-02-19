<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
    		$table->engine = 'MYISAM';
            $table->bigIncrements('id');
            $table->string('report_title');
            $table->string('content');
            $table->string('status');
            $table->string('subject')->nullable();
            $table->string('receiver');
            $table->string('image');
      			$table->bigInteger('user_id')->unsigned()->nullable();
      			$table->bigInteger('company_id')->unsigned()->nullable();
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
        Schema::dropIfExists('reports');
    }
}
