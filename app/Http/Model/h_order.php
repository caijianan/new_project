<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class h_order extends Model
{
    protected $table = 'h_order';
    public $timestamps = false;
    
    public function shop()
    {
        return $this->hasOne('App\Http\model\shop','id','sid');
    }

    public function h_addr()
    {
        return $this->hasOne('App\Http\model\h_addr','id','aid');
    }

    public function order_info()
    {
        return $this->hasMany('App\Http\model\order_info','oid','id');
    }

    public function morder_info()
    {
        return $this->belongsToMany('App\Http\model\order_info','oid','id');
    }

    public function h_food()
    {
    	return $this->hasOne('App\Http\model\h_food','id','fid');
    }


}
