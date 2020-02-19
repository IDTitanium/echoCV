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
          'name'   => $row[0],
          'desc'   => $row[1],
          'percent'=> $row[2],
          'number' => $row[3],
          'aaa'    => $row[4],
          'bbb'    => $row[5],
          'ccc'    => $row[6],
          'ddd'    => $row[7],
          'eee'    => $row[8],
          'fff'    => $row[9],
          'ggg'    => $row[10],
          'hhh'    => $row[11],
        ]);
    }
}
