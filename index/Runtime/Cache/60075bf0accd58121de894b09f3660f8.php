<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>VIP专区</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
<script type="text/javascript" src="__JS__/jquery.tools.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	 $("h2.tabs01").tabs(".tab_cnt1",{event:'mouseover'});
	 $("div.tabs02").tabs(".tab_cnt2",{event:'mouseover'});
	 $("div.slidetabs").tabs("ul.book_rmd_slide > li", {
		effect: 'fade',
		event: 'mouseover',
		fadeOutSpeed: "slow",
		rotate: true
	}).slideshow({autoplay:true,interval:5000,fade:1});
});

</script>
</head>
<body>
<!---头部部分--->
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
    <div class="clearfix wrap mb20">
        <div class="recommend-banner">
            <h2 class="common-headline"><span>最新VIP小说</span></h2>
            <ul>
                <?php if(is_array($newfree)): $i = 0; $__LIST__ = array_slice($newfree,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><img src="__ROOT__/<?php echo ($vo["book_cover"]); ?>" /></a>
                        <h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">《<?php echo ($vo["book_name"]); ?>》</a></h3>
                        <p><?php echo (substr($vo["book_info"],0,66)); ?></p></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="common-right most-popular">
            <h2 class="common-headline"><span>VIP小说点击榜</span></h2>
            <ul>
                <?php if(is_array($hits)): $i = 0; $__LIST__ = $hits;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <!-- start -->
	<div class="clearfix mb20">
        <div class="new-arrival common-left">
			<h2 class="common-headline"><span>VIP小说随机推荐</span></h2>
			<ul class="new-books">
                <?php if(is_array($rand)): $i = 0; $__LIST__ = $rand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a class="newBook-name" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
        </div>
		<div class="common-center recent-update">
			<h2 class="common-headline"><span>最近更新</span></h2>
			<ul>
                <?php if(is_array($newfree)): $i = 0; $__LIST__ = array_slice($newfree,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a class="update-cat" href="/cwjsort1/0/1.htm">[<?php echo ($vo["cat_sortname"]); ?>]</a>
                        <a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">《<?php echo ($vo["book_name"]); ?>》</a>
                        <span class="update-time"><?php echo (date("Y_m-d ",$vo["update_time"])); ?> </span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
        </div>
        <div class="new-arrival common-right">
			<h2 class="common-headline"><span>VIP小说字数榜</span></h2>
			<ul class="new-books">
                <?php if(is_array($size)): $i = 0; $__LIST__ = $size;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a class="newBook-name" href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
        </div>
	</div>
	<!-- end -->
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