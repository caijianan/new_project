<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class h_like extends Model
{
    protected $table = 'h_like';
    public $timestamps = false;

    public function h_shop()
    {
    	return $this->hasOne('App\Http\Model\shop','id','sid');
    }
}
