<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class a_comp extends Model
{
	// 指定表名
    public $table = 'a_comp';
    // 关闭自动维护，不使用created_at和updated_at字段
    public $timestamps = false;

    public function h_user()
    {
    	return $this->hasOne('App\Http\Model\h_user', 'uid', 'coid');
    }

     public function shop()
    {
    	return $this->hasOne('App\Http\Model\shop', 'id', 'coid');
    }
}
