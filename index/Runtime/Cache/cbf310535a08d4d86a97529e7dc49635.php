<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>排行榜——听雨轩在线书城</title>
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


</head>
<body>
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



<!--------------------------------------------内容部分---------------------------------------------->

<script type="text/javascript" src="__JS__/jquery.tools.min.js"></script>

<script type="text/javascript">

//<![CDATA[

$(document).ready(function(){

$("div.tabs02").tabs(".tab_cnt2",{event:'mouseover'});

});

//]]>

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

<!-- <div id="body">
      <div class="row rank clearfix">
            <div class="column">

                <h2><span class="rank">点击榜</span></h2>

                

				<ul class="tab_cnt2">


<?php if(is_array($hits)): $i = 0; $__LIST__ = array_slice($hits,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>


</ul>




             </div>

            <div class="column">

                <h2><span class="rank">章节榜</span></h2>

                

                <ul class="tab_cnt2">



<?php if(is_array($chapters)): $i = 0; $__LIST__ = array_slice($chapters,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



</ul>



				



				

             </div>

            <div class="column">

                <h2><span class="rank">推荐榜</span></h2>

                

                



				



				<ul class="tab_cnt2">
<?php if(is_array($recommend)): $i = 0; $__LIST__ = array_slice($recommend,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
             </div>

            <div class="column" style=" margin-right:0;">

                <h2><span class="rank">字数榜</span></h2>


				<ul class="tab_cnt2">

<?php if(is_array($size)): $i = 0; $__LIST__ = array_slice($size,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>

             </div>


    </div>

</div> -->



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