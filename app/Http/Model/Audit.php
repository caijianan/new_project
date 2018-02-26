<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $table	= 'a_apply';
    public $timestamps = false;
    protected $fillable = ['uid','ap_name','ap_addr','ap_person','ap_num','ap_range','ap_img','ap_time','ap_status'];
    
}
