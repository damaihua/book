<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
		网站栏目管理</title>

	<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
	<style type="text/css">
		.close {
			float: right;
			cursor: default;
		}
	</style>

	<style>
		.coolbg2 {
			border: 1px solid #000000;
			background-color: #F2F5E9;
			height: 18px
		}

		.coolbt2 {
			border-left: 2px solid #EFEFEF;
			border-top: 2px solid #EFEFEF;
			border-right: 2px solid #ACACAC;
			border-bottom: 2px solid #ACACAC;
			background-color: #F7FCDA
		}

		.nbline {
			border-bottom: 1px solid #d6d6d6;
			background-color: #FFFFFF;
		}

		.bline2 {
			border-bottom: 1px solid #d6d6d6;
			background-color: #F9FCEF;
		}
	</style>
</head>

<body>
	<div id="main-content">

		<div class="content-box">
			<div class="content-box-header">
				<h3 style="cursor: s-resize;">菜单管理</h3>
				<ul class="content-box-tabs">
					<li><a href="__APP__/siteset/menu_add">增加菜单</a></li>
					<li><a href="#" onclick="document.form1.submit();">更新排序</a></li>
				</ul>
			</div>
			<div class="content-box-content">
				<div style="display: block;" class="tab-content  default-tab" id="tab1">
					<table width="100%">
						<thead>
							<tr>
								<th width="161" align="center">菜单名称</th>
								<th width="195" align="center">菜单地址</th>
								<th width="119" align="center">显示位置</th>
								<th width="120" align="center">操作</th>
								<th width="72" align="center">排序</th>
							</tr>
						</thead>
						<tbody>
							<form name="form1" method="post" action="catalog_do.php?dopost=upRankAll"></form>
						</tbody>
					</table>
					<table cellpadding="2" cellspacing="0" border="0" width="100%">
						<tbody>
							<!--分类循环开始-->
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><tr class="alt-row">
									<td width="18%"><input type="checkbox" />
										<?php echo ($menu["name"]); ?><img src="__PUBLIC__/admin/images/write2.gif"></a>
									</td>
									<td width="35%" align="center">
										<?php echo ($menu["url"]); ?>
									</td>
									<td width="14%" align="center">
										<?php if($menu["position"] == 'header'): ?>头部
											<?php else: ?> 底部<?php endif; ?>
									</td>
									<td width="22%" align="right"><a href="__ROOT__<?php echo ($menu["url"]); ?>"
											target="_blank">预览</a>|<a
											href="__APP__/siteset/menu_edit?id=<?php echo ($menu["id"]); ?>">修改</a>|<a
											href="__APP__/siteset/menu_del?id=<?php echo ($menu["id"]); ?>">删除</a></td>
									<td width="11%" align="right"><input name="sortrank1" value="<?php echo ($menu["ordernum"]); ?>"
											style="width:25px;height:20px" type="text"></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							
						</tbody>
					</table>
				</div> 
			</div> 
		</div> 
	</div> 


</body>

</html>