<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0038)http://www.cuiweiju.com/userdetail.php -->
<html  xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>会员中心—<?php echo (SITE_NAME); ?></title>



<link  rel="stylesheet"  rev="stylesheet"  href="__CSS__/style.css"  type="text/css"  media="all">
<link  rel="stylesheet"  rev="stylesheet"  href="__CSS__/main.css"  type="text/css"  media="all">
<script  language="javascript"  type="text/javascript"  src="__JS__/common.js"></script><style  type="text/css"></style>
<script  language="javascript"  type="text/javascript"  src="__JS__/theme.js"></script>


</head>
<body>

<!---头部部分--->


<div  id="top">
	<div class="wrap">
		<p class="top-welcome">欢迎来在线阅读网！</p>
		<div class="login-content"><?php echo showbar();?></div>
		<!-- <a  href="book/index.php?charset=gbk">简体</a>|
		<a  href="http://www.cuiweiju.com/index.php?charset=big5">繁体</a>| 
		<a  href="javascript:window.external.addFavorite('http://www.cuiweiju.com','翠微居小说网');">加入收藏</a>|
		<a href="javascript:;" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.lamp99.com');">设为首页</a>-->
	</div>
</div>

<div id="phead" class="clearfix">
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


    <div class="type">
   
		 <?php echo showcats();?>
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

<div  class="main">
<!---左侧导航--->
<div  id="left">

<div  class="block">
<div  class="blocktitle"><span>用户设置</span></div>
<div  class="blockcontent"><ul  class="ulnav">
<li><a  href="__APP__/member/index">个人首页</a></li>
<li><a  href="__APP__/member/member_edit">修改资料</a></li>
<li><a  href="__APP__/member/avatar_edit">修改头像</a></li>
<li><a  href="__APP__/member/pwd_edit">修改密码</a></li>

<li><a  href="__APP__/member/loginout">退出登录</a></li>
</ul></div>
</div>

<div  class="block">
<div  class="blocktitle"><span>短消息</span></div>
<div  class="blockcontent"><ul  class="ulnav">
<li><a  href="__APP__/letter/inbox">收件箱</a></li>
<li><a  href="__APP__/letter/outbox">发件箱</a></li>
<li><a  href="__APP__/letter/write">写新消息</a></li>
<li><a  href="__APP__/letter/toadmin">写给管理员</a></li>
</ul></div>
</div>

<div  class="block">
<div  class="blocktitle"><span>工具箱</span></div>
<div  class="blockcontent"><ul  class="ulnav">
<li><a  href="http://www.cuiweiju.com/ptopics.php?uid=self">我的留言</a></li>

<li><a  href="__APP__/member/order">订阅记录</a></li>

<li><a  href="__APP__/member/pay">在线充值</a></li>

<li><a  href="__APP__/member/applyauthor">申请作者</a></li>

</ul></div>
</div>
  
</div>

  <div  id="centerm"><div  id="content">
<div  class="mb_admin_show clearfix">
                    <div  class="tip clear">你有<strong>0</strong>条未读的站内消息，也许是很重要的信息哦，快去[<a  href="__APP__/letter/inbox">查看</a>]吧！</div>
                    <div  class="avator">
                        <span  class="ph"><img  src="__ROOT__/<?php echo ($userinfo["user_avatar"]); ?>"  class="avatar"  alt="头像"></span>
                        <a  href="__APP__/member/avatar_edit">修改头像</a>
                    </div>
                    <div  class="info">
                        <h3><?php echo ($userinfo["user_nicename"]); ?>(<?php echo ($user["user_name"]); ?>)</h3>
                        <ul  class="clearfix">
                        	<li  class="fl"><em>性别：</em><span>
 <?php if($userinfo["user_sex"] == 1): ?>男
<?php elseif($userinfo["user_sex"] == 2): ?>女
<?php else: ?> 保密<?php endif; ?>
                           
</span></li>
                            <li  class="fl"><em>类型：</em><span>
 <?php if($user["user_type"] == 1): ?>普通会员
<?php elseif($user["user_type"] == 2): ?>作者
<?php else: ?>普通会员<?php endif; ?>


</span></li>
                           
                           <li  class="fl"><em>积分:</em><span><?php echo ($userinfo["user_score"]); ?></span></li>
                            <li  class="fl"><em><a href="__APP__/member/pay">立即购买积分</a>?</em></li>
     
							
                          
						  <li><em>Email：</em><span><?php echo ($user["user_email"]); ?></span>  <span  class="hottext">
  &nbsp;&nbsp;<?php if(session('email_status') == 3): ?>已验证
<?php else: ?> 未验证<?php endif; ?>                         
</span>&nbsp;&nbsp; <a  href="__APP__/member/member_edit#email">[修改邮箱]</a> 
<?php if(session('email_status') == 3): else: ?><a  href="__APP__/member/sendcode">[验证邮箱]</a><?php endif; ?>                         



<span  class="hottext">（为了保护你的账户安全,强烈建议验证邮箱!）</span></li>
                           
                        </ul>
                    </div>
                </div>
                <div  class="box3 mb_bkshelf">
                	<div  class="back_wrap"  style=" border-top:1px solid #e7e7e7; float:none;">
                 		 <h2><span  class="titile_bg">阅读历史</span></h2>
                        
                    </div>
                    <div class="c_body clearfix">
						<ul class="bk_list6">

	

<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="clearfix">
		<span class="fun_bt"><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>">立即阅读</a></span>
        <a class="ph" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>"><img src="__ROOT__/<?php echo ($vo["book_cover"]); ?>" /></a>
        <span class="info">
		<a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" class="name"><?php echo ($vo["book_name"]); ?></a><br>作者：admin<br>最新章节：<a href="#">推荐</a><br>更新时间：<?php echo (date("Y-m-d H:i:s",$vo["read_time"])); ?>
		</span>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
                        
                    </div>
                </div>
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