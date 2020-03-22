<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>订阅记录——<?php echo (SITE_NAME); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all">
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all">
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/scripts/DD_belatedPNG.js" ></script>
<script type="text/javascript">
	DD_belatedPNG.fix(' .recommend_pic,.editor_pic,.title_pic,,#phead h1,#phead h1 ');
</script>
<![endif]-->

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





<div class="main">

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
  <div id="centerm"><div id="content">
<table class="grid" align="center" width="100%">
<caption>我的收藏夹</caption>
  <tbody><tr align="center">
    <th width="16%">书名</th>
    <th width="31%">最新章节</th>
    <th width="27%">收藏日期</th>
    <th width="26%">操作</th>
  </tr>
 
  <tr>
    <td align="center" class="even"><a href="#" target="_blank"><?php echo ($vo["book_id"]); ?></a></td>
    <td align="center" class="odd"><a href="#" target="_blank"><?php echo ($vo["chapter_id"]); ?></a></td>
    <td class="even" align="center"><?php echo ($vo["order_time"]); ?></td>
    <td class="even" align="center"><a href="#">继续阅读</a>|<a href="#">移除收藏夹</a></td>
  </tr>
 
</tbody></table>
<div class="pages"><div class="pagelink" id="pagelink"><em id="pagestats">1/1</em><a href="http://www.cuiweiju.com/modules/obook/buylog.php?oid=2998&amp;page=1" class="first">1</a><a href="http://www.cuiweiju.com/modules/obook/buylog.php?oid=2998&amp;page=1" class="pgroup">&lt;&lt;</a><strong>1</strong><a href="http://www.cuiweiju.com/modules/obook/buylog.php?oid=2998&amp;page=1" class="ngroup">&gt;&gt;</a><a href="http://www.cuiweiju.com/modules/obook/buylog.php?oid=2998&amp;page=1" class="last">1</a><kbd><input name="page" size="4" maxlength="6" onkeydown="if(event.keyCode==13){window.location='http://www.cuiweiju.com/modules/obook/buylog.php?oid=2998&amp;page='+this.value; return false;}" type="text"></kbd></div></div>

</div>
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


</body></html>