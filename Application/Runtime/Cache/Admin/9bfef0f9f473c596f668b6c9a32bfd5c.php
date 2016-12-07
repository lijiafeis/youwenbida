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
                    <span class="pull-left">分类管理</span>
                </h3>
            </div>

            <div class="tab-content mod-body">
                <div class="alert alert-success hide error_message"></div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>分类标题</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <form onsubmit="return false" method="post" action="#" id="category_form"></form>
                        <?php if(is_array($cat_list)): $i = 0; $__LIST__ = $cat_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
                                <td>
                                    <a href="#"><?php echo ($row['cat_name']); ?></a>
                                </td>
                                <td>
                                    <div class="col-sm-6 clo-xs-12 col-lg-offset-3">
                                        0
                                    </div>
                                </td>
                                <td>
                                    <a title="" class="icon icon-edit md-tip" data-toggle="tooltip"  href="<?php echo U('Admin/Category/edit',['id' => $row['cat_id']]);?>" data-original-title="编辑"></a>
                                    <a title="" class="icon icon-trash md-tip" data-toggle="tooltip" href = "<?php echo U('Admin/Category/delete',['id' => $row['cat_id']]);?>" data-original-title="删除"></a>
                                    <a title="" class="icon icon-transfer md-tip move" data-toggle="tooltip" data-url="admin/category/move_contents/" data-name="默认分类" data-id="1" data-original-title="批量移动"></a>
                                </td>

                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                        <tfoot class="mod-foot-center">
                        <tr>
                            <td colspan="3">
                                <form onsubmit="return false" method="post" action="http://localhost/wecenter/?/admin/ajax/save_category/" id="add_category_form">
                                    <div class="form-group col-sm-5">
                                        <span class="col-sm-3 col-xs-12 mod-category-foot">分类标题</span>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-5">
                                        <span class="col-sm-3 col-xs-12 mod-category-foot">父级分类:</span>
                                        <div class="col-sm-6 col-xs-12">
                                            <select class="form-control" name="parent_id">
                                                <option value="0">无</option>
                                                <option value="1">默认分类</option>
                                                <option value="2">PHP</option>                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-xs-12">
                                        <a class="btn-primary btn" href = '<?php echo U("Admin/Category/add");?>'>添加分类</a>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="hide" id="target-category">
            <option value="1">默认分类</option>    </div>
    </div>


<div class="aw-footer">
    <p>
        Copyright &copy; 2016-2099 - Powered By
        <a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
    </p>
</div>
</body>
</html>