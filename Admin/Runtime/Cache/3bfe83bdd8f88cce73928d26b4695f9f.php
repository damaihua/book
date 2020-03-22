<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
网站栏目管理</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>	
<script type="text/javascript" src="__PUBLIC__/admin/js/admin.js"></script>

<script language="javascript" src="__PUBLIC__/admin/js/global.js"></script>
<script language="javascript" src="__PUBLIC__/admin/js/context_menu.js"></script>
<script language="javascript" src="__PUBLIC__/admin/js/ieemu.js"></script>
<script language="javascript" src="__PUBLIC__/admin/js/dialog.js"></script><style type="text/css">.close{float:right;cursor:default;}</style>

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
<body >
<div id="main-content">			

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
			    <h3 style="cursor: s-resize;">小说栏目管理</h3>
					
					<ul class="content-box-tabs">
						<li><a href="__APP__/book/chapter_add">增加章节</a></li> <!-- href must be unique and match the id of target div --> 
						<li><a href="#" onclick="document.form1.submit();">更新排序</a></li>
                      
                        
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
						
							
							<!-- <table>
						 
							<thead>
								<tr>
								   <th style="display:none;"><input class="check-all" type="checkbox" /></th>
								   <th width="83" align="center">章节名</th>
                                    <th width="17" align="center">所属小说</th>
							      <th width="21" align="center">收费/免费</th>
                                   <th width="33" align="center">所需积分</th>
                                   <th width="64" align="center">更新时间</th>
                                   <th width="60" align="center">操作</th>
								</tr>
								
							</thead>
							
							<tbody>
								<form name="form1" method="post" action="catalog_do.php?dopost=upRankAll"></form>
								</tbody>
							</table> -->
                                
                                <table cellpadding="2" cellspacing="0" border="0" width="100%">
  <tbody>
	  <!--  -->
	  <tr>
		<!--<th><input class="check-all" type="checkbox" /></th> -->
		<th width="83" align="center"><strong>章节名</strong></th>
		 <th width="17" align="center"><strong>所属小说</strong></th>
	   <th width="21" align="center"><strong>收费/免费</strong></th>
		<th width="33" align="center"><strong>所需积分</strong></th>
		<th width="64" align="center"><strong>更新时间</strong></th>
		<th width="60" align="center"><strong>操作</strong></th>
	 </tr>
	  <!--  -->

  <!--分类循环开始-->
 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr >
    <td width="25%"><?php echo ($vo["chapter_title"]); ?></td>
    <td width="10%" align="center">大脑天内可</td>
    <td width="10%" align="right">&nbsp;&nbsp;<?php if($vo["charge"] == 1): ?>收费
<?php else: ?> 免费<?php endif; ?>

</td>
    <td width="13%" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["much"]); ?></td>
    <td width="21%" align="right">2014-12-23 23:34:45</td>
	<td width="24%" align="right"><a href="http://localhost/dede/plus/list.php?tid=2" target="_blank">预览</a>|
		<a href="__APP__/book/cat_edit?cid=<?php echo ($cat["cat_id"]); ?>">修改</a>|
			<!-- <a href="__APP__/book/cat_edit?cid=<?php echo ($cat["cat_id"]); ?>">修改</a> -->
		<a href="__APP__/book/chapter_del?id=<?php echo ($vo["chapter_id"]); ?>" onclick="return confirm('确定要删除?')">删除</a></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  <!--分类循环结束-->
  <tr align="right" bgcolor="#F9FCEF">
	<td colspan="6" align="center" height="36">
		<span><?php echo ($page); ?></span>
	</td>
</tr>
</tbody></table>

								

										
										<!-- <div class="pagination">
							<?php echo ($page); ?>				
										</div>  -->
										<!-- End .pagination -->

						
						
				  </div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
						
		</div> <!-- End #main-content -->	
	

</body></html>