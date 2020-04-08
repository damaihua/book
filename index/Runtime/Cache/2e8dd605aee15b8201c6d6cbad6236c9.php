<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>
		<?php echo ($book_info[0]['book_name']); ?>|<?php echo ($chapter[0]['chapter_title']); ?>|翠微居小说网|更新时间<?php echo (date("Y-m-d
					H:i",$book_info[0]['update'])); ?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
	<meta name="copyright" content="" />
	<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
	<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
	<script type="text/javascript" src="__JS__/jquery.tools.min.js"></script>
	<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
	<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
	<script type="text/javascript">

		var url_preview = "6700307.html";
		var url_next = "6700384.html";
		var url_index = "index.html";
		var article_id = "128175";
		var chapter_id = "6700370";
		function jumpPage() {
			var event = document.all ? window.event : arguments[0];
			if (event.keyCode == 37) document.location = url_preview;
			if (event.keyCode == 39) document.location = url_next;
			if (event.keyCode == 13) document.location = url_index;
		}
		document.onkeydown = jumpPage;

	</script>
</head>

<body style="background-color:#f5faf3;">
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
		<div class="read_position">
			<p class="position">您当前所在的位置：<a href="__APP__/index/index">首页</a>&gt;
				<a href="__APP__/bookInfo/index/book_id/<?php echo ($book_info[0]['book_id']); ?>">
					<?php echo ($book_info[0]['book_name']); ?>
				</a>
			</p>
			<div class="book_nav"><a href="__APP__/bookInfo/index/book_id/<?php echo ($book_info[0]['book_id']); ?>">返回书页</a>|<a
					href="__URL__/chaplist/book_id/<?php echo ($book_info[0]['book_id']); ?>">返回书目</a></div>
		</div>
		<div class="chapter-details">
			<h1>
				<?php echo ($chapter[0]['chapter_title']); ?>
			</h1>
			<p class="book-tags">
				<span>书名：<?php echo ($book_info[0]['book_name']); ?></span>
				<span>作者：<?php echo ($book_info[0]['user_name']); ?></span>
				<span>更新时间：<?php echo (date("Y-m-d H:i",$chapter[0]['update_time'])); ?></span>
				<span>字数：<?php echo ($chapter[0]['chapter_size']); ?></span>
			</p>
			<div class="chapter-section">
				<?php echo ($chapter[0]['content']); ?>
			</div>
			<div class="chapter-bottom">
				<p class="chapter-back">
					<a	href="__APP__/bookInfo/index/book_id/<?php echo ($book_info[0]['book_id']); ?>">返回书页</a>|
					<a href="__URL__/chaplist/book_id/<?php echo ($chapter[0]['book_id']); ?>">返回书目</a>
				</p>
				
				<p class="cz_bar">
				
					<a href="__URL__/read/chapter_id/<?php echo ($chapter[0]['chapter_id']-1); ?>">上一章</a>
					<a href="__URL__/chaplist/book_id/<?php echo ($chapter[0]['book_id']); ?>">返回目录</a>
					<a href="<?php echo ($chapter[0]['chapter_id']+1); ?>">下一章 </a>
				</p>
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