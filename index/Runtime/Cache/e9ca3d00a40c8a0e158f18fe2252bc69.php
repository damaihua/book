<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo (SITE_NAME); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo (SITE_KEYWORDS); ?>"
<meta name="description" content="<?php echo (SITE_DESCRIPT); ?>" />

<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
<link href="style/footlogin.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
<script src="__JS__/jquery-1.8.3.min.js" type="text/javascript"></script>

<!--[if IE 6]>
<script type="text/javascript" src="__JS__/dd_belatedpng.js" ></script>
<script type="text/javascript">
	DD_belatedPNG.fix(' .recommend_pic,.editor_pic,.title_pic,,#phead h1,#phead h1 ');
</script>
<![endif]-->

</head>
<body>

<!---头部部分--->


<div  id="ptop">
	<div>
		<span><?php echo showbar();?></span><a  href="book/index.php?charset=gbk">简体</a>|<a  href="http://www.cuiweiju.com/index.php?charset=big5">繁体</a>|<a  href="javascript:window.external.addFavorite('http://www.cuiweiju.com','翠微居小说网');">加入收藏</a>|<a href="javascript:;" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.lamp99.com');">设为首页</a>
	</div>
</div>

<div id="phead" class="clearfix">
	<h1><a href="__ROOT__"><img name="logo" src="__ROOT__/<?php echo (SITE_LOGO); ?>" width="222" height="53" alt="" /></a></h1>
	<?php echo getAD(121,465,55);?>
    <ul><li><a href="#" target="_blank">新手必读手册</a></li>
        <li><a href="#" target="_blank"><font color=red>免费领取翠微币活动</font></a></li>
        <li><a href="#" target="_blank">举报低俗信息有奖</a></li>
    </ul>
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
			<form name="articlesearch" method="post" action="/modules/article/search.php" target="_blank">
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





<div class="main"><script type="text/javascript" src="__JS__/jquery.tools.min.js"></script>
<script type="text/javascript">
//<![CDATA[
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
//]]>
</script>
<!--[if IE 6]>
<script type="text/javascript" src="__JS__/dd_belatedpng.js" ></script>
<script type="text/javascript">
	DD_belatedPNG.fix(' .recommend_pic,.editor_pic,.title_pic ');
</script>
<![endif]-->
<!--------------------------------------------内容部分---------------------------------------------->
<div id="pbody">
<!--行1-->
	<div class="row clearfix">
    	<div class="column">
        	<h2 class="tabs01"><a>强力推荐</a><a>最新完本</a></h2>
            <ul class="tab_cnt1">
            	
<?php if(is_array($abook)): $i = 0; $__LIST__ = $abook;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="pic_text"><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self"><img src="<?php echo ($vo["book_cover"]); ?>" /></a><h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self"><?php echo ($vo["book_name"]); ?></a></h3><p><?php echo (substr($vo["book_info"],0,96)); ?></p></li><?php endif; ?>
<li><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            <ul class="tab_cnt1">
            	

<?php if(is_array($endbook)): $i = 0; $__LIST__ = $endbook;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="pic_text"><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self"><img src="<?php echo ($vo["book_cover"]); ?>" /></a><h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_self"><?php echo ($vo["book_name"]); ?></a></h3><p><?php echo (substr($vo["book_info"],0,96)); ?></p></li><?php endif; ?>
<li><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>


            </ul>
        </div>
		<div class="fr">
        <div class="column_recommend">
        				<div class="recommend_pic"></div>

        	<ul class="book_rmd_slide">

				

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

			

			<a><img src="__IMG__/shengnv.jpg" /></a>

			

			<a><img src="__IMG__/nocover.jpg" /></a>

			

			</div>
        </div>
        <div class="column" style="float:right;">
        	<h2><span>公告板</span></h2>
           
            <ul class="tab_cnt1 gongao">


<?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1 ): ?><li class="pic_text">

<h3><a href="#"><?php echo ($vo["title"]); ?></a></h3>

