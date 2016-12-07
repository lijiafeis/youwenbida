<?php
namespace Home\Model;
use Think\Model\RelationModel;
class MemberModel extends RelationModel{

    const MODEL_REGISTER = 10000;
    protected $patchValidate = true;

    //自动关联
    protected $_link = [
      'login_list' => [
          'mapping_type' => self::HAS_MANY,
          'class_name' => 'MemberLoginLog',
          'foreign_key' => 'member_id',
          'parent_key' => 'member_id',
      ],
        'must_list' => [
          'mapping_type' => self::MANY_TO_MANY,
            'class_name' => 'Event',
            'relation_table' => '__MEMBER_EVENT__',
            'foreign_key' => 'member_id',
            'relation_foreign_key' => 'event_id',

        ],
    ];



    //自动完成
    protected $_auto = [
        ['register_time','time',self::MODEL_REGISTER,'function'],
        ['password_salt','makeSalt',self::MODEL_BOTH,'callback'],
        ['password','makeMD5',self::MODEL_BOTH,'callback'],
    ];

    //自动生成盐值
    public function makeSalt(){
        $num = mt_rand(2,8);
        $value = substr(md5(time()),0,$num);
        return $this -> salt = $value;
    }
    //生成MD5值
    public function makeMD5($val){
        return md5($val . $this -> salt);
    }

    //定义规则，进行表单的验证。
    protected $_validate =
        [
            ['email','require','邮箱必须填'],
            ['email','email','邮箱格式不正确'],
            ['nickname','require','用户名不能为空'],
            ['nickname','','用户名重复',self::EXISTS_VALIDATE,'unique',self::MODEL_REGISTER],
            ['nickname','4,32','昵称长度从4到32',self::EXISTS_VALIDATE,'length'],

            ['password','require','密码不能为空'],
            ['password','4,32','密码长度为4到32位',self::EXISTS_VALIDATE,'length'],
            ['password','strong','密码格式必须是字母数字组合',self::EXISTS_VALIDATE,'callback'],

            ['confirm','password','两次输入的密码不正确',self::EXISTS_VALIDATE,'confirm'],
            ['agree','1','请同意隐私协议',self::MUST_VALIDATE,'equal',self::MODEL_REGISTER],
        ];

    //自定义规定的规则
    public function strong($value){
        $strong = 0;
        if(preg_match('/[a-z]/',$value)){
            $strong++;
        }
        if(preg_match('/[A-Z]/',$value)){
            $strong++;
        }
        if(preg_match('/[0-9]/',$value)){
            $strong++;
        }
        //大于等于2返回
        return $strong >= 2;
    }

    public function checkData(){
        return 'this is Model';
    }

}
