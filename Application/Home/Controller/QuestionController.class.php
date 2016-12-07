<?php
namespace Home\Controller;
use Home\Common\Page;
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

    //前台的问题显示分页显示
    public function getAjaxQuestionAction(){
//        echo 'a';
        //对首页的话题增加页面
        $model = D('Question');
        $page = new Page();
        $page -> _page_now = isset($_POST['page']) ? $_POST['page']:1;
        $page -> _page_size = 3;
        $res = $model -> select();

        $page -> _total = count($res);
        $page -> _url = U('Home/Category/index');
        $page_html = $page -> ajaxPage();
        //把分页的信息设置到模板中
        // $this -> smarty -> assign('page_html',$page_html);

        //偏移量
        $offer = ($page -> _page_now - 1) * $page -> _page_size;
        //查寻所有的问题并显示在网页上
        $model -> limit($offer,$page -> _page_size);
        $question_list = $model -> select();
        dump($question_list);
        $this  -> assign('question_list',$question_list);
        if($question_list){
            $result['pageBar'] = $page_html;
            $result['questiones'] = $question_list;
            $result['status'] = 1;
        }else{
            $result['status'] = 0;
        }
        // $arr = array('name' =>)
        echo json_encode($result);
    }
}