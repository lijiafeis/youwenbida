<?php
namespace Home\Controller;
use Think\Controller;
class QuestionController extends Controller{

    //展示添加问题的页面
    public function addAction(){
        if(IS_GET){
            $this -> display();
        }
    }
}