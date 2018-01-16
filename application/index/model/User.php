<?php
/**
 * Created by PhpStorm.
 * User: chenzhitao
 * Date: 2017/5/8
 * Time: 下午2:15
 */

namespace app\index\model;
use think\Db;
use think\Model;

class User extends Model{
   public static function inc($data){
        Db::name('doing')->insert($data);
   }
   public static function del($id){
        db('doing')->where('id','=',$id)->delete();
   }
   public static function edit($id,$data){
        Db::table('think_user')
			    ->where('id','=',$id)
			    ->update($data);
   }
   public static function enquiries($key=""){
      if(!empty($key)){
          $result = Db::table('doing')
                    ->where('desc','=',$key)
                    ->order('id desc')
                    ->select();
                    // ->paginate(5);
      }else{
          $result = Db::table('doing')
                    ->order('id desc')
                    ->paginate(5);
        }
      return $result;
   }

    public static function sel($table,$id){
       $result = Db::table($table)
                ->where('id','=',$id)
                ->select();
       return $result;
   }
}
