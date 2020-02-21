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
            $table->string('Date')->nullable();
            $table->string('Revenue')->nullable();
            $table->string('Cost_of_Goods_Sold')->nullable();
            $table->string('Gross_Profit')->nullable();
            $table->string('Payroll')->nullable();
            $table->string('Contactors')->nullable();
            $table->string('Marketing_Expenses')->nullable();
            $table->string('Office_Rent_&_Expenses')->nullable();
            $table->string('Web_Services_&_Utilities')->nullable();
            $table->string('Travel_&_Entertainment')->nullable();
            $table->string('Total_Expenses')->nullable();
            $table->string('Net_Income')->nullable();
            $table->string('Cash_on_Hand')->nullable();
            $table->string('Months_of_Runway')->nullable();
            $table->bigInteger('Product_KPI_1')->unsigned()->nullable();
            $table->bigInteger('Product_KPI_2')->unsigned()->nullable();
            $table->bigInteger('Product_KPI_3')->unsigned()->nullable();
            $table->bigInteger('Marketing_KPI_1')->unsigned()->nullable();
            $table->bigInteger('Marketing_KPI_2')->unsigned()->nullable();
            $table->bigInteger('Marketing_KPI_3')->unsigned()->nullable();
            $table->bigInteger('Sales_KPI_1')->unsigned()->nullable();
            $table->bigInteger('Sales_KPI_2')->unsigned()->nullable();
            $table->bigInteger('Sales_KPI_3')->unsigned()->nullable();
            $table->bigInteger('Customer_Success_KPI_1')->unsigned()->nullable();
            $table->bigInteger('Customer_Success_KPI_2')->unsigned()->nullable();
            $table->bigInteger('Customer_Success_KPI_3')->unsigned()->nullable();
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
