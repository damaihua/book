<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>会员登录</title>
<meta charset="utf-8" />
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<meta charset='utf-8'/>
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>

</head>
<body>
<!---头部部分--->
<div  id="top">
	<div class="wrap">
		<p class="top-welcome">您好，欢迎来访！</p>
		<div class="login-content"><?php echo showbar();?></div>
	</div>
</div>

<div id="head" class="clearfix">
	
	<h1><a href="__ROOT__"><img name="logo" src="__ROOT__/<?php echo (SITE_LOGO); ?>" width="" height="52" alt="" /></a></h1>

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



<!---内容部分-->

<div class="wrap userInfo-module">
  <div class="userInfo-content">
    <h2>用户登录</h2>
    <form name="frmlogin" method="post" action="__URL__/checklogin">
      <div class=""></div>
      <div class="userInfo-item">
        <span class="userInfo-sortTit">用户名</span>
        <input name="user_name" type="text" class="text" value="" placeholder="请输入用户名/账户">
        <span class="quick_feeaback"></span>
      </div>
      <div class="userInfo-item">
        <span class="userInfo-sortTit">密码</span>
        <input class="text" name="user_pwd" type="password" placeholder="请输入密码">
        <span class="quick_feeaback"></span>
      </div>
      <div class="userInfo-item">
        <span class="userInfo-sortTit">验证码</span>
        <input type="text" class="text" size="8" maxlength="8" name="verify" placeholder="输入正确的验证码">
        <img class="ver-code" src="__APP__/Public/verify/" alt="点击更换验证码" onclick="this.src='__APP__/Public/verify/?rand='+Math.random();">
      </div>
      <div class="userInfo-item">
        <p class="remember-pass">
          <input class="checkbox" name="usecookie" id="usecookie" value="315360000" type="checkbox">
          <span>记住密码</span>
        </p>
        <a style="color:#719E18;padding:0px 0px 0px 50px;vertical-align: middle;" href="">忘记密码？</a>
      </div class="userInfo-item">
      <div class="userInfo-item">
        <input name="submit" value="登 录" id="" class="bt_login" type="submit">
      </div>
      
    </form>
    <p class="account-tips">没有账号？立即<a href="__URL__/reg.html">免费注册</a>一个</p>
  </div>
</div>




<!--foot底部部分--->

<div class="cb"></div>
<div id="footer">
	<div class="foot_nav">
    	
        <?php echo showFootermenu();?>
    </div>
    <p>版权仅自己所有</p>
   
    
</div>



</body>

</html>