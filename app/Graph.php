<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
  protected $table = 'graphs';
  public $timestamps = true;


  protected $fillable = [
  'name', 'desc', 'Date', 'Revenue', 'Cost_of_Goods_Sold', 'Gross_Profit', 'Payroll', 'Contactors', 'Marketing_Expenses', 'Office_Rent_&_Expenses',
  'Web_Services_&_Utilities', 'Travel_&_Entertainment', 'Total_Expenses', 'Net_Income', 'Cash_on_Hand', 'Months_of_Runway', 'Product_KPI_1', 'Product_KPI_2', 'Product_KPI_3',
  'Marketing_KPI_1', 'Marketing_KPI_2', 'Marketing_KPI_3', 'Sales_KPI_1', 'Sales_KPI_2', 'Sales_KPI_3', 'Customer_Success_KPI_1', 'Customer_Success_KPI_2', 'Customer_Success_KPI_3'
  ];
}
