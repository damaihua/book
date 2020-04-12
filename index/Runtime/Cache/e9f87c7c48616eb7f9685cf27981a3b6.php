<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all">
	<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all">
	<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
	<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
	<script language="javascript" type="text/javascript" src="__JS__/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		function uploadevent(status, picUrl, callbackdata) {
			var time = new Date().getTime();
			var filename162 = picUrl + '_162.jpg';
			var filename48 = picUrl + '_48.jpg';
			var filename20 = picUrl + "_20.jpg";
			window.location.href = "__APP__/member/do_avatar_edit?url=" + filename162;
		}
	</script>
</head>
<body>
	<div  id="top">
	<div class="wrap">
		<p class="top-welcome">您好，欢迎来访！</p>
		<div class="login-content"><?php echo showbar();?></div>
	</div>
</div>

<div id="head" class="clearfix">
	
	<h1><a href="__ROOT__"><img name="logo" src="__ROOT__/<?php echo (SITE_LOGO); ?>" width="222" height="53" alt="" /></a></h1>

	<div class="header-search">
		<form name="book" method="post" action="__URL__/index" target="_blank">
			
			<div class="header-searchCon">
				<select name="" class="search-sort">
					<option  name="searchtype" value="articlename" checked="checked">书名</option>
					<option  name="searchtype" value="author" >作者</option>
				</select>
			<input name="searchkey" type="text" class="search_text"> 
			
			<input type="submit" class="search_submit" value="搜索"></div>
		</form>
	</div>
</div>
<div id="menu_bar">
	<div id="nav">
	 <?php echo showHeadermenu();?>
	 </div>
    <div class="type-nav">
		<div class="wrap">
			<?php echo showcats();?>
		</div>
    </div>
    
</div>


	<div class="wrap">
		

<div class="user-centerLeft">
    <div class="userCenter-sort">
        <h2>用户设置</h2>
        <div class="userCenter-det">
            <a href="__APP__/member/index">个人首页</a>
            <a href="__APP__/member/member_edit">修改资料</a>
            <a href="__APP__/member/avatar_edit">修改头像</a>
            <a href="__APP__/member/pwd_edit">修改密码</a>
        </div>
    </div>
    <div class="userCenter-sort">
        <h2>短消息</h2>
        <div class="userCenter-det">
            <a href="__APP__/letter/inbox">收件箱</a>
            <a href="__APP__/letter/outbox">发件箱</a>
            <a href="__APP__/letter/write">写消息</a>
            <a href="__APP__/letter/toadmin">写给管理员</a>
        </div>
    </div>
    <div class="userCenter-sort">
        <h2>工具箱</h2>
        <div class="userCenter-det">
            <a href="__APP__/member/order">订阅记录</a>
            <a href="__APP__/member/pay">在线充值</a>
        
        </div>
    </div>
</div>
		<div class="user-right">
			<div id="altContent">
				<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
					codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
					WIDTH="740" HEIGHT="450" id="myMovieName">
					<PARAM NAME=movie VALUE="__PUBLIC__/flash/avatar.swf">
					<PARAM NAME=quality VALUE=high>
					<PARAM NAME=bgcolor VALUE=#FFFFFF>
					<param name="flashvars"
						value="imgUrl=__PUBLIC__/flash/default.jpg&uploadUrl=__PUBLIC__/flash/upfile.php&uploadSrc=ture" />
					<EMBED src="__PUBLIC__/flash/avatar.swf" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450"
						wmode="transparent"
						flashVars="imgUrl=__PUBLIC__/flash/default.jpg&uploadUrl=__PUBLIC__/flash/upfile.php&uploadSrc=ture"
						NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
						PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
					</EMBED>
				</OBJECT>

			</div>
		</div>
	</div>
	
<div class="cb"></div>
<div id="footer">
	<div class="foot_nav">
    	
        <?php echo showFootermenu();?>
    </div>
    <p>版权仅自己所有</p>
   
    
</div>


	<div id="tips"></div>
</body>

</html>