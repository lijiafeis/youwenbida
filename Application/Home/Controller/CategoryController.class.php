<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller{

    //展示前台的首页
    public function indexAction(){
        $this -> display();
    }
}
