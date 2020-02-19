<?php

namespace App\Imports;

use App\Graph;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportGraph implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Graph([
          'name'      => $row[0],
          'desc'      => $row[1],
          'percent'   => $row[2],
          'number'    => $row[3],
          'field1'    => $row[4],
          'field2'    => $row[5],
          'field3'    => $row[6],
          'field4'    => $row[7],
          'field5'    => $row[8],
          'field6'    => $row[9],
          'field7'    => $row[10],
          'field8'    => $row[11],
          'field9'    => $row[12],
          'field10'   => $row[13],
          'field11'   => $row[14],
          'field12'   => $row[15],
          'value1'    => $row[16],
          'value2'    => $row[17],
          'value3'    => $row[18],
          'value4'    => $row[19],
          'value5'    => $row[20],
          'value6'    => $row[21],
          'value7'    => $row[22],
          'value8'    => $row[23],
          'value9'    => $row[24],
          'value10'   => $row[25],
          'value11'   => $row[26],
          'value12'   => $row[27],
        ]);
    }
}
