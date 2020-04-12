<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>个人资料修改</title>
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all">
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all">
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="__JS__/Validform_v5.3.2.js"></script>

<script type="text/javascript">
$(function(){
	$(".editform").Validform({
		tiptype:function(msg,o,cssctl){
        if(!o.obj.is("form")){
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



<div class="clearfix wrap mb20">

  

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
    

<form class='editform' name="useredit" id="useredit" action="__APP__/member/do_member_edit" method="post" enctype="multipart/form-data">
<table class="grid" cellspacing="1" align="center" width="100%">
<caption>
会员资料修改
</caption>
<tbody>
 <input name="user_id" id="user_id" value="<?php echo ($data['user_id']); ?>" type="hidden">
<tr align="left" valign="middle">
  <td class="odd" width="25%">用户名</td>
  <td class="even"><?php echo (session('user_name')); ?></td>
</tr>
<tr align="left" valign="middle">
  <td class="odd" width="25%">昵称</td>
  <td class="even"><input class="text" name="user_nicename" id="user_nicename" size="25" maxlength="39" value="<?php echo ($data["user_nicename"]); ?>" type="text" datatype="s3-10" nullmsg="用户名最少3位，最多10位！" errormsg="用户名最少3位，最多10位！"> <span class="Validform_checktip"></span></td>
</tr>

<tr align="left" valign="middle">
  <td class="odd" width="25%">Email</td>
  <td class="even"><input class="text" name="user_email" id="user_email" size="25" maxlength="60" value="<?php echo ($user_email); ?>" type="text" datatype="e" nullmsg="请填写正确的Email！" errormsg="请填写正确的Email！">
   <span class="Validform_checktip"></span></td>
</tr>
<tr align="left" valign="middle">
<td class="odd" width="25%">性别</td>
<td class="even">
<input class="radio" name="user_sex" value="1" <?php if($data["user_sex"] == 1): ?>checked <?php else: endif; ?> type="radio">男
<input class="radio" name="user_sex" value="2" <?php if($data["user_sex"] == 2): ?>checked <?php else: endif; ?> type="radio">女
<input name="user_sex"  type="radio" class="radio" value="0" <?php if($data["user_sex"] == 0): ?>checked <?php else: endif; ?> >保密
</td></tr>

<tr align="left" valign="middle">
  <td class="odd" width="35%">个人简介</td>
  <td class="even"><textarea class="textarea" name="user_info" id="user_info" rows="6" cols="60" ><?php echo ($data["user_info"]); ?></textarea></td>
</tr>
<tr align="left" valign="middle">
  <td class="odd" width="30%">&nbsp;<input name="action" id="action" value="update" type="hidden"></td>
  <td class="even"><input class="button" name="submit" id="submit" value="保 存" type="submit"></td>
</tr>
</tbody></table>
</form>

</div>
</div>



<div class="cb"></div>
<div id="footer">
	<div class="foot_nav">
    	
        <?php echo showFootermenu();?>
    </div>
    <p>版权仅自己所有</p>
   
    
</div>

</body></html>