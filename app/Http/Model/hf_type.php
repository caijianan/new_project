<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class hf_type extends Model
{
    // 指定表名
    public $table = 'hf_type';
    // 关闭自动维护，不使用created_at和updated_at字段
    public $timestamps = false;

    public function h_food()
    {
    	return $this->hasMany('App\Http\Model\h_food', 'id', 'tid');
    }
}
