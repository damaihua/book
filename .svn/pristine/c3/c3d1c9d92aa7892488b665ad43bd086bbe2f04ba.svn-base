<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
文档管理</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">

<style>
.coolbg2 {
border: 1px solid #000000;
background-color: #F2F5E9;
height:18px
}
.coolbt2 {
  border-left: 2px solid #EFEFEF;
  border-top: 2px solid #EFEFEF;
  border-right: 2px solid #ACACAC;
  border-bottom: 2px solid #ACACAC;
  background-color: #F7FCDA
}
.nbline {border-bottom: 1px solid #d6d6d6; background-color:#FFFFFF; }
.bline2 {border-bottom: 1px solid #d6d6d6; background-color:#F9FCEF; }
</style>
</head>
<body onload="ContextMenu.intializeContextMenu()">
<div id="main-content">			

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">小说管理</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
<!--  快速转换位置按钮  -->

  
<!--  内容列表   -->

							
							<form name="form2">
<table style="margin-top:8px" cellpadding="2" cellspacing="1" align="center" border="0" width="98%">
<tbody>
<tr align="center" height="25">
	<td width="6%"><strong>ID</strong></td>
	
	<td width="15%"><strong>书名</strong></td>
	<td width="7%"><strong>类别</strong></td>
	<td width="8%"><strong>作者</strong></td>
	<td width="6%"><strong>进度</strong></td>
	<td width="7%"><strong>章节</strong></td>
	<td width="17%"><strong>发布时间</strong></td>
	<td width="18%"><strong>更新时间</strong></td>
	<td width="10%"><strong>操作</strong></td>
</tr>
<?php if(is_array($books)): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$book): $mod = ($i % 2 );++$i;?><tr  align="center" height="25">
	<td width="6%"><?php echo ($book["book_id"]); ?></td>

	<td width="15%">《<?php echo ($book["book_name"]); ?>》</td>
	<td width="7%"><?php echo ($book["book_cat"]); ?></td>
	<td width="8%"><?php echo ($book["user_id"]); ?></td>
	<td width="6%">完本</td>
	<td width="7%"><?php echo ($book["total"]); ?></td>
	<td width="17%">2014-03-04 21:23:45</td>
	<td width="18%">2014-03-04 21:23:45</td>
	<td width="10%"><a href="__APP__/book/book_edit?book_id=<?php echo ($book["book_id"]); ?>">审核</a>|<a href="__APP__/book/book_del?book_id=<?php echo ($book["book_id"]); ?>" onclick="return confirm('确定要删除?')">删除</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>

<tr align="right" bgcolor="#F9FCEF">
	<td colspan="10" align="center" height="36">
		<span><?php echo ($page); ?></span>
	</td>
</tr>
</tbody></table>

<!--  搜索表单  -->

							
							<div class="clear"></div><!-- End .clear -->
							
						
						
					</form></div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
           			<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	

</body></html>