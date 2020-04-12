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
  <script type="text/javascript" charset="utf-8" src="pay_files/toplink.js"></script>
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
        
        </div>
    </div>
</div>
    <div class="user-right">
      <h2>购买积分卡</h2>
      <form name="frmalipay" method="post" action="__APP__/member/repay">
        <div>请选择</div>
        <div>
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p>
              <input name="paycard" value="<?php echo ($vo["paycard_id"]); ?>" class="radio" type="radio">
              <?php echo ($vo["paycard_score"]); ?>积分卡（<?php echo ($vo["paycard_money"]); ?>元）
            </p><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div>
            <input name="Submit" value="进入下一步" class="button" type="submit">
            <input name="action" value="bankpay" type="hidden">
        </div>
      </form>
      <p style="padding:20px;">操作说明：<br>
        1、支持多种银行卡及支付宝账户支付，方便、快捷、安全 <br>
         2、支付结束，实时到账 </p>
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



  <div id="tips"></div>
</body>

</html>