<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Image;
use Think\Upload;

class CategoryController extends Controller{
    //展示分类页面
    public function indexAction(){
        //得到数据，进行分配分类信息
        $model = D('Category');
        $data = $model -> select();
        $this -> assign('cat_list',$data);
        $this -> display();
    }

    //展示添加分类的页面
    public function addAction(){
        if(IS_POST) {
//            dump($_POST);
            $model = D('Category');
//            trace($_FILES);
            //把数据保存到一个目录中，然后把路径保存到数据库
            $file_name = $this -> saveFile(add);
            $_POST['cat_logo'] = $file_name;
            $result = $model -> create();
            if(!$result){
                $this -> error($model -> getError(),U('Admin/Category/add'));
            }else{
                $model -> add();
                $this -> success('添加成功',U('Admin/Category/index'));
            }

        }else{
            //查询数据库中分类的信息，显示在页面中
            $model = D('Category');
            $data = $model -> getChildCategory($model -> select());
            $this -> assign('cat_list',$data);
            $this -> display();
        }
    }

    //把添加分类上传的图片保存到目录中，并返回保存的路径
    public function saveFile($fun){
        $arr = [
            'maxSize' => 3000000,
            'rootPath' => './Public/upload/',
            'savePath' => './category/',
            'saveName' => ['uniqid',''],
            'exts' => ['jpg','png','jpeg','gif'],
            'autoSub' => true,
            'subName' => ['date','Ymd'],
        ];
        $upload = new Upload($arr);
        $info = $upload -> uploadOne($_FILES['photo']);
        if(!$info){
            $this -> error($upload -> getError(),U($fun));
        }else{
            $image = new Image();
            $path = $info['savepath'] . $info['savename'];
            $path = substr($path,1);
            $file = './Public/upload'.$path;
            $image -> open($file);
            $image -> thumb(130,130) -> save($file);
            return $path;
        }
    }

    //对分类信息进行编辑
    public function editAction(){
        //查询数据库中分类的信息，显示在页面中
        $model = D('Category');
        if(IS_GET){

            $data = $model -> getChildCategory($model -> select());
            $id = I('get.id','','trim');
            $cat = $model -> find($id);
            $this -> assign('cat',$cat);
            $this -> assign('cat_list',$data);
            $this -> display();
        }else{
            //判断图片是否更换
            if($_FILES['photo']['error']){
                //error不等于说明有错误,没有选择新的文件，就是用旧的cat_logo
//                $data['cat_logo'] = $_POST['old_cat_logo'];
                $_POST['cat_logo'] = $_POST['old_cat_logo'];
            }else{
                //说明选择了新的文件,上传图片，生成新的路径
                $path = $this -> saveFile('index');
                //删除旧的图标(如果原来没有图标时@会屏蔽错误)
                @unlink('./Public/upload'.$_POST['old_cat_logo']);
                $_POST['cat_logo'] = $path;
            }
            $model -> create();
            $result = $model -> save();
            if($result){
                $this -> success('更新成功',U('Admin/Category/index'));
            }else{
                $this -> error('更新失败:' . $model -> getError(),U('index'));
            }
        }

    }
    //删除信息
    public function deleteAction(){
        $id = I('get.id','','trim');
        $model = D('Category');
        //判断是否有子类
        $cat = $model ->find($id);
        $model -> where(['parent_id' => $id]);
        $res = $model -> select();
        if($res){
            $this -> error('下面还有小弟，不能删除',U('Admin/Category/index'));
        }else{
            //删除图标
            $path = $cat['cat_logo'];
            $path = './Public/upload'.$path;
            @unlink($path);
            //删除数据库中的记录
            $result = $model -> delete($id);
            if($result){
                $this -> success('删除成功',U('index'));
            }else{
                $this -> error('删除失败',U('index'));
            }
        }

    }
}