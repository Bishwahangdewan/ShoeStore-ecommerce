<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     //database table (Select the database table for this particular model)
     protected $table='items';

     //primary key
     public $primaryKey = 'id';
 
     //timestamps
     public $timeStamps = true;
 
     //create relationship with user
     public function user(){
             return $this->belongsTo('App\User');
     }
}
