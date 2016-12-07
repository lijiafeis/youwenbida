<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;

class UserController extends Controller{

    public function registerAction(){
        if(IS_GET){
            $this -> display();
        }else{
            dump($_POST);
        }

    }

    public function loginAction(){
        $this -> display();
    }

    public function makeImgAction(){
        $img = new Verify();
        $img -> entry();
    }

    //验证用户是否在数据库中已经存在
    public function vaildataAction(){
//        $model = M('User');
//        $model -> where(['username' => $_POST['user']]);
//        $result = $model -> select();
//        $arr = array();
//        if($result){
//            $arr = ['status' => 0,'message' => 'no'];
//        }else{
//            $arr = ['status' => 1,'message' => 'ok'];
//        }
        echo json_encode(['lijiafe' => 12]);

    }


}