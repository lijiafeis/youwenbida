<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model{

    const ADDCATEGORY = 100;

//    protected $_validate = [
//            ['cat_name','require','请填写分类名字'],
//            ['cat_name','isNum','不能是纯数字',self::MUST_VALIDATE,'callback'],
//            ['parent_id','isExist','该分类下面不能重复',self::MUST_VALIDATE,'callback']
//        ];
//    //判断分类的名字是否是纯数字
//    public function isNum(){
//        if((int)($this -> cat_name) != 0){
//            return false;
//        }
//        return true;
//    }
//    //判断是否在一个分类下面有两个相同的分类
//    public function isExist(){
//        $arr['cat_name'] = $this -> cat_name;
//        $arr['parent_id'] = $this -> parent_id;
//        $this -> where($arr);
//        $this -> fetchSql();
//        $result = $this -> select();
//        trace($result);
//        if(!$result){
//            return false;
//        }
//        return true;
//    }

    //把从数据库得到的分类信息进行分级的处理，传送出去
    public function getChildCategory($cat_list,$p_id = 0,$level = 0){
        static $arr = array();
        foreach ($cat_list as $row){
            if($row['parent_id'] == $p_id){
                $row['level'] = $level;
                $arr[] = $row;
                $this -> getChildCategory($cat_list,$row['cat_id'],$level+1);
            }
        }
        return $arr;
    }

}