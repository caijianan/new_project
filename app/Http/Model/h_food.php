<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class h_food extends Model
{
    protected $table = 'h_food';
    public $timestamps = false;


    public function shop()
    {
    	return $this->hasOne('App\Http\model\shop','id','sid');
    }
}
