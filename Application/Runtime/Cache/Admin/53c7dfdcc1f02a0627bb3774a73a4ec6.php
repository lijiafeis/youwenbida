<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="webkit" name="renderer">
    <meta content="IE=edge,Chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="blank" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <title>话题管理-有问必答</title>
    <link href="/phpStorm/youwenbida/Public/Home/css/bootstrap.css?v=20151125" rel="stylesheet" type="text/css">
    <link href="/phpStorm/youwenbida/Public/Home/css/icon.css?v=20151125" rel="stylesheet" type="text/css">
    <link href="/phpStorm/youwenbida/Public/admin/css/common.css?v=20151125" rel="stylesheet" type="text/css">
    <script src="/phpStorm/youwenbida/Public/Home/js/jquery.2.js?v=20151125" type="text/javascript"></script>
    <script src="/phpStorm/youwenbida/Public/Home/js/jquery.form.js?v=20151125" type="text/javascript"></script>
    <script src="/phpStorm/youwenbida/Public/admin/js/aws_admin.js?v=20151125" type="text/javascript"></script>
    <script src="/phpStorm/youwenbida/Public/admin/js/aws_admin_template.js?v=20151125" type="text/javascript"></script>
    <script src="/phpStorm/youwenbida/Public/admin/js/framework.js?v=20151125" type="text/javascript"></script>
    <script src="/phpStorm/youwenbida/Public/admin/js/global.js?v=20151125" type="text/javascript"></script>
    <script src="/phpStorm/youwenbida/Public/js/jquery-3.1.1.js" type="text/javascript"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="/phpStorm/youwenbida/Public/Home/js/respond.js"></script>
    <![endif]-->
</head>
<body>
<div class="aw-header">
    <button class="btn btn-sm mod-head-btn pull-left">
        <i class="icon icon-bar"></i>
    </button>

    <div class="mod-header-user">
        <ul class="pull-right">

            <li class="dropdown username">
                <a data-toggle="dropdown" class="dropdown-toggle" href="">
                    <img width="30" class="img-circle" src="/phpStorm/youwenbida/Public/Home/common/avatar-mid-img.png">
                    itbull
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu pull-right mod-user">
                    <li>
                        <a target="_blank" href="">
                            <i class="icon icon-user"></i>
                            账户
                        </a>
                    </li>

                    <li>
                        <a href="login.html">
                            <i class="icon icon-logout"></i>
                            退出
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="aw-side" class="aw-side ps-container">
    <div class="mod">
        <div class="mod-logo">
            <img alt="" src="/phpStorm/youwenbida/Public/admin/img/logo.png" class="pull-left">
            <h1>有问必答</h1>
        </div>

        <div class="mod-message">
            <div class="message">
                <a title="首页" target="_blank" href="../index.html" class="btn btn-sm">
                    <i class="icon icon-home"></i>
                </a>

                <a title="退出" href="login.html" class="btn btn-sm">
                    <i class="icon icon-logout"></i>
                </a>
            </div>
        </div>

        <ul class="mod-bar">
            <input type="hidden" val="0" id="hide_values">
            <li>
                <a class=" icon icon-ul" href="index.html">
                    <span>摘要信息</span>
                </a>
            </li>

            <li>
                <a data="icon" class="icon icon-reply active" href="javascript:;">
                    <span>内容管理</span>
                </a>

                <ul class="hide" style="display: block;">
                    <li>
                        <a href="category.html">
                            <span>分类管理</span>
                        </a>
                    </li>
                    <li>
                        <a href="question.html">
                            <span>问题管理</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('index');?>" class="active">
                            <span>话题管理</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a data="icon" class=" icon icon-user" href="javascript:;">
                    <span>用户管理</span>
                </a>

                <ul class="hide">
                    <li>
                        <a href="user.html">
                            <span>用户列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="role.html">
                            <span>用户角色</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a data="icon" class="icon icon-setting" href="javascript:;">
                    <span>全局设置</span>
                </a>

                <ul class="hide">
                    <li>
                        <a href="site.html">
                            <span>站点信息</span>
                        </a>
                    </li>
                    <li>
                        <a href="regedit.html">
                            <span>注册访问</span>
                        </a>
                    </li>
                    <li>
                        <a href="mail.html">
                            <span>邮件设置</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a data="icon" class=" icon icon-job" href="javascript:;">
                    <span>工具</span>
                </a>

                <ul class="hide">
                    <li>
                        <a href="tool.html">
                            <span>系统维护</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="ps-scrollbar-x-rail" style="width: 235px; display: none; left: 0px; bottom: 3px;">
        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 607px; display: inherit; right: 0px;">
        <div class="ps-scrollbar-y" style="top: 0px; height: 560px;"></div>
    </div>
