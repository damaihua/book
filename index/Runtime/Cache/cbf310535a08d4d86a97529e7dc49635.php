<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>排行榜</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
</head>
<body>
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


<script type="text/javascript" src="__JS__/jquery.tools.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("div.tabs02").tabs(".tab_cnt2",{event:'mouseover'});

});
</script>

<div class="clearfix wrap mb20">
    <div class=" common-list">
        <h2 class="common-headline"><span>点击榜</span></h2>
        <ul>
            <?php if(is_array($hits)): $i = 0; $__LIST__ = array_slice($hits,1,20,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($i); ?></span><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class=" common-list">
        <h2 class="common-headline"><span>章节榜</span></h2>
        <ul>
            <?php if(is_array($chapters)): $i = 0; $__LIST__ = array_slice($chapters,1,16,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($i); ?></span><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class=" common-list">
        <h2 class="common-headline"><span>推荐榜</span></h2>
        <ul>
            <?php if(is_array($recommend)): $i = 0; $__LIST__ = array_slice($recommend,1,18,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($i); ?></span><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="common-left click-list common-list">
        <h2 class="common-headline"><span>字数榜</span></h2>
        <ul>
            <?php if(is_array($size)): $i = 0; $__LIST__ = array_slice($size,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($i); ?></span><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

<div class="cb"></div>
<div id="footer">
	<div class="foot_nav">
    	
        <?php echo showFootermenu();?>
    </div>
    <p>版权仅自己所有</p>
   
    
</div>


</body>
</html>