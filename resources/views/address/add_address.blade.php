@extends('layouts.shop')
@section('title', '添加收货地址页')
@section('content')
    <header>
        <a href="javascript:history.back(-1)" class="back-off fl"><span class="glyphicon glyphicon-menu-left"></span></a>
        <div class="head-mid">
            <h1>收货地址</h1>
        </div>
    </header>
    <div class="head-top">
        <img src="/static/index/images/head.jpg" />
    </div><!--head-top/-->
    <form action="{{url('address_do')}}" method="post" class="reg-login">
        @csrf
        <div class="lrBox">
            <div class="lrList"><input type="text" placeholder="收货人" /></div>
            <div class="lrList">
                <select>
                    <option>省份/直辖市</option>
                    @foreach($areainfo as $v)
                    <option value="">{{$v->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="lrList">
                <select>
                    <option>市/区</option>
                </select>
            </div>
            <div class="lrList">
                <select>
                    <option>县</option>
                </select>
            </div>
            <div class="lrList"><input type="text" placeholder="详细地址" /></div>

            <div class="lrList"><input type="text" placeholder="手机" /></div>
            <div class="lrList2"><input type="text" placeholder="设为默认地址" /> <button>设为默认</button></div>
        </div><!--lrBox/-->
        <div class="lrSub">
            <input type="submit" value="保存" />
        </div>
    </form><!--reg-login/-->

@endsection