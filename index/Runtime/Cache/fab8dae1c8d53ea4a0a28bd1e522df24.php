<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>
		<?php echo ($book_info[0]['book_name']); ?>|作者：<?php echo ($book_info[0]['user_name']); ?>|更新时间：
				<?php echo (date("Y-m-d ",$book_info[0]['update_time'])); ?>-翠微居小说网</title>
<meta http-equiv=" Content-Type" content="text/html; charset=gbk" />

				<meta name="copyright" content="" />
				<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
				<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
				<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
				<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
				<script type="text/javascript" src="__JS__/indextop.js"></script>
				<script type="text/javascript">

				</script>
</head>

<body style="background-color:#f5faf3;">

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


	
	<div class="wrap">
		<p class="position">您当前所在的位置：<a href="__APP__/index/index">首页</a>&gt;<a	href="__APP__/bookInfo/index/book_id/<?php echo ($book_info[0]['book_id']); ?>">
				<?php echo ($book_info[0]['book_name']); ?>
			</a>
			<div class="book_catalog">
				<div class="c_head">
					<h2>
						<?php echo ($book_info[0]['book_name']); ?>
					</h2>
					<p>作者：<a href="">
							<?php echo ($book_info[0]['user_name']); ?>
						</a>
						更新时间：<strong>
							<?php echo (date("Y-m-d",$book_info[0]['update_time'])); ?>
						</strong></p>
				
				</div>
				<div class="c_body">

					<!--小说的免费章节start-->
					<ul class="clearfix">
						<?php if(is_array($chapters)): foreach($chapters as $key=>$vo): ?><li>
								<a href="__URL__/read/chapter_id/<?php echo ($vo["chapter_id"]); ?>" title="<?php echo (date("
									Y-m-d H:i",$vo["update_time"])); ?>发表"><?php echo ($vo["chapter_title"]); ?></a>
							</li><?php endforeach; endif; ?>
					</ul>
					<!--小说的免费章节end-->

					<!--小说的收费章节start-->
					<form action="__URL__/orders" method="post" name="frmbuy">
						<h4>VIP章节目录
							<span>
								<!-- 【 -->
								<!-- <a href="" target="_blank">查看VIP信息</a> | -->
								<!-- <a href="" target="_blank">帐户充值</a> |
								<a href="">
									<font color=red>免费获取翠微币</font>
								</a>】 -->
							</span>&nbsp;
							<!-- <input type="button" name="btnbuy1" value="选择全部收费章节" onclick="selectall(this.form)" />
							&nbsp;&nbsp;
							<input type="button" name="btnbuy2" value="取消全部选择" onclick="cancelall(this.form)" />
							&nbsp;&nbsp;
							<input type="submit" name="btnbuy3" value="订阅选中章节" />
							<input name="book_id" type="hidden" value="<?php echo ($book_info[0]['book_id']); ?>" />
							<input name="user_id" type="hidden" value="<?php echo ($book_info[0]['user_id']); ?>" />
							<input name="id" type="hidden" /> -->
						</h4>

						<ul class="clearfix">
							<?php if(is_array($charge)): foreach($charge as $key=>$vo): ?><li>
									<!-- <input type="checkbox" id="checkid[]" name="chapter_id[]"
										value="<?php echo ($vo["chapter_id"]); ?>"> -->
									<!-- <img align="absmiddle" alt="vip" src="__IMG__/icon_vip.gif"> -->
									<span class="chapter-vip">VIP</span>
									<a href="__URL__/read/chapter_id/<?php echo ($vo["chapter_id"]); ?>" title="<?php echo (date("
										Y-m-d H:i",$vo["update_time"])); ?>发表，价格：<?php echo ($vo["much"]); ?>"><?php echo ($vo["chapter_title"]); ?></a>
								</li><?php endforeach; endif; ?>
						</ul>
					</form>
					<!--小说的收费章节end-->
				</div>
			</div>
	</div>
	
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