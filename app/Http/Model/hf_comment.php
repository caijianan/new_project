<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class hf_comment extends Model
{
    protected $table = 'hf_comment';
    public $timestamps = false;

    public function h_food()
    {
    	return $this->hasOne('App\Http\Model\h_food','id','fid');
    }
}
