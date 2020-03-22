<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>翠微居小说网-小说阅读网,干净好看的小说网,txt小说免费下载</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="小说;小说阅读网;好看的小说;娱乐;艳遇;情人;后宫;美人;TXT;泡妞;激情小说;成人小说;都市小说;玄幻小说;言情小说;免费小说;H小说;yy小说;乡村;山村;小说下载">
<meta name="description" content="翠微居小说网致力于打造成为最好看的小说阅读网，提供免费的都市小说、言情小说、玄幻小说、武侠小说、同人小说、仙侠小说、yy小说、激情小说、成人小说、乡村、山村、娱乐、艳遇、后宫、泡妞等的在线阅读，努力营造一个绿色的创作与阅读平台！同时提供免费txt小说下载，每日最快更新，页面简洁，访问速度快！">
<meta name="author" content="http://www.jieqi.com (jieqi cms)">
<meta name="copyright" content="">
<meta name="generator" content="jieqi.com">
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all">
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all">
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>

<script language="javascript" type="text/javascript">

  function frmpassedit_validate(){
    if (document.frmpassedit.oldpass.value == ""){
      alert( "请输入原密码！" );
    document.frmpassedit.oldpass.focus();
    return false;
    }
    if(document.frmpassedit.newpass.value == ""){
      alert( "请输入新密码！" );
    document.frmpassedit.newpass.focus();
    return false;
    }
    if (document.frmpassedit.repass.value != document.frmpassedit.newpass.value){
      alert( "两次新密码输入不同，请重新输入！" );
    document.frmpassedit.repass.focus();
    return false;
    }
  }
  
  </script>
</head>
<body>
<!---头部部分--->
<div  id="top">
	<div class="wrap">
		<p class="top-welcome">欢迎访问在线阅读！</p>
		<div class="login-content"><?php echo showbar();?></div>
	</div>
</div>

<div id="head" class="clearfix">
	ROOT--------__ROOT__        //  URl   ---- __URL__     //APP---__APP__
	<h1><a href="__ROOT__"><img name="logo" src="__ROOT__/<?php echo (SITE_LOGO); ?>" width="222" height="53" alt="" /></a></h1>

	<div class="header-search">
		<form name="book" method="post" action="__URL__/index" target="_blank">
			<!-- /book/index.php/search/index.html -->
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


<!--------------------------------------------内容部分---------------------------------------------->

<div  class="wrap clearfix mb20">
<!---左侧导航--->


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
            <a href="__APP__/member/applyauthor">申请作者</a>
        </div>
    </div>
</div>



  <div class="user-right">
    

<form name="frmpassedit" id="frmpassedit" action="__APP__/member/do_pwd_edit" method="post" onsubmit="return frmpassedit_validate();">
<table class="grid" cellspacing="1" align="center" width="100%">
<caption>用户密码修改</caption>
<tbody><tr align="left" valign="middle">
  <td class="odd" width="25%">用户名</td>
  <td class="even"><?php echo (session('user_name')); ?></td>
</tr>
<tr align="left" valign="middle">
  <td class="odd" width="25%">原密码</td>
  <td class="even"><input class="text" name="oldpass" id="oldpass" size="25" maxlength="20" value="" type="password"></td>
</tr>
<tr align="left" valign="middle">
  <td class="odd" width="25%">新密码</td>
  <td class="even"><input class="text" name="newpass" id="newpass" size="25" maxlength="20" value="" type="password"></td>
</tr>
<tr align="left" valign="middle">
  <td class="odd" width="25%">重复新密码</td>
  <td class="even"><input class="text" name="repass" id="repass" size="25" maxlength="20" value="" type="password"></td>
</tr>
<tr align="left" valign="middle">
  <td class="odd" width="25%">&nbsp;<input name="action" id="action" value="update" type="hidden"></td>
  <td class="even"><input class="button" name="submit" id="submit" value="保 存" type="submit"></td>
</tr>
</tbody></table>
</form>
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


<div id="tips"></div>
</body></html>