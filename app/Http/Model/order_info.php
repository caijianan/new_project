<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class order_info extends Model
{
    protected $table = 'order_info';
    public $timestamps = false;

    public function h_order()
    {
    	// return $this->belongsTo('App\Http\mode\h_order');
    }
}
