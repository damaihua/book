<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ($book_info[0]['book_name']); ?>|<?php echo ($chapter[0]['chapter_title']); ?>|翠微居小说网|更新时间<?php echo (date("Y-m-d H:i",$book_info[0]['update'])); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="copyright" content="Copyright (C) 2002-2013 cuiweiju.com All Rights Reserved 
翠微居-原创小说阅读网 版权所有，严禁任何网站转载 


" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
<script type="text/javascript" src="__JS__/jquery.tools.min.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
<script type="text/javascript">
<!--
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
document.onkeydown=jumpPage;
-->
</script>
</head>
<body style="background-color:#f5faf3;">
<!-- 
<script type="text/javascript" src="__JS__/toplink.js"></script>
<div id="adtop"><script type="text/javascript" src="__JS__/pagetop.js"></script></div>
 -->
<div class="read_position">
    <p class="position">您当前所在的位置：<a href="__APP__/index/index">首页</a>&gt;<a href="__APP__/booksear/index/type/cats/val/<?php echo ($book_info[0]['cat_id']); ?>"><?php echo ($book_info[0]['cat_name']); ?></a>&gt;
	<a href="__APP__/bookInfo/index/book_id/<?php echo ($book_info[0]['book_id']); ?>"><?php echo ($book_info[0]['book_name']); ?></a> 
	</p>
    <div class="book_nav"><a href=""><font color=red>免费获取翠微币</font></a>|<a href="" target="_blank">加入书签</a>|<a href="" target="_blank">推荐本书</a>|<a href="">打开书架</a>|<a href="__APP__/bookInfo/index/book_id/<?php echo ($book_info[0]['book_id']); ?>">返回书页</a>|<a href="__URL__/chaplist/book_id/<?php echo ($book_info[0]['book_id']); ?>">返回书目</a></div>
</div>

<div id="pbody02">
	<div class="book_wrap">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">
              <h1><?php echo ($chapter[0]['chapter_title']); ?></h1>
			  <p class="book_more">书名：<?php echo ($book_info[0]['book_name']); ?>&nbsp;&nbsp;&nbsp;作者： <?php echo ($book_info[0]['user_name']); ?>&nbsp;&nbsp;&nbsp;更新时间：<?php echo (date("Y-m-d H:i",$chapter[0]['update_time'])); ?> &nbsp;&nbsp;&nbsp;字数：<?php echo ($chapter[0]['chapter_size']); ?></p>
              <div class="c_body">
                  <p id="content">
						<?php echo ($chapter[0]['content']); ?>
				  </p>
              </div>
              <p class="book_nav"><a href="" target="_blank">加入书签</a>|<a href="" target="_blank">推荐本书</a>|<a href="">打开书架</a>|<a href="__APP__/bookInfo/index/book_id/<?php echo ($book_info[0]['book_id']); ?>">返回书页</a>|<a href="__URL__/chaplist/book_id/<?php echo ($chapter[0]['book_id']); ?>">返回书目</a></p>
        	  <p class="cz_bar"><span>[ &larr; 快捷键 ]</span><a href="6700307.html">《 上一章</a><a href="__URL__/chaplist/book_id/<?php echo ($chapter[0]['book_id']); ?>">返回目录</a><a href="6700384.html">下一章 》</a><span>[ 快捷键 &rarr; ]</span></p>
            </td>
            <td valign="top" width="27" style="padding-left:30px;"><a href="#" class="panel"></a></td>
            <td valign="top" class="td_right">
            <div class="panel_body clearfix">
            	<div class="panel_bt">
				   
                	<a href="/modules/article/addbookcase.php?bid=128175&cid=6700370" target="_blank">加入书签</a>
                    <a id="a_uservote" href="javascript:;" onclick="Ajax.Tip(event, '/modules/article/uservote.php?id=128175',3000);">我要投票</a>
                    <a  id="a_flower" href="javascript:;" onclick="openDialog('/modules/article/gift.php?type=flower&id=128175&ajax_gets=jieqi_contents', false);">我要投鲜花</a>
                    <a href="/modules/article/reviews.php?aid=128175" target="_blank">我要评论</a>
                </div>
            	<div class="column wrap_mabt">
                <h2><span>分类推荐</span></h2>
				<ul class="tab_cnt1">
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/128/128004.htm" target="_blank">王剑风云</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/127/127525.htm" target="_blank">幻想水月大陆</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/111/111015.htm" target="_blank">神鹰帝国</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/125/125618.htm" target="_blank">无限穿越之后宫</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/128/128006.htm" target="_blank">大乾坤</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/127/127689.htm" target="_blank">小宝异界逍遥游</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/123/123586.htm" target="_blank">红楼之多情公子</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/126/126372.htm" target="_blank">重生隋唐之大爱无疆</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/128/128079.htm" target="_blank">龙腾天下之丝欲</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/127/127424.htm" target="_blank">猎香风流</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/127/127778.htm" target="_blank">老徐异界游</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/126/126669.htm" target="_blank">火影香艳后宫</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/126/126892.htm" target="_blank">魔欲</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/126/126769.htm" target="_blank">斗源风云</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/110/110714.htm" target="_blank">重生犬夜叉</a></li>
	
