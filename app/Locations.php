<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
     //database table (Select the database table for this particular model)
     protected $table='locations';

     //primary key
     public $primaryKey = 'id';
 
     //timestamps
     public $timeStamps = true;
}
