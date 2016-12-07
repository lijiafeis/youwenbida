<?php
namespace Home\Model;
use Think\Model;

class QuestionModel extends Model{

    protected $_validate = [
        ['question_title','require','问题标题不能为空'],
        ['question_desc','require','问题描述不能为空'],

    ];

}