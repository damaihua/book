<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>	
<script type="text/javascript" src="__PUBLIC__/admin/js/admin.js"></script>

<script language="javascript" src="__PUBLIC__/admin/js/global.js"></script>
<script language="javascript" src="__PUBLIC__/admin/js/context_menu.js"></script>
<script language="javascript" src="__PUBLIC__/admin/js/ieemu.js"></script>
<script language="javascript" src="__PUBLIC__/admin/js/dialog.js"></script><style type="text/css">.close{float:right;cursor:default;}</style>

</head>
<body >
<div id="main-content">			

	<div class="content-box">
				
				<div class="content-box-header">
					<h3 style="cursor: s-resize;">章节管理</h3>
					<a class="new-add" href="__APP__/book/chapter_add">增加章节</a>
				</div> 
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
						
                                <table cellpadding="2" cellspacing="0" border="0" width="100%">
  <tbody>
	  
	  <tr>
		<th width="83" align="center"><strong>章节名</strong></th>
		 <th width="17" align="center"><strong>所属书籍</strong></th>
	   <th width="21" align="center"><strong>收费/免费</strong></th>
		<th width="33" align="center"><strong>所需积分</strong></th>
		<th width="64" align="center"><strong>更新时间</strong></th>
		<th width="60" align="center"><strong>操作</strong></th>
	 </tr>
	  

  <!--分类循环start-->
 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr >
    <td width="22%"><?php echo ($vo["chapter_title"]); ?></td>
    <td width="15%" align="center"><?php echo ($vo["book_name"]); ?></td>
    <td width="8%" align="right">&nbsp;&nbsp;<?php if($vo["charge"] == 1): ?>收费
<?php else: ?>免费<?php endif; ?>

</td>
    <td width="13%" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["much"]); ?></td>
    <td width="21%" align="right"><?php echo (date("Y-m-d H:i",$vo["update_time"])); ?></td>
	<td width="24%" align="right">
		
		<a href="__APP__/book/chapter_edit?chapter_id=<?php echo ($vo["chapter_id"]); ?>">修改</a>|
		<a href="__APP__/book/chapter_del?id=<?php echo ($vo["chapter_id"]); ?>" onclick="return confirm('确定要删除?')">删除</a></td>
  
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
  <!--分类循环end-->
  <tr class="admin-page" align="right" bgcolor="#F9FCEF">
	<td colspan="6" align="center" height="36">
		<div><?php echo ($page); ?></div>
	</td>
</tr>
</tbody>
</table>

				  </div> 
				</div> 	
			</div> 				
		</div> 
	

</body></html>