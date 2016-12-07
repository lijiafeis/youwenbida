<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta content="IE=edge,Chrome=1" http-equiv="X-UA-Compatible">
	<meta content="webkit" name="renderer">
	<title>发现 - 有问必答</title>
	<meta content="有问必答,知识社区,社交社区,问答社区" name="keywords">
	<meta content="有问必答 社交化知识社区" name="description">
	<base href="">
	<!--[if IE]>
</base>
<![endif]-->
<link type="image/x-icon" rel="shortcut icon" href="/phpStorm/youwenbida/Public/Home/css/default/img/favicon.ico?v=20151125">

<link href="/phpStorm/youwenbida/Public/Home/css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="/phpStorm/youwenbida/Public/Home/css/icon.css" type="text/css" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="/phpStorm/youwenbida/Public/Home/css/default/common.css?v=20151125">
<link type="text/css" rel="stylesheet" href="/phpStorm/youwenbida/Public/Home/css/default/link.css?v=20151125">
<link type="text/css" rel="stylesheet" href="/phpStorm/youwenbida/Public/Home/js/plug_module/style.css?v=20151125">
<style>
	#ul{
	}
	li{
		list-style: none;
	}
</style>
<script type="text/javascript" src="/phpStorm/youwenbida/Public/Home/js/jquery.2.js?v=20151125"></script>
<script type="text/javascript" src="/phpStorm/youwenbida/Public/Home/js/jquery.form.js?v=20151125"></script>
<script type="text/javascript" src="/phpStorm/youwenbida/Public/Home/js/plug_module/plug-in_module.js?v=20151125"></script>
<script type="text/javascript" src="/phpStorm/youwenbida/Public/Home/js/aws.js?v=20151125"></script>
<script type="text/javascript" src="/phpStorm/youwenbida/Public/Home/js/aw_template.js?v=20151125"></script>
<script type="text/javascript" src="/phpStorm/youwenbida/Public/Home/js/app.js?v=20151125"></script>
<script type="text/javascript" src="/phpStorm/youwenbida/Public/Home/js/common.js"></script>
<script src="/phpStorm/youwenbida/Public/Home/js/compatibility.js" type="text/javascript"></script>
	<script src="/phpStorm/youwenbida/Public/Home/js/common.js" type="text/javascript"></script>
	<!-- <script src="/phpStorm/youwenbida/Public/Home/js/ajax.js" type="text/javascript"></script> -->
	<!-- <script src="/phpStorm/youwenbida/Public/Home/js/ajax.js" type="text/javascript"></script> -->
<!--[if lte IE 8]>
<script type="text/javascript" src="/phpStorm/youwenbida/Public/Home/js/respond.js"></script>
<![endif]-->
<style type="text/css">.fancybox-margin{margin-right:17px;}</style>
</head>
<body>
<noscript id="noscript" unselectable="on">
	<div class="aw-404 aw-404-wrap container">
		<img src="/phpStorm/youwenbida/Public/Home/common/no-js.jpg">
		<p>你的浏览器禁用了JavaScript, 请开启后刷新浏览器获得更好的体验!</p>
	</div>
</noscript>

