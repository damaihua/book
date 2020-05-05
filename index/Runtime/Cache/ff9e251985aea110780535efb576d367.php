<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>在线书城</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
<style>
	.book-sort td a.current{color:green;}
</style>
<script src="__JS__/jquery-1.8.3.min.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>

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
	<table  width="100%" class="grid book-sort" cellspacing="1" align="center" style="margin-bottom:5px;">
		<caption>筛选条件</caption>
		<tr valign="middle" align="left">
		<td class="tdl" width="80">
			<strong>作品大类：</strong>
		</td>
		<td class="tdr">
			<a href="__URL__/" class="hottext"><strong>全部</strong></a>
			<?php if(is_array($cat)): foreach($cat as $key=>$vo): ?><a href="__URL__/index/type/cats/val/<?php echo ($vo["cat_id"]); ?>"><?php echo ($vo["cat_name"]); ?></a><?php endforeach; endif; ?>
		</td>
		</tr>
		<tr valign="middle" align="left">
		<td class="tdl"><strong>作品标签：</strong></td>
		<td class="tdr">
			<a href="" class="hottext"><strong>不限</strong></a>
			<?php if(is_array($tags)): foreach($tags as $key=>$vo): ?><a href="__URL__/index/type/tag/val/<?php echo ($vo); ?>"><?php echo ($vo); ?></a><?php endforeach; endif; ?>
		</td>
		</tr>
		<tr valign="middle" align="left">
		<td class="tdl"><strong>写作进度：</strong></td>
		<td class="tdr">
			<a href="" class="hottext"><strong>不限</strong></a>
			<?php if(is_array($pro)): foreach($pro as $key=>$vo): ?><a href="__URL__/index/type/pro/val/<?php echo ($vo["cat_id"]); ?>">
			<?php echo ($vo["cat_name"]); ?>
			</a><?php endforeach; endif; ?>
		</td>
		</tr>

		


	<tr valign="middle" align="left">
	<td class="tdl"><strong>其他选项：</strong></td>
	<td class="tdr">
		<a href="__URL__/" class="hottext"><strong>不限</strong></a>
		<a href="__URL__/index/type/other/val/0">连载中</a>
		<a href="__URL__/index/type/other/val/1">完本</a>
		</td>
	</tr>
	</table>
	<table class="grid" width="100%" align="center">

		<caption>作品列表</caption>
		<thead>
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
		</thead>
		<tbody >
			<?php if(is_array($book)): foreach($book as $key=>$vo): ?><tr>
					<td class="odd even">
						<a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>"><?php echo ($vo["book_name"]); ?></a>
					</td>
					<td class="odd even">
						<a href="__APP__/bookInfo/index/book_id/<?php echo ($vo["book_id"]); ?>">
							<?php switch($vo["book_cat"]): case "1": ?>玄幻仙侠<?php break;?>
								<?php case "2": ?>古风古韵<?php break;?>
								<?php case "3": ?>文学作品<?php break;?>
								<?php case "4": ?>成功励志<?php break;?>
								<?php case "6": ?>历史传奇<?php break;?>
								<?php case "49": ?>人文社科<?php break;?>
								<?php case "50": ?>悬疑探险<?php break; endswitch;?>	
							
							
						</a>
					</td>
					<td class="even">
						<a href="__APP__/chapters/read/chapter_id/<?php echo ($vo['chapter'][0]['chapter_id']); ?>" target="_blank"><?php echo ($vo['chapter'][0]['chapter_title']); ?></a>
					</td>
					<td class="odd even">
						<a href="http://www.cuiweiju.com/modules/article/authorpage.php?id=3136702" target="_blank"><?php echo ($vo["writer"]); ?></a>
					</td>
					<td class="even">
						<?php echo ($vo["tags"]); ?>
					</td>
					<td class="even">
						<?php echo ($vo["book_size"]); ?>
					</td>
					<td class="odd even" align="center">
						<?php echo (date("Y-m-d",$vo["update_time"])); ?>
					</td>
					<td class="even" align="center">
						<?php echo ($vo['status']?"完结":"连载中"); ?>
					</td>
				</tr><?php endforeach; endif; ?>
		</tbody>
		
		
	</table>
	<div class="pages">
		<div class="pagelink" id="pagelink">
			<?php echo ($page); ?>
		</div>
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