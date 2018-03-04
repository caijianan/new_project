<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class h_user extends Model
{
    public $table = 'h_user';

    public $timestamps = false; 

    protected $fillable = ['uname','tel','passwd','sex','uface','isshoper'];
    
    
    // public function h_user()
    // {

    //     return $this->hasOne('App\Model\h_user','uid','');
    // }

}