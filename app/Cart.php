<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //database table (Select the database table for this particular model)
    protected $table='cart';

    //primary key
    public $primaryKey = 'id';

    //timestamps
    public $timeStamps = true;

    //create relationship with user
    public function user(){
            return $this->belongsTo('App\User');
    }
}
