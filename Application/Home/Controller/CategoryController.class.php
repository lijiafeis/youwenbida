<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller{

    //展示前台的首页
    public function indexAction(){
        //查询数据库中的问题信息，显示在页面中。
//        $model = D('Question');
//        $question_list = $model -> select();
//        $this -> assign('question_list',$question_list);
        $model = D('Admin/Model/Category');
        $cat_list = $model -> select();
        $modelQuestion = D('Home/Model/Question');
        $que_list = $modelQuestion -> select();
        $this -> assign('que_list',$que_list);
        $this -> assign('cat_list',$cat_list);
        $this -> display();
    }
}
