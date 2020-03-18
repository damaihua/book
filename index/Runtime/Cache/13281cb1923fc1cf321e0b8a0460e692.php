<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>会员注册——<?php echo (SITE_NAME); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo (SITE_KEYWORDS); ?>" />
<meta name="description" content="<?php echo (SITE_DESCRIPT); ?>" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />

<script language="javascript" type="text/javascript" src="__JS__/jquery-1.8.3.min.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
<script type="text/javascript" src="__JS__/Validform_v5.3.2.js"></script>

<script type="text/javascript">
$(function(){
	//$(".registerform").Validform();  //就这一行代码！;
		
	$(".registerform").Validform({
		tiptype:function(msg,o,cssctl){
			//msg：提示信息;
			//o:{obj:*,type:*,curform:*}, obj指向的是当前验证的表单元素（或表单对象），type指示提示的状态，值为1、2、3、4， 1：正在检测/提交数据，2：通过验证，3：验证失败，4：提示ignore状态, curform为当前form对象;
			//cssctl:内置的提示信息样式控制函数，该函数需传入两个参数：显示提示信息的对象 和 当前提示的状态（既形参o中的type）;
			if(!o.obj.is("form")){//验证表单元素时o.obj为该表单元素，全部验证通过提交表单时o.obj为该表单对象;
				var objtip=o.obj.siblings(".Validform_checktip");
				cssctl(objtip,o.type);
				objtip.text(msg);
			}
		}
	});
})
</script>


</head>
<body>
<!-- 头部部分 -->


<div  id="top">
	<div class="wrap">
		<p class="top-welcome">欢迎访问在线阅读！</p>
		<div class="login-content"><?php echo showbar();?></div>
		<!-- <a  href="book/index.php?charset=gbk">简体</a>|
		<a  href="http://www.cuiweiju.com/index.php?charset=big5">繁体</a>| 
		<a  href="javascript:window.external.addFavorite('http://www.cuiweiju.com','翠微居小说网');">加入收藏</a>|
		<a href="javascript:;" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.lamp99.com');">设为首页</a>-->
	</div>
</div>

<div id="phead" class="clearfix">
	ROOT--------__ROOT__        //  URl   ---- __URL__     //APP---__APP__
	<h1><a href="__ROOT__"><img name="logo" src="__ROOT__/<?php echo (SITE_LOGO); ?>" width="222" height="53" alt="" /></a></h1>
<!-- 	
	<?php echo getAD(121,465,55);?>
    <ul><li><a href="#" target="_blank">新手必读手册</a></li>
        <li><a href="#" target="_blank"><font color=red>免费领取翠微币活动</font></a></li>
        <li><a href="#" target="_blank">举报低俗信息有奖</a></li>
	</ul> -->
	<div class="header-search">
		<form name="articlesearch" method="post" action="/book/index.php/search/index.html" target="_blank">
			<div class="header-searchCon">
				<select name="" class="search-sort">
					<option  name="searchtype" value="articlename" checked="checked">书名</option>
					<option  name="searchtype" value="author" >作者</option>
				</select>
				
			<input name="searchkey" type="text" class="search_text"> 

			<!-- <input type="radio" class="radio" name="searchtype" value="articlename" checked="checked" />书名 	
			<input type="radio" class="radio" name="searchtype" value="author" />作者 -->
			<input type="submit" class="search_submit" value="搜索"></div>
		</form>
	</div>
