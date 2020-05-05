<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>1</title>
	<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="__PUBLIC__/admin/css/menu.css" type="text/css" media="screen">
	<link rel="stylesheet" href="__PUBLIC__/admin/css/invalid.css" type="text/css" media="screen">
	<script language="javascript" src="__PUBLIC__/admin/js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="__PUBLIC__/admin/js/admin.jquery.configuration.js"></script>
	<script src="__TMPL__/public/js/frame.js" language="javascript" type="text/javascript"></script>
</head>

<body>
	<div id="body-wrapper">
		<div id="sidebar">
			<div id="sidebar-wrapper">


				<h2 id="sidebar-title"><a href="http://localhost/dede/dede/index_menu.php#">后台管理系统</a></h2>
				<div id="profile-links">
					<?php echo ($admin_name); ?>, <br />欢迎登录后台管理系统<br>
						<a href="__ROOT__" title="前台首页" target="_blank">前台首页</a> | <a href="<?php echo U('login/out');?>"
							title="退出" target="_parent">退出</a>
				</div>

				<ul id="main-nav">

					<li>
						<a id="index_body" href="index_body" class="nav-top-item no-submenu current" target="main"
							style="padding-right: 15px;">
							管理首页
						</a>
					</li>

					<li>
						<a id="articles" href="javascript:void(0);" class="nav-top-item" style="padding-right: 15px;">
							内容管理
						</a>
						<ul style="display: none;">
							<li><a class="nav-bottom-item" id="article_add" href="__APP__/book/book_main/"
									target="main">书籍管理</a></li>
							<li><a class="nav-bottom-item" id="catalog_main" href="__APP__/book/chapter_main/"
									target="main">章节管理</a></li>
							<li><a class="nav-bottom-item" id="content_list" href="__APP__/book/cat_main/"
									target="main">分类管理</a></li>
									<li><a class="nav-bottom-item" id="member_guestbook" href="__APP__/member/comment_main"
										target="main">评论管理</a></li>
						</ul>
					</li>

					<li>
						<a id="member" href="javascript:void(0);" class="nav-top-item">
							会员管理
						</a>
						<ul style="display: none;">
							<li><a class="nav-bottom-item" id="member_main" href="__APP__/member/member_main"
									target="main">注册会员列表</a></li>


							<li><a class="nav-bottom-item" id="member_pm" href="__APP__/member/letter_main"
									target="main">会员信箱管理</a></li>
							<!-- <li><a class="nav-bottom-item" id="member_guestbook" href="__APP__/member/comment_main"
									target="main">会员留言管理</a></li> -->

						</ul>
					</li>
					<li>
						<a id="member" href="javascript:void(0);" class="nav-top-item">
							管理员管理
						</a>
						<ul style="display: none;">
							<li><a class="nav-bottom-item" id="member_main" href="__APP__/admin/admin_main"
									target="main">管理员列表</a></li>
							<li><a class="nav-bottom-item" id="member_rank" href="__APP__/admin/admin_add"
									target="main">增加管理员</a></li>

							<li><a class="nav-bottom-item" id="member_guestbook" href="__APP__/admin/admin_letter"
									target="main">收信箱</a></li>

						</ul>
					</li>
					<li>
						<a id="member" href="javascript:void(0);" class="nav-top-item">
							积分管理
						</a>
						<ul style="display: none;">

							<li><a class="nav-bottom-item" id="media_main" href="__APP__/score/score_role"
									target="main">积分规则管理</a></li>
							<li><a class="nav-bottom-item" id="media_add" href="__APP__/score/score_main"
									target="main">充值点卡管理</a></li>
							<li><a class="nav-bottom-item" id="media_add" href="__APP__/score/score_add"
									target="main">添加充值点卡</a></li>


						</ul>
					</li>



					<li style="display:none;">
						<a id="channel" href="javascript:void(0);" class="nav-top-item" style="padding-right: 15px;">
							权限管理 </a>
						<ul style="display: none;">
							<li><a class="nav-bottom-item" id="mychannel_main" href="__APP__/admin/admin_group"
									target="main">用户组管理</a></li>
							<li><a class="nav-bottom-item" id="templets_one" href="__APP__/admin/group_add"
									target="main">添加用户组</a></li>


						</ul>
					</li>

					<li>
						<a id="plus" href="javascript:void(0);" class="nav-top-item" style="padding-right: 15px;">
							辅助插件 </a>
						<ul style="display: none;">
							<li><a class="nav-bottom-item" id="plus_main" href="__APP__/other/page_main/"
									target="main">单页管理</a></li>
							<li><a class="nav-bottom-item" id="ad_main" href="__APP__/other/ad_main"
									target="main">广告管理</a></li>
							<li><a class="nav-bottom-item" id="ad_main" href="__APP__/other/notice_main"
									target="main">公告管理</a></li>
							<li><a class="nav-bottom-item" id="friendlink_main" href="__APP__/other/link_main"
									target="main">友情链接</a></li>

						</ul>
					</li>
					<li>
						<a id="sys" href="javascript:void(0);" class="nav-top-item">
							系统设置
						</a>
						<ul style="display: none;">
							<li><a class="nav-bottom-item" id="sys_info" href="__APP__/siteset/sys_main"
									target="main">系统信息</a></li>
							<li><a class="nav-bottom-item" id="sys_info" href="__APP__/siteset/sys_set"
									target="main">基本参数</a></li>

							<li><a class="nav-bottom-item" id="sys_group" href="__APP__/siteset/menu_main"
									target="main">菜单管理</a></li>


						</ul>
					</li>
				</ul>

				<script>
					$(".nav-bottom-item").click(function () {
						$(".nav-bottom-item").removeClass('current');
						$(".nav-top-item").removeClass('current');
						$(this).addClass("current");
						$(this).parents("li").children(".nav-top-item").addClass("current");
					});

				</script>
			</div>
		</div>
	</div>

</body>

</html>