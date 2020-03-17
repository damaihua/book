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
	<!--[if IE 6]>
	<script type="text/javascript" src="/scripts/DD_belatedPNG.js" ></script>
	<script type="text/javascript">
		DD_belatedPNG.fix(' .recommend_pic,.editor_pic,.title_pic,,#phead h1,#phead h1 ');
	</script>
	<![endif]-->
	<script src="__JS__/jquery-1.8.3.min.js" type="text/javascript"></script>
</head>
<body>
<!---头部部分--->


<div  id="top">
	<div>
		<span><?php echo showbar();?></span>
		<!-- <a  href="book/index.php?charset=gbk">简体</a>|
		<a  href="http://www.cuiweiju.com/index.php?charset=big5">繁体</a>| -->
		<!-- <a  href="javascript:window.external.addFavorite('http://www.cuiweiju.com','翠微居小说网');">加入收藏</a>|
		<a href="javascript:;" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.lamp99.com');">设为首页</a> -->
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


<!--------------------------------------------内容部分---------------------------------------------->

<div class="main">

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
	<div id="centerm">
		<div id="content">
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
			
			<form name="frmnewmessage" id="frmnewmessage" action="__URL__/dowrite" method="post" onsubmit="return frmnewmessage_validate();">
				<table width="580" class="grid" cellspacing="1" align="center">
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