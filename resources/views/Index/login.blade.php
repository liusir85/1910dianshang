@extends('layouts.app')
@section('title', '前台')
@section('content')
    <!-- login -->
    <div class="pages section">
        <div class="container">
            <div class="pages-head">
                <h3>登录</h3>
            </div>
            <div class="login">
                <div class="row">
                    <form class="col s12" method="post" action="{{url('/index/login')}}">
                        @csrf
                        <div class="input-field">
                            <input type="text" class="validate" placeholder="账号" required name="user_autner">
                        </div>
                        <div class="input-field">
                            <input type="password" class="validate" placeholder="密码" required name="user_pwd">
                        </div>
                        <a href="">忘了密码?</a><br>
                        <input type="submit" class="btn button-default" value="登录">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end login -->
@endsection
