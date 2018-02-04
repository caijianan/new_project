<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class h_order extends Model
{
    protected $table = 'h_order';
    public $timestamps = false;

    public function order_info()
    {
    	return $this->hasOne('App\Http\model\order_info','oid','id');
    }
}
