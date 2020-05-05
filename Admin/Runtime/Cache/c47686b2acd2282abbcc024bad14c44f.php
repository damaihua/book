<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>公告修改</title>
	<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">
	<script charset="UTF-8" src="__PUBLIC__/kindeditor/kindeditor-min.js"></script>
	<script charset="UTF-8" src="__PUBLIC__/kindeditor/lang/zh_CN.js">
	</script>
	<script>
		var editor;
		KindEditor.ready(function (K) {
			editor = K.create('textarea[name="test_chapter"]', {
				resizeType: 1,
				allowPreviewEmoticons: false,
				allowImageUpload: false,
				items: [
					'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
					'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
					'insertunorderedlist', '|', 'emoticons', 'image', 'link']
			});
		});
	</script>
	<script language="javascript" type="text/javascript" src="__JS__/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="__JS__/Validform_v5.3.2.js"></script>

	<script type="text/javascript">
		$(function () {
			$(".notice").Validform({
				tiptype: function (msg, o, cssctl) {
					if (!o.obj.is("form")) {
						var objtip = o.obj.siblings(".Validform_checktip");
						cssctl(objtip, o.type);
						objtip.text(msg);
					}
				}
			});
		})
	</script>
</head>

<body>

	<div id="main-content">
		<div class="content-box">
			<div class="content-box-header">
				<h3 style="cursor: s-resize;">增加公告</h3>
			</div> 
			<div class="content-box-content">

				<div style="display: block;" class="tab-content  default-tab" id="tab1">
					<table cellpadding="3" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">
						<tbody>
						</tbody>
					</table>
					<table align="center" bgcolor="#FBFCE2" border="0" width="98%">
						<form class=“notice” action="__URL__/do_notice_add" method="post">

							<tr>
								<td width="70">公告标题</td>
								<td><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"><input name="title" type="text"
										size="50"></td>
							</tr>
							<tr>
								<td width="70" valign="top">公告内容</td>
								<td>

								</td>
							</tr>
							<tr>
								<td colspan="2" valign="top"><textarea name="content" tip="内容不少于10个汉字！"
										style="width:100%;height:400px;"></textarea> <span
										class="Validform_checktip">内容不少于10个汉字！</span>
								</td>
							</tr>
							<tr>
								<td><input type="submit" name="submit" value="修改">
								</td>
								<td></td>
							</tr>
						</form>
					</table>
				</div> 
			</div> 
		</div> 	
	</div>
</body>

</html>