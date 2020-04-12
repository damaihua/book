<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>会员中心</title>
    <link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all">
    <link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all">
    <script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
    <style type="text/css"></style>
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
            <div class="clearfix admin_show">
                <div class="avator">
                    <span class="ph"><img src="__ROOT__/<?php echo ($userinfo["user_avatar"]); ?>" class="avatar" alt="头像"></span>
                    <a href="__APP__/member/avatar_edit">修改头像</a>
                </div>
                <div class="info">
                    <h3>
                        <?php echo ($userinfo["user_nicename"]); ?>(<?php echo ($user["user_name"]); ?>)
                    </h3>
                    <ul class="clearfix">
                        <li class="fl"><em>性别：</em><span>
                                <?php if($userinfo["user_sex"] == 1): ?>男
                                    <?php elseif($userinfo["user_sex"] == 2): ?>女
                                    <?php else: ?> 保密<?php endif; ?>

                            </span></li>
                        <li class="fl"><em>类型：</em><span>
                                <?php if($user["user_type"] == 1): ?>普通会员
                                    <?php elseif($user["user_type"] == 2): ?>作者
                                    <?php else: ?>普通会员<?php endif; ?>


                            </span></li>
                        <li class="fl"><em>积分:</em><span>
                                <?php echo ($userinfo["user_score"]); ?>
                            </span></li>
                        <li class="fl"><em><a href="__APP__/member/pay">立即购买积分</a>?</em></li>
                        <li><em>Email：</em><span>
                                <?php echo ($user["user_email"]); ?>
                            </span>
                            <span class="hottext">
                                <a href="__APP__/member/member_edit#email">[修改邮箱]</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <h2 class="common-headline"><span>阅读历史</span></h2>
                <div class=" read-record clearfix">
                    <ul class="bk_list6">
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="clearfix">
                                <span class="fun_bt"><a
                                        href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>">立即阅读</a></span>
                                <a class="ph" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>"><img
                                        src="__ROOT__/<?php echo ($vo["book_cover"]); ?>" /></a>
                                <span class="info">
                                    <a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" class="name">
                                        <?php echo ($vo["book_name"]); ?>
                                    </a><br>作者：admin<br>最新章节：<a href="#">推荐</a><br>更新时间：<?php echo (date("Y-m-d
                                        H:i:s",$vo["read_time"])); ?>
                                </span>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
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

</body>

</html>