</li>
<?php else: ?>
<li>·<a href="#"><?php echo ($vo["title"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
              

            </ul>
        </div>
		<div class="cb"></div>
        <div class="step clear">
            	<dl>
                	<dt>读者指引</dt>
                    <dd><a href="__APP__/member/reg">注册</a><span>-></span><a href="__APP__/booksear/index">看书</a><span> -> </span><a href="__APP__/member/pay">充值</a><span> -> </span><a href="__APP__/member/order">订阅</a></dd>
                </dl>
                <dl class="step_author">
                	<dt>作者指引</dt>
                    <dd><a href="__APP__/member/applyauthor">申请作者</a><span> -> </span><a href="__APP__/member/applyauthor">发表作品</a><span> -> </span><a href="__APP__/member/applyauthor">获得稿酬</a></dd>
                </dl>
        </div>
		</div>
    </div>
    <div class="ads01">



</div>
<!--行2-->
	<div class="row clearfix">
    	<div class="column_leftwrap">
            <div class="column">
                <h2><span>最新上架</span></h2>
          
<ul class="tab_cnt1">
	<?php if(is_array($newbook)): $i = 0; $__LIST__ = $newbook;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><em><a href="#">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	
	
	
</ul>
             </div>
            
         </div>
        <div class="column column_center">
        	<h2><span>编辑推荐</span></h2>
			<ul class="tab_cnt1">
            <?php if(is_array($bianji)): $i = 0; $__LIST__ = array_slice($bianji,1,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list_01 clearfix">
	<div class="pic_text"><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><img src="<?php echo ($vo["book_cover"]); ?>" /></a><h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">《<?php echo ($vo["book_name"]); ?>》</a></h3><p class="author">作者：<?php echo ($vo["user_id"]); ?></p><p><?php echo ($vo["book_info"]); ?></p></div>



	<ul>

	<li><a href="/cwjinfo/126/126564.htm" target="_blank">《桃色花医》</a></li>


	

	<li><a href="/cwjinfo/126/126223.htm" target="_blank">《美人录》</a></li>

	

	

	<li><a href="/cwjinfo/127/127174.htm" target="_blank">《无情风流人生》</a></li>

	

	

	<li><a href="/cwjinfo/127/127002.htm" target="_blank">《神之传人猎艳风流》</a></li>

	

	

	<li><a href="/cwjinfo/126/126052.htm" target="_blank">《剑录：逆路问道》</a></li>

	</ul>

</li><?php endforeach; endif; else: echo "" ;endif; ?>
			
			
			
			</ul>
         </div>
        <div class="column_rightwrap">
        	<div class="column">
                <h2><span>热门标签</span></h2>
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

<script language="javascript">

function tagCloud(tagId) {

	if(document.getElementById(tagId)) {

		var tags = document.getElementById(tagId);

		var tagLinks = tags.getElementsByTagName("a");

		var styles = new Array();

		styles[0] = new Array("#96c2f1","#9bdf70","#ffcc00","#adcd3c","#f8b3d0","#cacaff","#a5b6c8","#04477c","#712704","#1291a9","#ff8c05","#4c4c4c","#036803","#ff6600","#ff1a00","#356aa0","#006e2e","#4096ee"); 

		styles[1] = new Array("12px","14px","16px","18px","20px","22px","24px");

		styles[2] = new Array("400","500","600","700");

		for(var i=0; i<tagLinks.length; i++){

			tagLinks[i].style.color = styles[0][Math.floor(styles[0].length * Math.random())];

			tagLinks[i].style.fontSize = styles[1][Math.floor(styles[1].length * Math.random())];

			tagLinks[i].style.fontWeight = styles[2][Math.floor(styles[2].length * Math.random())];

		}

	}

}

tagCloud("tagcloud");

</script>
             </div>
             
             <div class="contact_qq">
             	<p>网站客服QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1363162505&site=qq&menu=yes"><img border="0" src="__IMG__/pa.gif" alt="点击这里给我发消息" title="点击这里给我发消息"></a></p>

<p>广告联系QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1363162505&site=qq&menu=yes"><img border="0" src="__IMG__/pa.gif" alt="点击这里给我发消息" title="点击这里给我发消息"></a></p>

<p>商务联系QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1363162505&site=qq&menu=yes"><img border="0" src="__IMG__/pa.gif" alt="点击这里给我发消息" title="点击这里给我发消息"></a></p>

<p>客服电话：<strong>18301331513</strong></p>
             </div>
             
        </div>  
    </div>
<!--行3-->
    
<!--行4-->
	<div class="row row_bg clearfix">
    	<div class="title_pic">精品推荐</div>
        <ul class="list_02">

<?php if(is_array($jingpin)): $i = 0; $__LIST__ = array_slice($jingpin,1,12,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><img src="<?php echo ($vo["book_cover"]); ?>" /></a><h3><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">《<?php echo ($vo["book_name"]); ?>》</a></h3></li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
    </div>
<!--行5-->
	<div class="row clearfix">
    	<div class="column_leftwrap">
            <div class="column" style="height:300px;">
                <h2><span class="rank">点击榜</span></h2>
                
                <ul class="tab_cnt2">


<?php if(is_array($hots)): $i = 0; $__LIST__ = array_slice($hots,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
				
				
             </div>
            
            
         </div>
        <div class="column column_update" >
        	<h2><span class="update">最近更新</span></h2>
            
            <ul class="tab_cnt1">


<?php if(is_array($newUpdate)): $i = 0; $__LIST__ = array_slice($newUpdate,1,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($vo["user_name"]); ?></span><em><a href="/cwjsort1/0/1.htm">[<?php echo ($vo["cat_sortname"]); ?>]</a></em><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank">《<?php echo ($vo["book_name"]); ?>》</a><em><a href="/html/124/124918/index.html" target="_blank"><?php echo ($vo["chapter_title"]); ?></a></em></li><?php endforeach; endif; else: echo "" ;endif; ?>


</ul>
			
        </div>
        <div class="column_rightwrap">
        	<div class="column" style="height:300px;">
                <h2><span>热评榜</span></h2>
                <ul class="tab_cnt2">


<?php if(is_array($jingpin)): $i = 0; $__LIST__ = array_slice($jingpin,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



</ul>
            </div>
            
            
         </div>
    </div>
<!--行6-->
	<div class="row clearfix">
    	<div class="column row_bg comments " style="width:717px;">
            <div class="title_pic ie6_jr">作品评论展示</div>
			<a href="#" class="more">更多&gt;&gt;</a>

<ul class="list_03 clear">

 <li class="li_tt"><span class="pl01">分类</span><span class="pl02">作品名称</span><span class="pl03">评论内容</span><span class="pl04">发表人</span></li>


<?php if(is_array($comment)): $i = 0; $__LIST__ = array_slice($comment,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="li_tt"><span class="pl01"><a href="/cwjsort2/0/1.htm">[都市]</a></span><span class="pl02"><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>" target="_blank"><?php echo ($vo["book_name"]); ?></a></span><span class="pl03"><a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>#comment" target="_blank"><?php echo ($vo["title"]); ?></a></span><span class="pl04"><?php echo ($vo["user_name"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
        </div>
        <div class="column">
                <h2><span>会员积分排行榜</span></h2>
                <!--<a href="#" class="more">更多&gt;&gt;</a>-->
                <ul class="list_04">

<?php if(is_array($user_info)): $i = 0; $__LIST__ = array_slice($user_info,1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/userpage.php?uid=2866417" target="_blank"><img src="__ROOT__/<?php echo ($vo["user_avatar"]); ?>" /></a><h3><?php echo ($vo["user_nicename"]); ?></h3><p>注册时间：</p><p class="time_color">积分：<?php echo ($vo["user_score"]); ?></p></li><?php endforeach; endif; else: echo "" ;endif; ?>


	




</ul>
             </div>
    </div>
<!--友情链接-->
	<div class="row clearfix">
        <div class="column links">
            <h2><span>友情链接</span></h2>
            <ul>
<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
         </div>
     </div>
</div></div>



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