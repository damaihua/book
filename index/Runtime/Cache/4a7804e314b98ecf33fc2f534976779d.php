<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>会员登录——听雨轩在线书城</title>
<meta charset="utf-8" />
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />

<meta charset='utf-8'/>
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="__JS__/dd_belatedpng.js" ></script>
<script type="text/javascript">
	DD_belatedPNG.fix(' .recommend_pic,.editor_pic,.title_pic,,#phead h1,#phead h1 ');
</script>
<![endif]-->
<script>
	
</script>
</head>
<body>
<!---头部部分--->


<div  id="ptop">
	<div>
		<span><?php echo showbar();?></span>
		<!-- <a  href="book/index.php?charset=gbk">简体</a>|
		<a  href="http://www.cuiweiju.com/index.php?charset=big5">繁体</a>| -->
		<a  href="javascript:window.external.addFavorite('http://www.cuiweiju.com','翠微居小说网');">加入收藏</a>|
		<a href="javascript:;" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.lamp99.com');">设为首页</a>
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

<!---内容部分-->

<div class="main"><div class="logindiv" id="overlay_login">
	<div class="c_head">
    	<h4>会员登录</h4>
    </div>
    <div class=" c_body main_form">                   
        <form name="frmlogin" method="post" action="__URL__/checklogin">
        <div>
       
            <div class="clue"><p>没有账号？立即<a href="__MEMBER__/reg.html">免费注册</a>一个</p></div>
        </div>
        <table cellspacing="0" cellpadding="0">
            <tr>
                <td class="t1">
                <label>登陆账号：</label>
                </td>
                <td>
                <input name="user_name" type="text" class="text" style="width:200px;" value="请在此输入用户名/账号" onFocus="if(this.value=='请在此输入用户名/账号'){this.value='';}" onBlur="if(this.value==''){this.value='请在此输入用户名/账号';}">
                <span class="quick_feeaback"></span>
                </td>
            </tr>
            <tr>
                <td class="t1">
                <label>登陆密码：</label>
                </td>
                <td>
                <input class="text" name="user_pwd" style="width:200px;" type="password">
                <span class="quick_feeaback"></span>
                </td>
            </tr>
			
			<tr>
                <td class="t1">
                <label>验证码：</label>
                </td>
                <td>
                <input type="text" class="text" size="8" maxlength="8" name="verify">&nbsp;<img src="__APP__/Public/verify/" alt="点击更换验证码" style="cursor:pointer;" onclick="this.src='__APP__/Public/verify/?rand='+Math.random();">
                
                </td>
            </tr>
			
            <tr>
                <td></td>
                <td>
                <sup><input class="checkbox" name="usecookie" id="usecookie" value="315360000" type="checkbox" style="margin-top:-0px"></sup><span style="padding-left:5px;">记住密码</span><a style="color:#719E18;padding:0px 0px 0px 50px;vertical-align: middle;" href="http://www.cuiweiju.com/getpass.php">忘记密码？</a>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="action" value="login"></td>
                <td>
                <input name="submit" value="登 录" id="" class="bt_login" type="submit">
                </td>
            </tr>
        </table> 
        </form>
    </div>
</div></div>



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