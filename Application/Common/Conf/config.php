<?php
return array(
	//'配置项'=>'配置值'
    'ACTION_SUFFIX'         =>  'Action', //方法的默认后缀名
    'SHOW_PAGE_TRACE' => true, //显示页面追踪的信息
//    'URL_HTML_SUFFIX' => 'jiafei',//url的后缀名字。默认是html.
    'URL_MODEL' => 1,
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Category', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称
    'LOAD_EXT_CONFIG'  => 'db_serive',
    'TMPL_ACTION_ERROR'     =>  'Common/error', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  'Common/success', // 默认成功跳转对应的模板文件
);