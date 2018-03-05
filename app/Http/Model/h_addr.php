<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class h_addr extends Model
{

    //关联管理员表(a_user)
		protected $table	= 'h_addr';
		
		//关闭时间戳
		public $timestamps	= false;

		protected $fillable = ['uid','rtel','tel','address','default'];


}
