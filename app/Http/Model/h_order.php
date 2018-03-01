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
        return $this->hasOne('App\Http\model\shop','id','aid');
    }
}