<div class="aw-top-menu-wrap">
	<div class="container">
		<!-- logo -->
		<div class="aw-logo hidden-xs">
			<a href=""></a>
		</div>
		<!-- end logo -->
		<!-- 搜索框 -->
		<div class="aw-search-box  hidden-xs hidden-sm" id = 'suggest'>
			<form method="post" id="global_search_form" action="?/search/" class="navbar-search">
				<input type="text" id="aw-search-query" name="q" autocomplete="off" placeholder="搜索问题、话题或人" class="form-control search-query" >
				<span onclick="$('#global_search_form').submit();" id="global_search_btns" title="搜索"> <i class="icon icon-search"></i>
				</span>
				<div class="aw-dropdown">
					<div class="mod-body">
						<p class="title">输入关键字进行搜索</p>
						<ul class="aw-dropdown-list hide"></ul>
						<p class="search">
							<span>搜索:</span>
							<a onclick="$('#global_search_form').submit();"></a>
						</p>
					</div>
					<div class="mod-footer">
						<a class="pull-right btn btn-mini btn-success publish" onclick="" href="publish.html">发起问题</a>

					</div>
				</div>
			</form>
		</div>
		<!-- end 搜索框 -->
		<!-- 导航 -->
		<div class="aw-top-nav navbar">
			<div class="navbar-header">
				<button class="navbar-toggle pull-left">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav">
					<li>
						<a class="active" href="index.html"> <i class="icon icon-list"></i>
							发现
						</a>
					</li>
					<li>
						<a href="topic_index.html">
							<i class="icon icon-topic"></i>
							话题
						</a>
					</li>
					<li>
						<a style="font-weight:bold;">· · ·</a>
						<div class="dropdown-list pull-right">
							<ul id="extensions-nav-list"></ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<!-- end 导航 -->
		<!-- 未登录展示 -->
		<div class="aw-user-nav">
			<!-- 登陆&注册栏 -->
			<!--<{if $smarty.session.user.username == ''}>-->
			<a href="index.php?c=User&a=login" class="login btn btn-normal btn-primary">登录</a>
			<a href="index.php?c=User&a=register" class="register btn btn-normal btn-success">注册</a>
			<!-- end 登陆&注册栏 -->
			<!--<{/if}>-->
		</div>

		<!-- 登陆成功展示用户栏 -->
		<!--<{if $smarty.session.user}>-->
		<div class="aw-user-nav">
			<!-- 登陆&注册栏 -->
			<a class="aw-user-nav-dropdown" href="people.html">
				<img src="/phpStorm/youwenbida/Public/Home/common/avatar-mid-img.png" alt="itbull"></a>
				<!--<<?php echo ($smarty["session"]["user"]["username"]); ?>>-->
			<div class="aw-dropdown dropdown-list pull-right">
				<ul class="aw-dropdown-list">
					<li class="hidden-xs">
						<a href="user_set.html">
							<i class="icon icon-setting"></i>
							设置
						</a>
					</li>
					<li class="hidden-xs">
						<a href="admin/login.html">
							<i class="icon icon-job"></i>
							管理
						</a>
					</li>
					<li>
						<a href="index.php?c=User&a=logout">
							<i class="icon icon-logout"></i>
							退出
						</a>
					</li>
				</ul>
			</div>
			<!--<{/if}>-->
			<!-- end 登陆&注册栏 -->
		</div>
		<!-- end 用户栏 -->
		<!-- 发起 -->
		<div class="aw-publish-btn">

			<a onclick="AWS.dialog('publish', {'category_enable':'1', 'category_id':'0', 'topic_title':''}); return false;" href="?/publish/" class="btn-primary" id="header_publish">
				<i class="icon icon-ask"></i>
				发起
			</a>
			<div class="dropdown-list pull-right">
				<ul>
					<li>
						<a onclick="" href="<?php echo U('Home/Question/add');?>">问题</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- end 发起 -->
	</div>
</div>

