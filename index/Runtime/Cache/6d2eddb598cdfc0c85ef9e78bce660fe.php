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
</head>
<body>

  <script type="text/javascript" charset="utf-8" src="pay_files/toplink.js"></script>
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
      <h2>充值确认</h2>
      <form name="frmalipay" method="post" action="__APP__/member/do_pay">
          <p class="clearfix">
            <span class="fl">类型</span>
            <input type="hidden" name='score'
              value="<?php echo getData('Paycard',$paycard_id,'paycard_score');?>" />
            <?php echo getData('Paycard',$paycard_id,'paycard_score');?>积分卡
            </p>
          <p class="clearfix">
            <span class="fl">金额</span>
            
              <?php echo getData('Paycard',$paycard_id,'paycard_money');?>RMB
            
          </p>
          <input class="button" type="submit" value="确认购买" />
      </form>
    </div>
    <!-- <div id="centerm">
      <div id="content">
        



        <table class="grid" cellpadding="0" cellspacing="1" align="center" width="600">
          <tbody>
            <tr>
              <td class="title" align="center" valign="middle">购买点卡确认</td>
            </tr>
            <tr>
              <td class="even">
                <form name="frmalipay" method="post" action="__APP__/member/do_pay">
                  <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tbody>
                      <tr>
                        <td width="14%">点卡类型：</td>
                        <td width="86%" valign="middle">
                          <input type="hidden" name='score'
                            value="<?php echo getData('Paycard',$paycard_id,'paycard_score');?>" />
                          <?php echo getData('Paycard',$paycard_id,'paycard_score');?>积分卡
                        </td>
                      </tr>
                      <tr>
                        <td>花费金额：</td>
                        <td valign="middle">
                          <?php echo getData('Paycard',$paycard_id,'paycard_money');?>RMB
                        </td>
                      </tr>
                      <tr>
                        <td><input type="submit" value="确认购买" /></td>
                        <td valign="middle"></td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </td>
            </tr>
            <tr>
              <td></td>
            </tr>


          </tbody>
        </table>
        <br><br>
      </div>
    </div> -->

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