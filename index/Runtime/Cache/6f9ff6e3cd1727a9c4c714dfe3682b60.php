<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo (SITE_NAME); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
<link href="style/footlogin.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
<script src="__JS__/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="__JS__/jquery.tools.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	 $(".recommend-tabTit").tabs(".recommend-tabItem",{event:'mouseover'});
	 $("div.slidetabs").tabs("ul.book_rmd_slide > li", {
		effect: 'fade',
		event: 'mouseover',
		fadeOutSpeed: "slow",
		//rotate: true
	}).slideshow({autoplay:true,interval:5000,fade:1});
});
</script>
</head>
<body>
<!---header--->
<div  id="top">
	<div class="wrap">
		<p class="top-welcome">您好，欢迎来访！</p>
		<div class="login-content"><?php echo showbar();?></div>
	</div>
</div>

<div id="head" class="clearfix">
	
	<h1><a href="__ROOT__"><img name="logo" src="__ROOT__/<?php echo (SITE_LOGO); ?>" width="" height="52" alt="" /></a></h1>

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


<div class="wrap">

	<div class="clearfix mb20">
			<div class="cover-recommend ">
				<div class="recommend_pic"></div>
				<ul class="book_rmd_slide">
					<?php if(is_array($bbook)): $i = 0; $__LIST__ = array_slice($bbook,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">
								<img src="<?php echo ($vo["book_cover"]); ?>" /></a>
							<h3>
								<a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a>
							</h3>
							<p class="author"><?php echo ($vo["writer"]); ?></p>
							<p style="height:48px; line-height:24px; color:#888;overflow: hidden;"><?php echo (htmlspecialchars_decode($vo["book_info"])); ?></p>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					
				</ul>
				<div class="slidetabs clearfix">
					<?php if(is_array($bbook)): $i = 0; $__LIST__ = array_slice($bbook,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>">
							<img src="<?php echo ($vo["book_cover"]); ?>" />
						</a><?php endforeach; endif; else: echo "" ;endif; ?>
					
					<!-- <a><img src="__IMG__/shancun.jpg" /></a>
					<a><img src="__IMG__/shancun.jpg" /></a>
					<a><img src="__IMG__/shengnv.jpg" /></a>
					<a><img src="__IMG__/nocover.jpg" /></a> -->
				</div>
			</div>
			<div class="recommend-module">
				<h2 class="recommend-tabTit">
					<a href="javascript:void(0)">强力推荐</a>
					<a href="javascript:void(0)">最新完本</a>
				</h2>
				<ul class="recommend-tabItem">
					<?php if(is_array($abook)): $i = 0; $__LIST__ = array_slice($abook,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="pic_text">
							<a class="book-cover" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self">
								<img src="<?php echo ($vo["book_cover"]); ?>" />
							</a>
							<div class="book-info">
								<h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self"><?php echo ($vo["book_name"]); ?></a></h3>
								<p style="color:#999;"><?php echo (substr($vo["book_info"],0,96)); ?></p>
							</div>
						</li><?php endif; ?>
					<li class="book-list"><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul class="recommend-tabItem">
					<?php if(is_array($endbook)): $i = 0; $__LIST__ = array_slice($endbook,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="pic_text">
							<a class="book-cover" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self">
								<img src="<?php echo ($vo["book_cover"]); ?>" /></a>
								<div class="book-info">
									<h3>
										<a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self"><?php echo ($vo["book_name"]); ?></a>
									</h3>
									
									<p><?php echo (htmlspecialchars_decode($vo["book_info"])); ?></p>
								</div>
							</li><?php endif; ?>
					<li class="book-list"><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
	</div>
    
	<div class="clearfix mb20">
		<div class="new-arrival common-left">
			<h2 class="common-headline"><span>最新上架</span></h2>
			<ul class="new-books">
				<?php if(is_array($newbook)): $i = 0; $__LIST__ = array_slice($newbook,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a class="newBook-name" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="editor-recommend">
			<h2 class="common-headline"><span>编辑推荐</span></h2>
			<ul class="clearfix editor-recomList">
				<?php if(is_array($newbook)): $i = 0; $__LIST__ = array_slice($newbook,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="editor-recomItem clearfix">
								<div class="editor-bookCover">
									<a class="book-img" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">
										<img src="<?php echo ($vo["book_cover"]); ?>" />
									</a>
									
									<div class="book-det">
										<h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></h3>
										<p class="author">作者：<?php echo ($vo["writer"]); ?></p>
										<p style="height:72px; line-height: 24px; color:#999"><?php echo (htmlspecialchars_decode($vo["book_info"])); ?></p>
									</div>
								</div>
							</li>
						<?php else: ?>
						<li  class="similar-book">
							<a href="">
								<p style="float:left;width:240px;">
									<?php echo ($vo["book_name"]); ?>
								</p>
								<span style="float:right;padding-right:20px; color:#666;">
									<?php echo ($vo["writer"]); ?>
								</span>
							</a>
							
						</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul class="clearfix editor-recomList">
				<?php if(is_array($newbook)): $i = 0; $__LIST__ = array_slice($newbook,5,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="editor-recomItem clearfix">
								<div class="editor-bookCover">
									<a class="book-img" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">
										<img src="<?php echo ($vo["book_cover"]); ?>" />
									</a>
									
									<div class="book-det">
										<h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></h3>
										<p class="author">作者：<?php echo ($vo["writer"]); ?></p>
										<p style="height:72px; line-height: 24px; color:#999"><?php echo (htmlspecialchars_decode($vo["book_info"])); ?></p>
									</div>
								</div>
							</li>
						
						<?php else: ?>
						<li  class="similar-book">
							<a href="">
								<p style="float:left;width:240px;">
									<?php echo ($vo["book_name"]); ?>
								</p>
								<span style="float:right;padding-right:20px; color:#666;">
									<?php echo ($vo["writer"]); ?>
								</span>
							</a>
						</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		
	</div>

	<div class="boutique-books">
		<h2 class="common-headline"><span>精品推荐</span></h2>
		<ul class="boutique-item">
			<?php if(is_array($jingpin)): $i = 0; $__LIST__ = array_slice($jingpin,1,12,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><img src="<?php echo ($vo["book_cover"]); ?>" /></a><h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">《<?php echo ($vo["book_name"]); ?>》</a></h3></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

	<!-- start -->
	<div class="clearfix mb20">
		<div class="common-left click-list ">
			<h2 class="common-headline"><span>点击榜</span></h2>
			<ul>
				<?php if(is_array($hots)): $i = 0; $__LIST__ = array_slice($hots,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($i); ?></span><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="common-center recent-update">
			<h2 class="common-headline"><span>最近更新</span></h2>
			<ul>
				<?php if(is_array($newUpdate)): $i = 0; $__LIST__ = array_slice($newUpdate,1,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						
						<a class="update-cat" href="/cwjsort1/0/1.htm">[<?php echo ($vo["cat_sortname"]); ?>]</a>
						<a class="update-name" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">《<?php echo ($vo["book_name"]); ?>》</a>
						<span class="update-user"><?php echo ($vo["user_name"]); ?></span>
						<!-- <em><a href="/html/124/124918/index.html" target="_blank"><?php echo ($vo["chapter_title"]); ?></a></em> -->
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="common-right hot-listCon">
			<h2 class="common-headline"><span>热评榜</span></h2>
			<ul>
				<?php if(is_array($jingpin)): $i = 0; $__LIST__ = array_slice($jingpin,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($i); ?></span><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				
			</ul>
		</div>
	</div>
	<!-- end -->

	
	<!--友情链接-->
	<div class="friend-link mb20">
		<h2 class="common-headline"><span>友情链接</span></h2>
		<ul>
			<li>
				<a href="">百度</a>
			</li>
			<li><a href="">网易</a></li>
		</ul>	
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


</body>
</html>