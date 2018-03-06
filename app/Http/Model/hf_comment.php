<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class hf_comment extends Model
{
    public $table = 'hf_comment';

    public $timestamps = false; 

    // protected $fillable = ['uname','tel','passwd','sex','uface','nickname'];
    
    
    // public function h_user()
    // {

    //     return $this->hasOne('App\Model\h_user','uid','');
    // }
    public function h_user()
    {
    	return $this->hasOne('App\Http\Model\h_user','id','uid');
    }
    public function h_food()
    {
    	return $this->hasOne('App\Http\Model\h_food','id','fid');
    }
}