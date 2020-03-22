<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>收信箱--<?php echo (SITE_NAME); ?>
	</title>
	<meta name="keywords" content="<?php echo (SITE_KEYWORDS); ?>" />
	<meta name="description" content="<?php echo (SITE_DESCRIPT); ?>" />
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


	
		<div class="wrap clearfix mb20">
			<!---左侧导航--->
			

<div class="user-centerLeft">
    <div class="userCenter-sort">
        <h2>用户设置</h2>
        <div class="userCenter-det">
            <a href="__APP__/member/index">个人首页</a>
            <a href="__APP__/member/member_edit">修改资料</a>
            <a href="__APP__/member/avatar_edit">修改头像</a>
            <a href="__APP__/member/pwd_edit">修改密码</a>
        </div>
    </div>
    <div class="userCenter-sort">
        <h2>短消息</h2>
        <div class="userCenter-det">
            <a href="__APP__/letter/inbox">收件箱</a>
            <a href="__APP__/letter/outbox">发件箱</a>
            <a href="__APP__/letter/write">写消息</a>
            <a href="__APP__/letter/toadmin">写给管理员</a>
        </div>
    </div>
    <div class="userCenter-sort">
        <h2>工具箱</h2>
        <div class="userCenter-det">
            <a href="__APP__/member/order">订阅记录</a>
            <a href="__APP__/member/pay">在线充值</a>
            <a href="__APP__/member/applyauthor">申请作者</a>
        </div>
    </div>
</div>
			<div class="user-right">
				
					<form action="" method="post" name="checkform" id="checkform">
						<table class="grid" width="100%" align="center">
							<caption>收件箱</caption>
							<tr>
								<th width="5%">
									<input type="checkbox" id="checkall" name="checkall" value="checkall"
										onclick="javascript: for(var i=0;i<this.form.elements.length;i++){ if(this.form.elements[i].name != 'checkkall') this.form.elements[i].checked = this.form.checkall.checked; }">
								</th>
								<th width="20%">发件人</th>
								<th width="60%">标题</th>
								<th width="15%">日期</th>
							</tr>

							<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
									<td class="odd" align="center">
										<input type="checkbox" id="checkid[]" name="checkid[]" value="1843141">
									</td>
									<td class="even">
										<span class="hottext">
											<?php echo ($vo["user_name"]); ?>
										</span>
									</td>
									<td class="odd">
										<a href="__URL__/detail/letter_id/<?php echo ($vo["letter_id"]); ?>"
											style="color:<?php echo ($vo[status]?$colorA:$colorB); ?>">
											<?php echo ($vo["letter_title"]); ?>
												<span>
													<?php echo ($vo['status']?$staB:$staA); ?>
												</span>
										</a>
									</td>
									<td class="even" align="center">
										<?php echo (date("Y-m-d",$vo["time"])); ?>
									</td>
								</tr><?php endforeach; endif; ?>
							<tr>
								<td colspan="4" class="foot">&nbsp;
									<input type="button" name="allcheck" value="全部选中" class="button"
										onclick="javascript: for (var i=0;i<this.form.elements.length;i++){										this.form.elements[i].checked = true; }">&nbsp;&nbsp;
									<input type="button" name="nocheck" value="全部取消" class="button"
										onclick="javascript: for (var i=0;i<this.form.elements.length;i++){										this.form.elements[i].checked = false; }">&nbsp;&nbsp;
									<input type="button" name="delcheck" value="删除选中记录" class="button"
										onclick="javascript:if(confirm('确实要删除选中记录么？')){														this.form.checkaction.value='1'; this.form.submit();}">&nbsp;&nbsp;
									<input type="button" name="delall" value="清空所有记录" class="button"
										onclick="javascript:if(confirm('确实要清空所有记录么																？'))document.location='/message.php?box=outbox&checkaction=2'">
									<input name="checkaction" type="hidden" id="checkaction" value="0">
								</td>
							</tr>
						</table>
					</form>
					<div class="pages">
						<div class="pagelink" id="pagelink"><em id="pagestats">1/1</em>
							<a href="/message.php?box=outbox&page=1" class="first">1</a>
							<a href="/message.php?box=outbox&page=1" class="pgroup">&lt;&lt;</a><strong>1</strong>
							<a href="/message.php?box=outbox&page=1" class="ngroup">&gt;&gt;</a>
							<a href="/message.php?box=outbox&page=1" class="last">1</a><kbd>
								<input name="page" type="text" size="4" maxlength="6"
									onkeydown="if(event.keyCode==13){window.location='/message.php?box=outbox&page='+this.value; return false;}" /></kbd>
						</div>
					</div>

				
			</div>

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