</div>


    <div class="aw-content-wrap">
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="javascript:;">话题管理</a></li>
                        <li><a href="<?php echo U('add');?>">新建话题</a></li>
                        <li><a data-toggle="tab" href="#search">搜索</a></li>
                    </ul>
                </h3>
            </div>

            <div class="mod-body tab-content">
                <div id="list" class="tab-pane active">

                    <div class="table-responsive">
                        <form method="post" action="http://localhost/wecenter/?/admin/ajax/topic_manage/" id="batchs_form">
                            <input type="hidden" value="" name="action" id="action">
                            <input type="hidden" value="" name="parent_id" id="parent_id">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th><div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" class="check-all" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></th>
                                    <th>话题标题</th>
                                    <th>讨论</th>
                                    <th>关注</th>
                                    <th>最后编辑用户</th>
                                    <th>最后编辑时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($topic_list)): $i = 0; $__LIST__ = $topic_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
                                        <td><div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" value="3" name="topic_ids[]" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>

                                        <td><a target="_blank" href="http://localhost/wecenter/?/topic/%E5%BC%95%E5%8A%9B%E6%B3%A2"><?php echo ($row['topic_title']); ?></a></td>

                                        <td><?php echo ($row['talk_count']); ?></td>

                                        <td><?php echo ($row['focus_count']); ?></td>

                                        <td><a target="_blank" href="http://localhost/wecenter/?/people/itbull">itbull</a></td>

                                        <td><?php echo (date("Y-m-d H:i:s",$row['pub_time'])); ?></td>

                                        <td><a data-toggle="tooltip" title="" class="icon icon-edit md-tip" href="<?php echo U('Admin/Topic/edit',['id' => $row['topic_id']]);?>" data-original-title="编辑"></a>
                                            <a title="" class="icon icon-trash md-tip" data-toggle="tooltip" href = "<?php echo U('Admin/Topic/delete',['id' => $row['topic_id']]);?>" data-original-title="删除"></a></td>

                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </form>
                    </div>

                    <div class="mod-table-foot">
                        <a onclick="$('#action').val('remove'); AWS.ajax_post($('#batchs_form'));" class="btn btn-danger">删除话题</a>
                    </div>
                </div>

                <div id="search" class="tab-pane">
                    <form role="form" class="form-horizontal" id="search_form" onsubmit="return false;" action="http://localhost/wecenter/?/admin/topic/list/" method="post">

                        <input type="hidden" value="search" name="action">

                        <div class="form-group">
                            <label class="col-sm-2 col-xs-3 control-label">关键词:</label>

                            <div class="col-sm-5 col-xs-8">
                                <input type="text" name="keyword" value="" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-xs-3 control-label">添加时间范围:</label>

                            <div class="col-sm-6 col-xs-9">
                                <div class="row">
                                    <div class="col-xs-11  col-sm-5 mod-double">
                                        <input type="text" name="start_date" value="" class="form-control mod-data"><div class="date_selector" style="display: none;"><div class="nav"><p class="month_nav"><span title="[Page-Up]" class="buttonx prev">«</span> <span class="month_name">二月</span> <span title="[Page-Down]" class="buttonx next">»</span></p><p class="year_nav"><span title="[Ctrl+Page-Up]" class="buttonx prev">«</span> <span class="year_name">2016</span> <span title="[Ctrl+Page-Down]" class="buttonx next">»</span></p></div><table><thead><tr><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th><th>日</th></tr></thead><tbody><tr><td date="2016-01-31" class="unselected_month">31</td><td date="2016-02-01" class="selectable_day">1</td><td date="2016-02-02" class="selectable_day">2</td><td date="2016-02-03" class="selectable_day">3</td><td date="2016-02-04" class="selectable_day">4</td><td date="2016-02-05" class="selectable_day">5</td><td date="2016-02-06" class="selectable_day">6</td></tr><tr><td date="2016-02-07" class="selectable_day">7</td><td date="2016-02-08" class="selectable_day">8</td><td date="2016-02-09" class="selectable_day">9</td><td date="2016-02-10" class="selectable_day">10</td><td date="2016-02-11" class="selectable_day">11</td><td date="2016-02-12" class="selectable_day">12</td><td date="2016-02-13" class="selectable_day">13</td></tr><tr><td date="2016-02-14" class="selectable_day">14</td><td date="2016-02-15" class="selectable_day">15</td><td date="2016-02-16" class="selectable_day">16</td><td date="2016-02-17" class="selectable_day">17</td><td date="2016-02-18" class="selectable_day">18</td><td date="2016-02-19" class="selectable_day">19</td><td date="2016-02-20" class="selectable_day">20</td></tr><tr><td date="2016-02-21" class="selectable_day">21</td><td date="2016-02-22" class="selectable_day">22</td><td date="2016-02-23" class="selectable_day">23</td><td date="2016-02-24" class="selectable_day">24</td><td date="2016-02-25" class="selectable_day">25</td><td date="2016-02-26" class="selectable_day">26</td><td date="2016-02-27" class="selectable_day">27</td></tr><tr><td date="2016-02-28" class="selectable_day today selected">28</td><td date="2016-02-29" class="selectable_day">29</td><td date="2016-03-01" class="unselected_month">1</td><td date="2016-03-02" class="unselected_month">2</td><td date="2016-03-03" class="unselected_month">3</td><td date="2016-03-04" class="unselected_month">4</td><td date="2016-03-05" class="unselected_month">5</td></tr></tbody></table></div>
                                        <i class="icon icon-date"></i>
                                    </div>
                                    <span class="mod-symbol col-xs-1 col-sm-1">
                                    -
                                    </span>
                                    <div class="col-xs-11 col-sm-5">
                                        <input type="text" name="end_date" value="" class="form-control mod-data"><div class="date_selector" style="display: none;"><div class="nav"><p class="month_nav"><span title="[Page-Up]" class="buttonx prev">«</span> <span class="month_name">二月</span> <span title="[Page-Down]" class="buttonx next">»</span></p><p class="year_nav"><span title="[Ctrl+Page-Up]" class="buttonx prev">«</span> <span class="year_name">2016</span> <span title="[Ctrl+Page-Down]" class="buttonx next">»</span></p></div><table><thead><tr><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th><th>日</th></tr></thead><tbody><tr><td date="2016-01-31" class="unselected_month">31</td><td date="2016-02-01" class="selectable_day">1</td><td date="2016-02-02" class="selectable_day">2</td><td date="2016-02-03" class="selectable_day">3</td><td date="2016-02-04" class="selectable_day">4</td><td date="2016-02-05" class="selectable_day">5</td><td date="2016-02-06" class="selectable_day">6</td></tr><tr><td date="2016-02-07" class="selectable_day">7</td><td date="2016-02-08" class="selectable_day">8</td><td date="2016-02-09" class="selectable_day">9</td><td date="2016-02-10" class="selectable_day">10</td><td date="2016-02-11" class="selectable_day">11</td><td date="2016-02-12" class="selectable_day">12</td><td date="2016-02-13" class="selectable_day">13</td></tr><tr><td date="2016-02-14" class="selectable_day">14</td><td date="2016-02-15" class="selectable_day">15</td><td date="2016-02-16" class="selectable_day">16</td><td date="2016-02-17" class="selectable_day">17</td><td date="2016-02-18" class="selectable_day">18</td><td date="2016-02-19" class="selectable_day">19</td><td date="2016-02-20" class="selectable_day">20</td></tr><tr><td date="2016-02-21" class="selectable_day">21</td><td date="2016-02-22" class="selectable_day">22</td><td date="2016-02-23" class="selectable_day">23</td><td date="2016-02-24" class="selectable_day">24</td><td date="2016-02-25" class="selectable_day">25</td><td date="2016-02-26" class="selectable_day">26</td><td date="2016-02-27" class="selectable_day">27</td></tr><tr><td date="2016-02-28" class="selectable_day today selected">28</td><td date="2016-02-29" class="selectable_day">29</td><td date="2016-03-01" class="unselected_month">1</td><td date="2016-03-02" class="unselected_month">2</td><td date="2016-03-03" class="unselected_month">3</td><td date="2016-03-04" class="unselected_month">4</td><td date="2016-03-05" class="unselected_month">5</td></tr></tbody></table></div>
                                        <i class="icon icon-date"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-xs-3 control-label">作者:</label>

                            <div class="col-sm-5 col-xs-8">
                                <input type="text" name="user_name" value="" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-xs-3 control-label">讨论数:</label>

                            <div class="col-sm-6 col-xs-9">
                                <div class="row">
                                    <div class="col-xs-11  col-sm-5 mod-double">
                                        <input type="text" value="" name="discuss_count_min" class="form-control">
                                    </div>
                                    <span class="mod-symbol col-xs-1 col-sm-1">
                                    -
                                    </span>
                                    <div class="col-xs-11 col-sm-5">
                                        <input type="text" value="" name="discuss_count_max" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-5 col-xs-8">
                                <button class="btn btn-primary" onclick="AWS.ajax_post($('#search_form'));" type="button">搜索</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


<div class="aw-footer">
    <p>
        Copyright &copy; 2016-2099 - Powered By
        <a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
    </p>
</div>
</body>
</html>