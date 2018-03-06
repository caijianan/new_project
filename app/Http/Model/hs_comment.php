<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class hs_comment extends Model
{
    public $table = 'hs_comment';

    public $timestamps = false; 

    // protected $fillable = ['uname','tel','passwd','sex','uface','nickname'];
    
    
    // public function h_user()
    // {

    //     return $this->hasOne('App\Model\h_user','uid','');
    // }

}