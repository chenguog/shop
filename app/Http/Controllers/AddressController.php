<?php

namespace App\Http\Controllers;

use App\Http\Requests\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    //收货地址
    public function address()
    {
        $where=[
            'address_status'=>1
        ];
        $res=DB::table('address')->where($where)->get();
        return view('address',['res'=>$res]);
    }
    //添加地址
    public function writeaddr()
    {
        return view('writeaddr');
    }
    //删除
    public function del(Request $request)
    {
        $address_id=$request->address_id;
        $where=[
            'address_id'=>$address_id,
            'address_status'=>1
        ];
        $res=DB::table('address')->where($where)->update(['address_status'=>2]);
        if($res){
            return 1;
        }else{
            return 2;
        }
    }
    //修改地址
    public function edit()
    {
        $res=DB::table('address')->first();
        return view('editaddress',['res'=>$res]);
    }
    //修改执行
    public function editdo(Request $request)
    {
        $data=$request->all();
        $address_id=$data['address_id'];
        unset($data['_token']);
        $user_id=session('user_id');
        if($data['address_name']==''){
            return '姓名不能为空'; die;
        }
        if($data['address_tel']==''){
            return '电话不能为空';die;
        }
        if($data['area']==''){
            return '所在区域不能为空';die;
        }
        if($data['address_desc']==''){
            return '详细不能为空';die;
        }
        $data['user_id']=$user_id;
       if($data['is_default']==false){
           $res=DB::table('address')->where(['address_id'=>$address_id])->update($data);
           if($res){
               return  '修改成功';
           }else{
               return '修改失败';
           }
       }else{
           $arr=DB::table('address')->where(['user_id'=>$user_id])->update(['is_default'=>false]);
           $res=DB::table('address')->where(['address_id'=>$address_id])->update($data);
           if($arr!==false&&$res){
               return '修改成功';
           }else{
               return  '修改失败';
           }
       }
    }
    public function addressadd(Request $request)
    {
        $data=$request->all();
        unset($data['_token']);
        $res=DB::table('address')->insert($data);
        if($res){
            return "1";
        }else{
            return "2";
        }
    }

}
