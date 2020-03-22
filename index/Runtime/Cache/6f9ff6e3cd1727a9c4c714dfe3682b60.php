<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo (SITE_NAME); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo (SITE_KEYWORDS); ?>">
<meta name="description" content="<?php echo (SITE_DESCRIPT); ?>" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
<link href="style/footlogin.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
<script src="__JS__/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="__JS__/jquery.tools.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
	// $("h2.tabs01").tabs(".tab_cnt1",{event:'mouseover'});
	 $(".recommend-tabTit").tabs(".recommend-tabItem",{event:'mouseover'});
	//  $("div.tabs02").tabs(".tab_cnt2",{event:'mouseover'});
	 $("div.slidetabs").tabs("ul.book_rmd_slide > li", {
		effect: 'fade',
		event: 'mouseover',
		fadeOutSpeed: "slow",
		rotate: true
	}).slideshow({autoplay:true,interval:5000,fade:1});


	

});
//]]>
</script>
</head>
<body>
<!---header--->
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
<!--行1-->
	<div class="clearfix mb20">
			<div class="cover-recommend ">
				<div class="recommend_pic"></div>
				<ul class="book_rmd_slide">
					<li><a href="/cwjinfo/127/127180.htm" target="_blank"><img src="__IMG__/shancun.jpg" /></a>

						<h3><a href="/cwjinfo/127/127180.htm" target="_blank">行尸走肉之猎艳无限</a></h3>

						<p class="author">作者：童鞋真好</p>

						<p>　　无尽杀戮下，张荣成为了末世的强者。他找寻着自己在末世中失散的母亲和姐姐还有嫂子们，他也组建着属于自己的王国和后宫。

			　　一路探寻，一..</p>

					</li>
					<li><a href="/cwjinfo/127/127180.htm" target="_blank"><img src="__IMG__/shancun.jpg" /></a>

						<h3><a href="/cwjinfo/127/127180.htm" target="_blank">行尸走肉之猎艳无限</a></h3>

						<p class="author">作者：童鞋真好</p>

						<p>　　无尽杀戮下，张荣成为了末世的强者。他找寻着自己在末世中失散的母亲和姐姐还有嫂子们，他也组建着属于自己的王国和后宫。

			　　一路探寻，一..</p>

					</li>
					<li><a href="/cwjinfo/116/116864.htm" target="_blank"><img src="__IMG__/shengnv.jpg" /></a>

						<h3>奇门家族</h3>

						<p class="author">作者：<a href="/userpage.php?uid=2038022" target="_blank">沛泷</a></p>

						<p>这是一个属于术士的世界，在这个世界里面，没有狗血的桥段，也绝对没有YY，也没有后宫之说，有的只有亲情，友情，和纯粹爱情。

			领略真正的人类与尸鬼之..</p>

					</li>
					<li><a href="/cwjinfo/127/127054.htm" target="_blank"><img src="__IMG__/nocover.jpg" /></a>

						<h3><a href="/cwjinfo/127/127054.htm" target="_blank">亡灵剑圣</a></h3>

						<p class="author">作者：霸刀公爵</p>

						<p>这是一个充满法力的世界，天鹰剑，真空烈焰刀，盘龙长枪，谁与争锋。

			尽情阅读小刀第一部作品《亡灵剑圣》</p>

					</li>
				</ul>
				<div class="slidetabs clearfix">
					<a><img src="__IMG__/shancun.jpg" /></a>
					<a><img src="__IMG__/shancun.jpg" /></a>
					<a><img src="__IMG__/shengnv.jpg" /></a>
					<a><img src="__IMG__/nocover.jpg" /></a>
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
								<p><?php echo (substr($vo["book_info"],0,96)); ?></p>
							</div>
						</li><?php endif; ?>
					<li class="book-list"><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul class="recommend-tabItem">
					<?php if(is_array($endbook)): $i = 0; $__LIST__ = $endbook;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="pic_text">
							<a class="book-cover" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self">
								<img src="<?php echo ($vo["book_cover"]); ?>" /></a>
								<div class="book-info">
									<h3>
										<a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self"><?php echo ($vo["book_name"]); ?></a>
									</h3>
									<p><?php echo (substr($vo["book_info"],0,96)); ?></p>
								</div>
							</li><?php endif; ?>
					<li class="book-list"><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
	</div>
    
	<!--行2-->
	<div class="clearfix mb20">
		<div class="new-arrival common-left">
			<h2 class="common-headline"><span>最新上架</span></h2>
			<ul class="new-books">
				<?php if(is_array($newbook)): $i = 0; $__LIST__ = array_slice($newbook,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a class="newBook-name" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="editor-recommend">
			<h2 class="common-headline"><span>编辑推荐</span></h2>
			<ul class="editor-recomList">
				<?php if(is_array($bianji)): $i = 0; $__LIST__ = array_slice($bianji,1,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="editor-recomItem clearfix">
						<div class="editor-bookCover">
							<a class="book-img" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">
								<img src="<?php echo ($vo["book_cover"]); ?>" />
							</a>
							<div class="book-det">
								<h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">《<?php echo ($vo["book_name"]); ?>》</a></h3>
								<p class="author">作者：<?php echo ($vo["user_id"]); ?></p><p><?php echo ($vo["book_info"]); ?></p>
							</div>
						</div>
						<ul class="similar-book">
							<li><a href="/cwjinfo/126/126564.htm" target="_blank">《桃色花医》</a></li>
							<li><a href="/cwjinfo/126/126223.htm" target="_blank">《美人录》</a></li>
							<li><a href="/cwjinfo/127/127174.htm" target="_blank">《无情风流人生》</a></li>
							<li><a href="/cwjinfo/127/127002.htm" target="_blank">《神之传人猎艳风流》</a></li>
							<li><a href="/cwjinfo/126/126052.htm" target="_blank">《剑录：逆路问道》</a></li>
						</ul>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="hot-tags common-right">
			<h2 class="common-headline"><span>热门标签</span></h2>
			<div class="hot_tag" id="tagcloud">
				<a href="/modules/article/tagarticle.php?tag=%D6%D6%C2%ED" target="_blank">种马</a>
				<a href="/modules/article/tagarticle.php?tag=%BA%F3%B9%AC" target="_blank">后宫</a>
				<a href="/modules/article/tagarticle.php?tag=%D1%DE%C7%E9" target="_blank">艳情</a>
				<a href="/modules/article/tagarticle.php?tag=yy" target="_blank">yy</a>
				<a href="/modules/article/tagarticle.php?tag=%CF%E3%D1%DE" target="_blank">香艳</a>
				<a href="/modules/article/tagarticle.php?tag=%CB%AC%CE%C4" target="_blank">爽文</a>
				<a href="/modules/article/tagarticle.php?tag=%C8%AB%CA%D5" target="_blank">全收</a>
				<a href="/modules/article/tagarticle.php?tag=%B6%BC%CA%D0" target="_blank">都市</a>
				<a href="/modules/article/tagarticle.php?tag=%B4%A9%D4%BD" target="_blank">穿越</a>
				<a href="/modules/article/tagarticle.php?tag=%CB%BF%CD%E0" target="_blank">丝袜</a>
				<a href="/modules/article/tagarticle.php?tag=%EA%D3%C3%C1" target="_blank">暧昧</a>
				<a href="/modules/article/tagarticle.php?tag=%C3%C0%C5%AE" target="_blank">美女</a>
				<a href="/modules/article/tagarticle.php?tag=YD" target="_blank">YD</a>
				<a href="/modules/article/tagarticle.php?tag=%B0%AE%C7%E9" target="_blank">爱情</a>
				<a href="/modules/article/tagarticle.php?tag=%C8%C8%D1%AA" target="_blank">热血</a>
				<a href="/modules/article/tagarticle.php?tag=%B7%E7%C1%F7" target="_blank">风流</a>
			</div>
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


	<div class="row clearfix">
    	<div class="column row_bg comments " style="width:717px;">
            <div class="title_pic ie6_jr">作品评论展示</div>
			<a href="#" class="more">更多&gt;&gt;</a>

				<ul class="list_03 clear">

				<li class="li_tt"><span class="pl01">分类</span><span class="pl02">作品名称</span><span class="pl03">评论内容</span><span class="pl04">发表人</span></li>


				<?php if(is_array($comment)): $i = 0; $__LIST__ = array_slice($comment,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="li_tt"><span class="pl01"><a href="/cwjsort2/0/1.htm">[都市]</a></span><span class="pl02"><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></span><span class="pl03"><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>#comment" target="_blank"><?php echo ($vo["title"]); ?></a></span><span class="pl04"><?php echo ($vo["user_name"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
        </div>
        
			 

    </div>
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
	<!-- <div class="row clearfix">
        <div class="column links">
            <h2><span>友情链接</span></h2>
            <ul>
				<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
         </div>
     </div> -->
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