<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>在线搜索——听雨轩在线书城</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="小说;小说阅读网;好看的小说;娱乐;艳遇;情人;后宫;美人;TXT;泡妞;激情小说;成人小说;都市小说;玄幻小说;言情小说;免费小说;H小说;yy小说;乡村;山村;小说下载" />
<meta name="description" content="翠微居小说网致力于打造成为最好看的小说阅读网，提供免费的都市小说、言情小说、玄幻小说、武侠小说、同人小说、仙侠小说、yy小说、激情小说、成人小说、乡村、山村、娱乐、艳遇、后宫、泡妞等的在线阅读，努力营造一个绿色的创作与阅读平台！同时提供免费txt小说下载，每日最快更新，页面简洁，访问速度快！" />
<meta name="author" content="http://www.jieqi.com (jieqi cms)" />
<meta name="copyright" content="Copyright (C) 2002-2013 cuiweiju.com All Rights Reserved 

翠微居-原创小说阅读网 版权所有，严禁任何网站转载 

" />
<meta name="generator" content="jieqi.com" />
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
<style>
	.odd,.even{
		text-align:center;
	}
</style>
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
			<span>
				<select name="" id="">
					<option  name="searchtype" value="articlename" checked="checked">书名</option>
					<option  name="searchtype" value="author" >作者</option>
				</select>
			<input name="searchkey" type="text" class="search_text"> 

			<!-- <input type="radio" class="radio" name="searchtype" value="articlename" checked="checked" />书名 	
			<input type="radio" class="radio" name="searchtype" value="author" />作者 -->
			<input type="submit" class="search_submit" value=" "></span>
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



<table class="grid" width="100%" align="center">

	<caption>关键字的搜索结果</caption>
	<tr align="center">
		<th width="15%">小说名称</th>
		<th width="10%">小说类别</th>
		<th width="25%">最新章节</th>
		<th width="10%">作者</th>
		<th width="15%">标签</th>
		<th width="9%">字数</th>
		<th width="10%">更新</th>
		<th width="6%">状态</th>
	</tr>
	
	<?php if(is_array($book)): foreach($book as $key=>$vo): ?><tr>
			<td class="odd even">
				<a href="__APP__/bookinfo/index/book_id/<?php echo ($vo["book_id"]); ?>"><?php echo ($vo["book_name"]); ?></a>
			</td>
			<td class="odd even">
				<a href="__APP__/bookinfo/index/book_id/<?php echo ($vo["book_id"]); ?>"><?php echo ($vo["cat_name"]); ?></a>
			</td>
			<td class="even">
				<a href="http://www.cuiweiju.com/html/127/127183/index.html" target="_blank"><?php echo ($vo[chapter][0]['chapter_title']); ?></a>
			</td>
			<td class="odd even">
				<a href="http://www.cuiweiju.com/modules/article/authorpage.php?id=3136702" target="_blank"><?php echo ($vo["user_name"]); ?></a>
			</td>
			<td class="even">
				<?php echo ($vo["tags"]); ?>
			</td>
			<td class="even">
				<?php echo ($vo["total"]); ?>
			</td>
			<td class="odd even" align="center">
				<?php echo (date("Y-m-d",$vo["update_time"])); ?>
			</td>
			<td class="even" align="center">
				<?php echo ($vo['status']?"完结":"连载中"); ?>
			</td>
		</tr><?php endforeach; endif; ?>
</table>

<div class="pages">
	<div class="pagelink" id="pagelink">
		<?php echo ($page); ?>
	</div>
</div>
<!--foot底部部分--->

<div class="cb"></div>
<div id="pfoot">
	<div class="foot_nav">
    	
        <?php echo showFootermenu();?>
    </div>
    <p>请所有作者发布作品时务必遵守国家互联网信息管理办法规定，我们拒绝任何色情小说，一经发现，即作删除！<br />本站所收录作品、社区话题、书库评论及本站所做之广告均属其个人行为，与本站立场无关</p>
    <p><?php echo (SITE_COPYRIGHT); ?>&nbsp;&nbsp;<?php echo (SITE_BEIAN); ?></p>
    <div class="authority">
    	<a href="#"><img src="__IMG__/wj.gif" /></a><a href="#"><img src="__IMG__/ppaa.gif" /></a>
    </div>
</div>

</body>

</html>