</ul>
             </div>
             	<div class="column wrap_mabt">
                <h2><span>全站推荐</span></h2>
                <ul class="tab_cnt1">
	
	<li><em><a href="/cwjsort2/0/1.htm">[都市]</a></em><a href="/cwjinfo/128/128228.htm" target="_blank">这个老师有点钱</a></li>
	
	<li><em><a href="/cwjsort2/0/1.htm">[都市]</a></em><a href="/cwjinfo/126/126924.htm" target="_blank">人间色相：越夜越轻狂</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/128/128079.htm" target="_blank">龙腾天下之丝欲</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/128/128154.htm" target="_blank">劫命歌</a></li>
	
	<li><em><a href="/cwjsort3/0/1.htm">[武侠]</a></em><a href="/cwjinfo/128/128186.htm" target="_blank">无限之风流猎艳修仙传</a></li>
	
	<li><em><a href="/cwjsort1/0/1.htm">[玄幻]</a></em><a href="/cwjinfo/128/128183.htm" target="_blank">修魔变身</a></li>
	
	<li><em><a href="/cwjsort2/0/1.htm">[都市]</a></em><a href="/cwjinfo/127/127533.htm" target="_blank">桃色医仙</a></li>
	
	<li><em><a href="/cwjsort5/0/1.htm">[仙侠]</a></em><a href="/cwjinfo/128/128124.htm" target="_blank">平步虚空</a></li>
	
	<li><em><a href="/cwjsort2/0/1.htm">[都市]</a></em><a href="/cwjinfo/128/128099.htm" target="_blank">都市美艳后宫</a></li>
	
	<li><em><a href="/cwjsort2/0/1.htm">[都市]</a></em><a href="/cwjinfo/128/128115.htm" target="_blank">美女明星收藏家</a></li>
	
	<li><em><a href="/cwjsort4/0/1.htm">[言情]</a></em><a href="/cwjinfo/128/128078.htm" target="_blank">再见，我的热血青春</a></li>
	
	<li><em><a href="/cwjsort3/0/1.htm">[武侠]</a></em><a href="/cwjinfo/128/128108.htm" target="_blank">无限猎艳风流</a></li>
	
	<li><em><a href="/cwjsort2/0/1.htm">[都市]</a></em><a href="/cwjinfo/128/128049.htm" target="_blank">闻香都市</a></li>
	
	<li><em><a href="/cwjsort2/0/1.htm">[都市]</a></em><a href="/cwjinfo/128/128089.htm" target="_blank">逆天传说</a></li>
	
	<li><em><a href="/cwjsort4/0/1.htm">[言情]</a></em><a href="/cwjinfo/127/127613.htm" target="_blank">紫色琴</a></li>
	
</ul>
             </div>
            </div></td>
          </tr>
        </table>
    </div>
</div>

<div id="adbottom"><script type="text/javascript" src="__JS__/pagebottom.js"></script></div>

<div id="pfoot">
	<script type="text/javascript" src="__JS__/bottomlink.js"></script>
</div>

</body>
</html>