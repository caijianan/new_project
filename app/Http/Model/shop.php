<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;


class shop extends Model
{
    protected $table = 'shop';
    public $timestamps = false;


    public function h_food()
    {
    	return $this->hasMany('App\Http\Model\h_food','sid','id');
    }

    /**
     * 添加店铺
     * @param [type] $request [description]
     */
    public static function add($request)
    {
        $shop_info = $request->except('_token','s_face');
        $file      = $request->file('s_face');
        $s_file    = $request->file('s_page');
        // 文件存放路径
        $destinationPath = './shop_pic';
        // s_face文件名
        $s_face = '';
        if ($request->hasFile('s_face')) {
            for($i=0;$i<=count($file)-1;$i++){
                //生成一个随机文件名（不含后缀）
                $name     = time().rand(1000,9999);
                // 获取文件后缀
                $ext      = $file[$i]->getClientOriginalExtension();
                $fileName = $name.'.'.$ext;
                $file[$i]->move($destinationPath, $fileName);
                // 处理用户上传的图片
                $img    = Image::make($destinationPath.'/'.$fileName);
                $img->resize(512, 512);
                $img->save($destinationPath.'/sm_'.$fileName);
                $s_face .= $fileName.',';
            }
            $shop_info['s_face'] = $s_face;
        }
        if ($request->hasFile('s_page')) {
            //生成一个随机文件名（不含后缀）
            $s_name     = time().rand(1000,9999);
            // 获取文件后缀
            $s_ext      = $s_file->getClientOriginalExtension();
            $s_fileName = $s_name.'.'.$s_ext;
            $s_file->move($destinationPath, $s_fileName);
            // 处理用户上传的图片
            $img = Image::make($destinationPath.'/'.$s_fileName);
            $img->resize(512, 512);
            $img->save($destinationPath.'/sm_'.$s_fileName);
            $shop_info['s_page'] = $s_fileName;
        }

        return self::insert($shop_info);
    }

    /**
     * 获取修改用户信息
     * @param  [int] $id 用户id
     * @return [type]     用户信息
     */
    public static function update_one($id)
    {
        return self::where('id',$id)->first();
    }

    /**
     * 修改用户信息
     * @param  [type] $id 用户id
     * @return [type]     返回修改结果
     */
    public static function doupdate($request,$id)
    {
        $shop_info = $request->except('_token','s_face','_method','s_page');
        $shop_arr = self::where('id',$id)->first();
        
        // 判断是否有文件上传
        if($request->hasFile('s_page')){
            // 文件存放路径
            $destinationPath = './shop_pic';
            // 删除用户之前上传的商铺首页图片
            unlink($destinationPath.'/'.$shop_arr->s_page);
            unlink($destinationPath.'/sm_'.$shop_arr->s_page);
            $file = $request->file('s_page');
            // 拼接文件名
            $fileName = time().rand(1000,9999).'.'.$file->getClientOriginalExtension();
            
            // 判断文件是否上传成功
            if($request->file('s_page')->isValid()){
                $file->move($destinationPath, $fileName);
            }
            // 处理用户上传的图片
            $img = Image::make($destinationPath.'/'.$fileName);
            $img->resize(512, 512);
            $img->save($destinationPath.'/sm_'.$fileName);
            $shop_info['s_page'] = $fileName;
        }
        if($request->hasFile('s_face')){
            // 文件存放路径
            $destinationPath = './shop_pic';
            // 删除之前的商铺图片
            $arr = explode(',', $shop_arr->s_face);
            array_pop($arr);
            foreach ($arr as $k => $v) {
                unlink('./shop_pic/'.$v);
                unlink('./shop_pic/sm_'.$v);
            }
            $s_face = $request->file('s_face');
            $s_fileName = '';
            for($i=0;$i<=count($s_face)-1;$i++){
                //生成一个随机文件名（不含后缀）
                $name     = time().rand(1000,9999);
                // 获取文件后缀
                $ext      = $s_face[$i]->getClientOriginalExtension();
                $fileName = $name.'.'.$ext;
                $s_face[$i]->move($destinationPath, $fileName);
                // 处理用户上传的图片
                $img    = Image::make($destinationPath.'/'.$fileName);
                $img->resize(512, 512);
                $img->save($destinationPath.'/sm_'.$fileName);

                $s_fileName .= $fileName.',';
            }
            $shop_info['s_face'] = $s_fileName;
        }
        $row = self::where('id',$id)->update($shop_info);
        if($row > 0){
            return true;
        }else{
            return false;
        }
    }
    /**
     * 商铺删除
     * @param  [type] $id 商铺id
     * @return [bool] 返回bool
     */
    public static function del($id)
    {
        $res = self::where('id',$id)->first();

        // 删除商铺其他图片
        $flag = '';
        if(!empty($res->s_face)){
            $arr = explode(',', $res->s_face);
            array_pop($arr);
            foreach ($arr as $k => $v) {
                $flag .= unlink('./shop_pic/'.$v);
                $flag .= unlink('./shop_pic/sm_'.$v);
            }
        }
        // 删除商铺首页图片
        if(!empty($res->s_page)){
            $flag .= unlink('./shop_pic/'.$res->s_page);
            $flag .= unlink('./shop_pic/sm_'.$res->s_page);   
        }
        $row = self::where('id',$id)->delete();
        if($row > 0){
            return true;
        }else{
            return false;
        }
        
    }
}
