<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class order_info extends Model
{
    protected $table = 'order_info';
    public $timestamps = false;

    public function h_food()
    {
    	return $this->hasMany('App\Http\model\h_food','id','fid');

    }
}
