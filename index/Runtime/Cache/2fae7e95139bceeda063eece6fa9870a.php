<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>写信消息--<?php echo (SITE_NAME); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo (SITE_KEYWORDS); ?>" />
<meta name="description" content="<?php echo (SITE_DESCRIPT); ?>" />

	<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
	<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
	<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
	<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
	
	<script src="__JS__/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		function frmnewmessage_validate(){
			if(typeof(document.frmnewmessage.receiver) != "undefined"){
				if(document.frmnewmessage.receiver.value == "" ){
					 alert("请输入收件人");
					document.frmnewmessage.receiver.focus();
					return false;
				}
			}
			
			if(document.frmnewmessage.receiver.value=="<?php echo $_SESSION['user_name'];?>"){
				alert('不可以给自己发短消息');
				document.frmnewmessage.receiver.focus();
				return false;
			}

			if(document.frmnewmessage.title.value == ""){
				 alert("请输入标题");
				window.document.frmnewmessage.title.focus();
				return false;
			 }
		}
	</script>
	<script>
		$(function(){
			$('#receiver').blur(function(){
				if(this.value=="<?php echo $_SESSION['user_name'];?>"){
					alert('不可以给自己发短消息');
				}
			});
		});
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

<div class="wrap clearfix mb20">

	

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
		
			
			
				<form name="frmnewmessage" id="frmnewmessage" action="__URL__/dowrite" method="post" onsubmit="return frmnewmessage_validate();">
					<table width="100%" class="grid" cellspacing="1" align="center">
						<caption>写新消息</caption>
						<tr valign="middle" align="left">
							<td class="odd" width="25%">收件人</td>
							<td class="even">
					
								<input type="text" class="text" name="receiver" id="receiver" size="30" maxlength="30" value="" />
					
							</td>
						</tr>
						<tr valign="middle" align="left"><td class="odd" width="25%">标题</td>
							<td class="even"><input type="text" class="text" name="title" id="title" size="30" maxlength="100" value="" /></td>
						</tr>
						<tr valign="middle" align="left">
							<td class="odd" width="25%">内容</td>
							<td class="even"><textarea class="textarea" name="content" id="content" rows="12" cols="60"></textarea></td>
						</tr>
						<tr valign="middle" align="left">
							<td class="odd" width="25%">&nbsp;</td>
							<td class="even"><input type="submit" class="button" name="submit"  id="submit" value="发 送" /><input type="hidden" name="action" id="action" value="newmessage" /></td>
						</tr>
					</table>
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


</body>

</html>