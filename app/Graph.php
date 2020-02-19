<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
  protected $table = 'graphs';
  public $timestamps = true;


  protected $fillable = [
  'name', 'desc', 'percent', 'numb', 'field1', 'field2', 'field3', 'field4', 'field5', 'field6', 
  'field7', 'field8', 'field9', 'field10', 'field11', 'field12', 'value1', 'value2', 'value3',
  'value4', 'value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12'
  ];
}
