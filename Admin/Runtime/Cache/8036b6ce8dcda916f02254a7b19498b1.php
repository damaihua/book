<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>后台管理系统</title>
	<link href="__PUBLIC__/admin/css/frame.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/admin/css/style.css" rel="stylesheet" type="text/css">
	
</head>

<body class="showmenu">
	<div class="left">
		<div class="menu" id="menu">
			<iframe src="index_menu" id="menufra" name="menu" frameborder="0" scrolling="auto"></iframe>
		</div>
	</div>
	<div class="right">
		<div class="main">
			<iframe id="main" name="main" frameborder="0" src="index_body" scrolling="auto"></iframe>
		</div>
	</div>
	<script language="javascript">
		// function JumpFrame(url1, url2) {
		// 	jQuery('#menufra').get(0).src = url1;
		// 	jQuery('#main').get(0).src = url2;
		// }
		// (function ($) {
		// 	$("#skinlist>li").click(function () {
		// 		var adminskin = $(this).index() + 1;
		// 		var csshref = "images/style" + adminskin + "/style.css";
		// 		$("#skinlist>li").each(function () { $(this).children('div').attr('class', '') });
		// 		$("#topdedelogo").attr('src', 'images/style' + adminskin + '/admin_top_logo.gif')
		// 		$('link').each(function () {
		// 			if ($(this).attr('href').match(/style.css$/)) {
		// 				$(this).attr('href', csshref);
		// 			}
		// 		});
		// 		$(this).children('div').attr('class', 'sel');
		// 		$(window.frames["menu"].document).find("link").each(function () {
		// 			if ($(this).attr('href').match(/style.css$/)) {
		// 				$(this).attr('href', csshref);
		// 			}
		// 		});
		// 		$(window.frames["main"].document).find("link").each(function () {
		// 			if ($(this).attr('href').match(/style.css$/)) {
		// 				$(this).attr('href', csshref);
		// 			}
		// 		});
		// 		$.get('index_body.php?dopost=setskin&cskin=' + adminskin);
		// 	});
		// })(jQuery);
	</script>


</body>

</html>