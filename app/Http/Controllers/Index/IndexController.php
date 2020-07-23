<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\TestModel;
use App\Model\Index\UserModel;
use Illuminate\Support\Str;
class IndexController extends Controller
{
    //注册逻辑
    public function register(Request $request){
        //Todo 判断非空
        $user_autner = $request->post('user_autner');
        $user_email = $request->post('user_email');
        $user_passwd = $request->post('user_passwd');
        $user_passwd1 = $request->post('user_passwd1');
        $data = [
            'user_autner' => $user_autner,
            'user_email'=> $user_email,
            'user_pwd'  => $user_passwd,
        ];
//        var_dump($data);exit;
        //Todo 判断邮箱绑定是否存在

        //Todo 入库
        $id = UserModel::insertGetId($data);
        if ($id){
            $this->location_href('注册成功',url('/index/login'));
        }

    }
    public function login(Request $request){
        //TODO 接受数据
        $user_autner = $request->post('user_autner');
        $data = [
            'user_autner' => $user_autner,
        ];
        $user_pwd = $request->post('user_pwd');
        $first = UserModel::first($data);
        if ($first){
            echo 11;
        }else{

        }
        //TODO 查询是否拥有此用户
    }

    /**
     * 弹窗提示
     * @param $alert  提示
     * @param $path    跳转路径
     */
    public function location_href($alert,$path){
        echo "<script>"."alert('".$alert."')".",location.href='".$path."'</script>";
    }
}
