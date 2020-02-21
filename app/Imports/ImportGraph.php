<?php

namespace App\Imports;

use App\Graph;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportGraph implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Graph([
          'Date'  => $row['date'],
          'Revenue' => $row['revenue'],
          'Cost_of_Goods_Sold'  => $row['cost_of_goods_sold'],
          'Gross_Profit'  => $row['gross_profit'],
          'Payroll'  => $row['payroll'],
          'Contactors'  => $row['contactors'],
          'Marketing_Expenses'  => $row['marketing_expenses'],
          'Office_Rent_&_Expenses'  => $row['office_rent_and_expenses'],
          'Web_Services_&_Utilities'  => $row['web_services_and_utilities'],
          'Travel_&_Entertainment'  => $row['travel_and_entertainment'],
          'Total_Expenses'  => $row['total_expenses'],
          'Net_Income'  => $row['net_income'],
          'Cash_on_Hand'  => $row['cash_on_hand'],
          'Months_of_Runway'  => $row['months_of_runway'],
          'Product_KPI_1'  => $row['product_kpi_1'],
          'Product_KPI_2'  => $row['product_kpi_2'],
          'Product_KPI_3'  => $row['product_kpi_3'],
          'Marketing_KPI_1'  => $row['marketing_kpi_1'],
          'Marketing_KPI_2'  => $row['marketing_kpi_2'],
          'Marketing_KPI_3'  => $row['marketing_kpi_3'],
          'Sales_KPI_1'  => $row['sales_kpi_1'],
          'Sales_KPI_2'  => $row['sales_kpi_2'],
          'Sales_KPI_3'  => $row['sales_kpi_3'],
          'Customer_Success_KPI_1'  => $row['customer_success_kpi_1'],
          'Customer_Success_KPI_2'  => $row['customer_success_kpi_2'],
          'Customer_Success_KPI_3'  => $row['customer_success_kpi_3'],


          // 'name'      => $row[0],
          // 'desc'      => $row[1],
          // 'percent'   => $row[2],
          // 'number'    => $row[3],
          // 'field1'    => $row[4],
          // 'field2'    => $row[5],
          // 'field3'    => $row[6],
          // 'field4'    => $row[7],
          // 'field5'    => $row[8],
          // 'field6'    => $row[9],
          // 'field7'    => $row[10],
          // 'field8'    => $row[11],
          // 'field9'    => $row[12],
          // 'field10'   => $row[13],
          // 'field11'   => $row[14],
          // 'field12'   => $row[15],
          // 'value1'    => $row[16],
          // 'value2'    => $row[17],
          // 'value3'    => $row[18],
          // 'value4'    => $row[19],
          // 'value5'    => $row[20],
          // 'value6'    => $row[21],
          // 'value7'    => $row[22],
          // 'value8'    => $row[23],
          // 'value9'    => $row[24],
          // 'value10'   => $row[25],
          // 'value11'   => $row[26],
          // 'value12'   => $row[27],
        ]);
    }

    public function rules(): array
    {
        return [

        ];
    }
}
