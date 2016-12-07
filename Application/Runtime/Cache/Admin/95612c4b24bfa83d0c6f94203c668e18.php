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
        <form enctype="multipart/form-data"
              method="post" id="category_form" onsubmit="return isValiData()"
              action="<?php echo U('Admin/Category/add');?>">
            <input type="hidden" value="1" name="category_id">
            <div class="mod">
                <div class="mod-head">
                    <h3>
                        <span class="pull-left">分类编辑</span>
                    </h3>
                </div>
                <div class="tab-content mod-content">
                    <table class="table table-striped">
                        <tbody><tr>
                            <td>
                                <div class="form-group">
                                    <span class="col-sm-4 col-xs-3 control-label">分类标题:</span>
                                    <div class="col-sm-5 col-xs-8">
                                        <input type="text" value="默认分类" name="cat_name" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-group">
                                    <span class="col-sm-4 col-xs-3 control-label">父级分类:</span>
                                    <div class="col-sm-5 col-xs-8">
                                        <select class="form-control" name="parent_id">
                                            <?php if(is_array($cat_list)): $i = 0; $__LIST__ = $cat_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><option value="<?php echo ($row['cat_id']); ?>"><?php echo ($row['cat_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <span class="col-sm-4 col-xs-3 control-label">分类图标:</span>
                                    <div class="col-sm-5 col-xs-8">
                                        <input type = 'file' name = 'photo'>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody><tfoot>
                    <tr>
                        <td>
                            <input type="submit"  class="btn btn-primary center-block" value="添加分类">
                        </td>
                    </tr>
                    </tfoot>
                    </table>
                </div>
            </div>
        </form>
    </div>
    <script>
        function isValiData() {
//        var title = $(':text').val();
//        if(title == ''){
//            alert('分类标题不能为空');
//            return false;
//        }
            return true;
        }

    </script>


<div class="aw-footer">
    <p>
        Copyright &copy; 2016-2099 - Powered By
        <a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
    </p>
</div>
</body>
</html>