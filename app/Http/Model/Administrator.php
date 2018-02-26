<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{  
		//关联管理员表(a_user)
		protected $table	= 'a_user';
		
		//关闭时间戳
		public $timestamps	= false;

		//可以批量赋值的字段
		protected $fillable = ['auname','aupass','ausex','auface','lip','ausex','ltime'];

		//public function admin_info()
		//{
			//return $this->hasOne('App\Http\Model\Admin_info','uid','') 
		//}
		// public static function add($request)
		// {
		// 	echo 1111;
		// 	// dd($request)
		// }

}
