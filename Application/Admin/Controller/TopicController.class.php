<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Image;
use Think\Upload;

class TopicController extends Controller{

    public function indexAction(){
        //查询话题，进行分配
        $model = D('Topic');
        $topic_list = $model -> select();
        $this -> assign('topic_list',$topic_list);
        $this -> display();
    }

    //添加话题
    public function addAction(){
        $model = D('Topic');
        if(IS_GET){
            $this -> display();
        }else{
            //接受添加页面发送过来的数据
            $res = $model -> create();
            if(!$res){
                $this -> error($model -> getError(),U('add'));
            }else{
                //验证数据后，保存上传的图片。
                $path = $this -> saveFile('add');
                //添加数据
                $_POST['topic_thumb'] = $path;
                $_POST['user_id'] = 1;
                $_POST['pub_time'] = time();


                $model -> add($_POST);
                $this -> success('添加成功',U('index'));
            }
        }

    }

    //把添加分类上传的图片保存到目录中，并返回保存的路径
    public function saveFile($fun){
        $arr = [
            'maxSize' => 3000000,
            'rootPath' => './Public/upload/',
            'savePath' => './topic/',
            'saveName' => ['uniqid',''],
            'exts' => ['jpg','png','jpeg','gif'],
            'autoSub' => true,
            'subName' => ['date','Ymd'],
        ];
        $upload = new Upload($arr);
        $info = $upload -> uploadOne($_FILES['photo']);
        $image = new Image();
        if(!$info){
            $this -> error($upload -> getError(),U($fun));
        }else{
            $path = $info['savepath'] . $info['savename'];
            $path = substr($path,1);
            $file = './Public/upload'.$path;
            $image -> open($file);
            $image -> thumb(130,130) -> save($file);
            return $path;
        }
    }

    //删除话题
    public function deleteAction(){
        $id = I('get.id','','trim');
        $model = D('Topic');
        //删除图标
        $topic = $model -> find($id);
        $path = $topic['topic_thumb'];
        @unlink('./Public/upload' . $path);
        //删除数据库中的记录
        $result = $model -> delete($id);
        if($result){
            $this -> success('删除成功',U('index'));
        }else{
            $this -> error('删除失败',U('index'));
        }
    }

    //编辑话题
    public function editAction(){
        $model = D('Topic');
        if(IS_GET){
            $id = I('get.id');
            $topic = $model -> find($id);
            $path = substr($topic['topic_thumb'],1);
            $topic['topic_thumb'] = $path;
            $this -> assign('topic_info',$topic);
            $this -> display();
        }else{
//            //判断图片是否更换
            if($_FILES['photo']['error']){
//                error不等于说明有错误,没有选择新的文件，就是用旧的cat_logo
//                $_POST = $_POST['old_cat_logo'];

            }else{
                //说明选择了新的文件,上传图片，生成新的路径
                $path = $this -> saveFile('index');
                //删除旧的图标(如果原来没有图标时@会屏蔽错误)
                @unlink('./Public/upload'.$_POST['topic_thumb']);
                $_POST['topic_thumb'] = $path;
            }
            $res = $model -> create();
            if(!$res){
                $this -> error($model -> getError(),U('edit',['id' => $_POST['topic_id']]));
            }else{

                $result = $model -> save();
                if($result){
                    $this -> success('更新成功',U('index'));
                }else{
                    $this -> error('更新失败:' . $model -> getError(),U('index'));
                }
            }

        }

    }

    public function abcAction(){
        $this -> display();
    }


}