<div class="aw-container-wrap">
	<div class="container aw-publish">
		<div class="row">
			<div class="aw-content-wrap clearfix">
				<div class="col-sm-12 col-md-9 aw-main-content">
					<!-- tab 切换 -->
					<ul class="nav nav-tabs aw-nav-tabs active">
																								<li><a href="http://localhost/wecenter/?/publish/article/">文章</a></li>
												<li class="active"><a href="http://localhost/wecenter/?/publish/">问题</a></li>
						<h2 class="hidden-xs"><i class="icon icon-ask"></i> 发起</h2>
					</ul>
					<!-- end tab 切换 -->
					<form id="question_form" method="post" 
					action="<?php echo U('Home/Question/add');?>">
						

												<div class="aw-mod aw-mod-publish">
							<div class="mod-body">
								<h3>问题标题:</h3>
								<!-- 问题标题 -->
								<div class="aw-publish-title">
									<div>
										<input type="text" class="form-control" value="" id="question_contents" name="question_content" placeholder="问题标题...">
										<select style="float:right;margin-top:-35px;height:35px;border-radius:5px" id="category_id" name="category_id">
											<option value="0">- 顶级分类 -</option>
												<option value="0">
													默认
												</option>
										</select>
									</div>
																		<div class="dropdown">
										
									<div class="aw-dropdown" role="menu" aria-labelledby="dropdownMenu">
									<ul class="aw-dropdown-list">
									<li><a data-value="1">默认分类</a></li>
									<li><a data-value="2">PHP</a></li>
									<li><a data-value="3">前端</a></li>
									<li><a data-value="4">Java</a></li><li><a data-value="5">UI</a></li><li><a data-value="6">生活</a></li><li><a data-value="8">iOS</a></li><li><a data-value="9">安卓</a></li><li><a data-value="10">设计</a></li><li><a data-value="13">MySQL</a></li><li><a data-value="14">Linux</a></li></ul></div>
									</div>
																	</div>
								<!-- end 问题标题 -->

								<h3>问题描述 (选填):</h3>
								<div class="aw-mod aw-editor-box">
									<div class="mod-head">
										<textarea name="qusetion_desc" class="form-control" rows="10"></textarea>
									</div>
									<!-- 删除文件上传input type=file -->									
								</div>
								<h3>添加话题:</h3>
								<div data-type="publish" class="aw-topic-bar active">
									
									<label>
										<input type="checkbox" name="topic_id[]" value="0">
									</label>

								</div>
								
								
																															</div>
							<div class="mod-footer clearfix">
																<span class="aw-anonymity">
																											<label><input type="checkbox" name="anonymous" value="1" class="pull-left">
										匿名</label>

								</span>
								<input type="submit" id="publish_submit" 
								class="btn btn-large btn-success btn-publish-submit"
								value="确认发起">
							</div>
						</div>
					</form>
				</div>
				<!-- 侧边栏 -->
				<div class="col-sm-12 col-md-3 aw-side-bar hidden-xs">
					<!-- 问题发起指南 -->
					<div class="aw-mod publish-help">
						<div class="mod-head">
							<h3>问题发起指南</h3>
						</div>
						<div class="mod-body">
							<p><b>• 问题标题:</b> 请用准确的语言描述您发布的问题思想</p>
							<p><b>• 问题补充:</b> 详细补充您的问题内容, 并提供一些相关的素材以供参与者更多的了解您所要问题的主题思想</p>
							<p><b>• 选择话题:</b> 选择一个或者多个合适的话题, 让您发布的问题得到更多有相同兴趣的人参与. 所有人可以在您发布问题之后添加和编辑该问题所属的话题</p>
													</div>
					</div>
					<!-- end 问题发起指南 -->
				</div>
				<!-- end 侧边栏 -->
			</div>
		</div>
	</div>
</div>



<div class="aw-ajax-box" id="aw-ajax-box"></div>

<div class="aw-footer-wrap">
	<div class="aw-footer">
		Copyright &copy; 2016-2099, All Rights Reserved
		<span class="hidden-xs">
			Powered By
			<a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
		</span>

	</div>
</div>
<script>
	var input = document.getElementById('aw-search-query');
	input.onkeyup = function () {
		var a = this.value;
		if(a != '') {
			$$.request({
				mothed: 'get',
				data: 'data=' + a,
				dataType: 'text',
				url: '<{framework\core\Factory::U("home/Question/showData")}>',
				callback: function (res) {
					console.log(res);
					if(res){
						//说明有数据进行显示
						var ul = document.getElementById('ul');
						if(!ul){
							var ul = document.createElement('ul');
							ul.id = 'ul';
						}
						ul.innerHTML = '';
						for(var i in res){
							var li = document.createElement('ul');
							li.innerText = res[i].question_title;
							li.onmouseover = function(){
								this.style.background = '#666';
							}
							li.onmouseout = function(){
								this.style.background = 'none';
							}
							li.onclick = function(){
								input.value = li.innerText;
								document.getElementById('suggest').removeChild(ul);
							}
							ul.appendChild(li);
						}
						document.getElementById('suggest').appendChild(ul);
					}
				}
			})
		}
	}

</script>
</body>
</html>