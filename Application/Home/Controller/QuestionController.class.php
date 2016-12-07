<?php
namespace Home\Controller;
use Think\Controller;
class QuestionController extends Controller{

    //展示添加问题的页面
    public function addAction(){
        if(IS_GET){
            //添加分类
            $model = D('Admin/Model/Category');
            $cat_list = $model -> select();
            //添加话题
            $modelTop = D('Admin/Model/Topic');
            $top_list = $modelTop -> select();
            $this -> assign('top_list',$top_list);
            $this -> assign('cat_list',$cat_list);
            $this -> display();
        }else{
//            dump($_POST);
            $model = D('Question');
            $res = $model -> create();
            if(!$res){
                $this -> error($model -> getError(),U('add'));
            }else{
                //验证数据没有问题，保存到数据库。
                $_POST['user_id'] = 1;
                $_POST['pub_time'] = time();
                $_POST['is_pass'] = 0;
                $res = $model -> add($_POST);
                if($res){
                    //问题插入数据库成功，保存到关联表
                    $cats = $_POST['topic_id'];
                    $modelTQ = D('TopicQuestion');
                    foreach ($cats as $row){
                        $data['question_id'] = $res;
                        $data['topic_id'] = $row;
                        $tqid = $modelTQ -> add($data);

                    }
                    if($tqid){
                        $this -> success('添加成功',U('Home/Category/index'));
                    }
                }else{
                    $this -> error('问题发表失败',U('add'));
                }
            }
        }
    }
}