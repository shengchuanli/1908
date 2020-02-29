<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\IndexModel\Address;
use Illuminate\Support\Facades\Cookie;
use App\IndexModel\Area;
class AddressController extends Controller
{
    public function is_address(){
//        $user=request()->user;
        $user=session('user.u_id');
        if(!$user){
            return JsonError('请登录后操作！');
        }
            $addinfo=Address::where(['u_id'=>$user])->count();
        if($addinfo<=0){
                return json_encode(['code'=>3,'msg'=>'请去新添一个收货地址吧']);
        }
        return JsonSuccess('ok');
    }

    public function add_address($id=''){
//        echo "addree";die;
        if($id){
            Cookie::queue('goods_ids',$id);
        }
        $areainfo=Area::where(['pid'=>0])->get();
        return view('address.add_address',['areainfo'=>$areainfo]);
    }
    public function address_do(){
        echo 123;
        $data=request()->except('_token');
        dd($data);
    }
}