</div>
<div id="pmenu_bar">
	<div id="mynav">
	 <?php echo showHeadermenu();?>
	 </div>


    <div class="type-nav">
		<div class="wrap">
			<?php echo showcats();?>
		</div>
		 
    </div>
    <div class="dynamic">
		<div class="m_quee" id="m_quee">
			<dl class="dl_quee">
				<dd><a href="/userpage.php?uid=2979095" target="_blank"><em>a593913134</em></a>&nbsp;订阅了&nbsp;<a href="/cwjinfo/126/126334.htm" target="_blank"><strong>《人生得意须纵欢》</strong></a></dd>
				<dd><a href="/userpage.php?uid=2282522" target="_blank"><em>咪咪姐</em></a>&nbsp;订阅了&nbsp;<a href="/cwjinfo/125/125765.htm" target="_blank"><strong>《川蜀大军阀》</strong></a></dd>
				<dd><a href="/userpage.php?uid=3141175" target="_blank"><em>dong1028</em></a>&nbsp;订阅了&nbsp;<a href="/cwjinfo/125/125832.htm" target="_blank"><strong>《欲望之门》</strong></a></dd>
				<dd><a href="/userpage.php?uid=3151348" target="_blank"><em>27611800</em></a>&nbsp;订阅了&nbsp;<a href="/cwjinfo/111/111082.htm" target="_blank"><strong>《君临战国》</strong></a></dd>
				<dd><a href="/userpage.php?uid=1850289" target="_blank"><em>lingmuqiang</em></a>&nbsp;订阅了&nbsp;<a href="/cwjinfo/126/126990.htm" target="_blank"><strong>《都市后花园》</strong></a></dd>
			</dl>
			<script language="javascript" type="text/javascript">
				var Marquee1 = new Marquee("m_quee");

				Marquee1.Direction = "top";

				Marquee1.Step = 1;

				Marquee1.Width = 580;

				Marquee1.Height = 28;

				Marquee1.ScrollStep = 28;

				Marquee1.Timer = 30;

				Marquee1.DelayTime = 3000;

				Marquee1.WaitTime = 3000;

				Marquee1.Start();

			</script>
		</div>
		<div class="m_sr">
			<form name="articlesearch" method="post" action="/book/index.php/search/index.html" target="_blank">
    			<span>
				<input name="searchkey" type="text" class="search_text"> 
				<input type="radio" class="radio" name="searchtype" value="articlename" checked="checked" />书名 	
				<input type="radio" class="radio" name="searchtype" value="author" />作者
				<input type="submit" class="search_submit" value=" "></span>
			</form>
		</div>
    </div>
</div>

</div>

<div class="wrap userInfo-module">
  <div class="userInfo-content">
    <h2>新用户注册</h2>
    <form class="registerform"  action="__URL__/do_reg" method="post">
      <div class="userInfo-item">
        <span class="userInfo-sortTit">用户名</span>
        <input class="text" name="user_name" type="text" nullmsg="请输入用户名！"  datatype="/\w{6,16}/i"  errormsg="用户名由6-16位字母，数字或下划线组成！" placeholder="请输入用户名" >
        <span class="Validform_checktip">6-16位字母,数字或下划线</span>
      </div>
      <div class="userInfo-item">
        <span class="userInfo-sortTit">密码</span>
        <input class="text" name="user_pwd" id="user_pwd" type="password" datatype="s6-16" errormsg="密码至少6个字符,最多16个字符！"  placeholder="设置密码">
        <span class="quick_feeaback Validform_checktip">密码在6~15位之间！</span>
      </div>
      <div class="userInfo-item">
        <span class="userInfo-sortTit">确认密码</span>
        <input class="text" name="repassword" id="repassword"  type="password" datatype="*" recheck="user_pwd" errormsg="您两次输入的账号密码不一致！" placeholder="请再次确认密码" >
        <span class="quick_feeaback Validform_checktip">密码在6~15位之间！</span>
      </div>
      <div class="userInfo-item">
        <span class="userInfo-sortTit">邮箱</span>
        <input class="text" name="user_email" id="user_email"  type="text" datatype="e" errormsg="请输入正确的电子邮箱！" placeholder="请输入邮箱">
        <span class="Validform_checktip">用于找回密码等</span>
      </div>
      <div class="userInfo-item">
        <span class="userInfo-sortTit">验证码</span>
        <input type="text" class="text" size="8" maxlength="8" name="verify"  placeholder="输入正确的验证码">
        <img class="ver-code" src="__APP__/Public/verify/" alt="点击更换验证码"  onclick="this.src='__APP__/Public/verify/?rand='+Math.random();">
      </div>
      <div class="userInfo-item">  
        <input name="" value="注册" id="" class="bt_reg" type="submit">
      </div>
    </form>
    <a href="__URL__/login" class="go-login">去登录</a>
  </div>
</div>




<!--foot底部部分--->

<div class="cb"></div>
<div id="footer">
	<div class="foot_nav">
    	
        <?php echo showFootermenu();?>
    </div>
    <p>请作者发布作品时遵守国家互联网信息管理办法规定</p>
    <!-- <p><?php echo (SITE_COPYRIGHT); ?>&nbsp;&nbsp;<?php echo (SITE_BEIAN); ?></p> -->
    
</div>




</body>

</html>