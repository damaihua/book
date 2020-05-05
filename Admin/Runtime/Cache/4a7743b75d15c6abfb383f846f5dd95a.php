<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>友情链接管理</title>
	<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">
	<script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="__PUBLIC__/admin/js/admin.js"></script>
	<script language="javascript" src="__PUBLIC__/admin/js/global.js"></script>
	<script language="javascript">
		function Sel(stype) {
			for (var i = 0; i < document.getElementsByName('aids').length; i++) {
				if (stype == 'all') document.getElementsByName('aids')[i].checked = true;
				else document.getElementsByName('aids')[i].checked = false;
			}
		}
		function checkSubmit() {
			var str = '';
			for (var i = 0; i < document.getElementsByName('aids').length; i++) {
				if (document.getElementsByName('aids')[i].checked) {
					if (str == '') str += document.getElementsByName('aids')[i].value;
					else str += ',' + document.getElementsByName('aids')[i].value;
				}
			}
			if (str == '') {
				alert('你没选择任何内容！');
				return false;
			}
			else {
				location = "friendlink_edit.php?aids=" + str + "&dopost=delall";
			}
		}
	</script>
</head>

<body>
	<div id="main-content">
		<script language="javascript">
			$("#plus").addClass("current"); $("#friendlink_main").addClass("current");</script>
		<div class="content-box">
			<div class="content-box-header">
				<h3 style="cursor: s-resize;">友情链接管理</h3>
			</div>

			<div class="content-box-content">

				<div style="display: block;" class="tab-content  default-tab" id="tab1">
					<table cellpadding="3" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">
						<tbody>
							<tr class="alt-row" align="center" bgcolor="#FBFCE2" height="26">
								<td width="9%">编号</td>
								<td width="10%">网站名称</td>
								<td width="10%">网站地址</td>
								<td width="12%">站长Email</td>
								<td width="10%">手机</td>
								<td width="8%">状态</td>
								<td width="21%">管理</td>
							</tr>
							<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr onmousemove="javascript:this.bgColor='#FCFDEE';"
									onmouseout="javascript:this.bgColor='#FFFFFF';" align="center" bgcolor="#FFFFFF"
									height="26">
									<td>
										<?php echo ($vo["id"]); ?>
									</td>
									<td>
										<?php echo ($vo["name"]); ?>
									</td>
									<td>
										<?php echo ($vo["url"]); ?>
									</td>

									<td>
										<?php echo ($vo["email"]); ?>
									</td>
									<td>
										<?php echo ($vo["phone"]); ?>
									</td>
									<td>
										<?php if($vo["status"] == 1 ): ?>已审核通过
											<?php else: ?>
											<font color="#FF0000">未审核通过</font><?php endif; ?>
									</td>
									<td>
										<a href="__APP__/other/link_edit?id=<?php echo ($vo["id"]); ?>">[审核]</a>
										<a href="__APP__/other/link_del?id=<?php echo ($vo["id"]); ?>">[删除]</a>

									</td>
								</tr><?php endforeach; endif; ?>
							<tr onmousemove="javascript:this.bgColor='#FCFDEE';"
								onmouseout="javascript:this.bgColor='#FFFFFF';" align="center" bgcolor="#FFFFFF"
								height="26">
								<td colspan="9">
									<?php echo ($page); ?>
								</td>
							</tr>

						</tbody>
					</table>

				</div> 


			</div> 

		</div> 

		
	</div> 


</body>

</html>