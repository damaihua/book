<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>订阅记录</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all">
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all">
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
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
        
        </div>
    </div>
</div>
<div class="user-right">
<table class="grid" align="center" width="100%">
<caption>VIP章节订阅记录</caption>
  <tbody><tr align="center">
    <th width="15%">书名</th>
    <th width="41%">章节</th>
    <th width="17%">消费积分</th>
    <th width="24%">日期</th>
  </tr>
  <?php if(is_array($orderlist)): $i = 0; $__LIST__ = $orderlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td align="center" class="even"><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>"><?php echo ($vo["book_name"]); ?></a></td>
    <td align="center" class="odd"><a href="__APP__/chapters/read/chapter_id/<?php echo ($vo["chapter_id"]); ?>"><?php echo ($vo["chapter_title"]); ?></a></td>
    <td class="even" align="center"><?php echo ($vo["much"]); ?></td>
    <td class="even" align="center"><?php echo (date("Y-m-d H:i:s",$vo["update_time"])); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody></table>
<div class="pages">
<?php echo ($page); ?>
</div>
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


</body></html>