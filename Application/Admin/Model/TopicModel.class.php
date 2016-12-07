<?php
namespace Admin\Model;
use Think\Model;
class TopicModel extends Model{

    protected $_validate =
        [
            ['topic_title','require','话题不能为空',1],
            ['topic_desc','require','话题描述不能为空',1]
        ];
}