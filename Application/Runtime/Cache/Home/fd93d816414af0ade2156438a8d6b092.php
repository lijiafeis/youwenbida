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
	<div class="container category">
		<div class="row">
			<div class="col-sm-12">
				<?php if(is_array($cat_list)): $i = 0; $__LIST__ = $cat_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><dl>
					<dt>
						<img alt="默认分类" src="/phpStorm/youwenbida/Public/upload/<?php echo ($row['cat_logo']); ?>"></dt>
					<dd>
						<p class="title">
							<a href="category.html"><?php echo ($row['cat_name']); ?></a>
						</p>
						
					</dd>
				</dl><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="aw-content-wrap clearfix">
				<div class="col-sm-12 col-md-9 aw-main-content">
					<!-- end 新消息通知 -->
					<!-- tab切换 -->
					<ul class="nav nav-tabs aw-nav-tabs active hidden-xs">
						<li>
							<a href="">等待回复</a>
						</li>
						<li>
							<a id="sort_control_hot" href="">热门</a>
						</li>
						<li>
							<a href="">推荐</a>
						</li>
						<li class="active">
							<a href="">最新</a>
						</li>

						<h2 class="hidden-xs">
							<i class="icon icon-list"></i>
							发现
						</h2>
					</ul>
					<!-- end tab切换 -->
					<div class="aw-mod aw-explore-list">
						<div class="mod-body">
							<div class="aw-common-list" id = 'page_content'>
								<?php if(is_array($que_list)): $i = 0; $__LIST__ = $que_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div data-topic-id="" class="aw-item active">
									<a rel="nofollow" href="people.html" data-id="1" class="aw-user-name hidden-xs">
										<img alt="" src="/phpStorm/youwenbida/Public/Home/common/avatar-max-img.png"/></a>
									<div class="aw-question-content">
										<h4>
											<a href="#"><?php echo ($row['question_title']); ?></a>
										</h4>
										<a class="pull-right text-color-999" href="answer.html">回复</a>

										<p>
											<a href="category.html" class="aw-question-tags"><?php echo ($row['cat_name']); ?></a>
											•
											<a class="aw-user-name" href="people.html">itbull</a>
											<span class="text-color-999"><?php echo ($row['username']); ?>发起了问题 • <?php echo ($row['focus_count']); ?>人关注 • <?php echo ($row['reply_count']); ?> 个回复 • <?php echo ($row['view_count']); ?> 次浏览 • <?php echo (date('%Y-%m-%d %H:%M:%S',$row['pub_time'])); ?></span>
											<span class="text-color-999 related-topic hide">• 来自相关话题</span>
										</p>

									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>>
							</div>
						</div>
						<div class="mod-footer">
							<div class="page-control" id = 'page_bar'>
								<!-- <?php echo ($page_html); ?> -->
							</div>
						</div>
					</div>
				</div>


				<!-- 侧边栏 -->
				<div class="col-sm-12 col-md-3 aw-side-bar hidden-xs hidden-sm">
					<div class="aw-mod aw-text-align-justify">
						<div class="mod-head">
							<a class="pull-right" href="topic_index.html">更多 &gt;</a>
							<h3>热门话题</h3>
						</div>
						<div class="mod-body">
							{foreach $hot_topic as $row}
							<dl>
								<dt class="pull-left aw-border-radius-5">
									<a href="topic.html">
										<img src="/phpStorm/youwenbida/Public/Home/common/topic-mid-img.png" alt=""></a>
								</dt>
								<dd class="pull-left">
									<p class="clearfix">
										<span class="topic-tag">
											<a data-id="3" class="text" href="#"><?php echo ($row['topic_title']); ?></a>
										</span>
									</p>
									<p>
										<b><?php echo ($row['num']); ?></b>
										个问题,
										<b>1</b>
										人关注
									</p>
								</dd>
							</dl>
							{/foreach}
						</div>
					</div>
					<div class="aw-mod aw-text-align-justify">
						<div class="mod-head">
							<a class="pull-right" href="?/people/">更多 &gt;</a>
							<h3>热门用户</h3>
						</div>
						<div class="mod-body">
							{foreach $hot_user as $row}
							<dl>
								<dt class="pull-left aw-border-radius-5">
									<a href="people.html">
										<img src="/phpStorm/youwenbida/Public/Home/common/avatar-mid-img.png" alt=""></a>
								</dt>
								<dd class="pull-left">
									<a class="aw-user-name" data-id="2" href="people.html"><?php echo ($row['username']); ?></a>
									<p class="signature"></p>
									<p>
										<b><?php echo ($row['q_num']); ?></b>
										个问题,
										<b>0</b>
										次赞同
									</p>
								</dd>
							</dl>
							{/foreach}
						</div>
					</div>
				</div>
				<!-- end 侧边栏 -->
			</div>
		</div>
	</div>
</div>
<script>       
function getLocalTime(nS) {    
	//1秒==1000毫秒   
   return new Date(parseInt(nS) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");        
}           
</script>    
<script type="text/javascript">
//	goPage(1);
	function goPage(page){
//		alert('a');
		$$.request({
			mothed:'post',
			url:"<?php echo U('Home/Question/getAjaxQuestion');?>",
			data:'page=' + page,
			dataType:'text',
			callback:function(res){

				if(res.status == 1){
					var page_content = document.getElementById('page_content');
					var questions = res.questiones;
					console.log(questions);
					var str = '';
					for(var i = 0; i < questions.length; i++){
						str += '<div data-topic-id="2," class="aw-item active"><a rel="nofollow" href="people.html" data-id="1" class="aw-user-name hidden-xs"><img alt="" src="/phpStorm/youwenbida/Public/Home/common/avatar-max-img.png"></a><div class="aw-question-content"><h4><a href="{STATIC_PATH}'+(questions[i].static_url)+'">'+(questions[i].question_title)+'</a></h4><a class="pull-right text-color-999" href="answer.html">回复</a><p><a href="category.html" class="aw-question-tags">'+(questions[i].cat_name)+'</a>•<a class="aw-user-name" href="people.html">'+(questions[i].username)+'</a><span class="text-color-999">发起了问题 • '+(questions[i].focus_count?questions[i].focus_count:1)+' 人关注 • '+(questions[i].reply_count?questions[i].reply_count:1)+' 个回复 •'+(questions[i].view_count?questions[i].view_count:1)+' 次浏览 • '+(getLocalTime(questions[i].pub_time))+'</span><span class="text-color-999 related-topic hide">• 来自相关话题</span></p></div></div>';
					}
					page_content.innerHTML = str;
					document.getElementById('page_bar').innerHTML = res.pageBar;
				}
			}
		});
	}

</script>


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