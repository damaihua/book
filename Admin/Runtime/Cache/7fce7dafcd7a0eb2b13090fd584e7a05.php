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
						<li><a href="__APP__/book/cat_add">增加分类</a></li> <!-- href must be unique and match the id of target div --> 
						<li><a href="#" onclick="document.form1.submit();">更新排序</a></li>
                      
                        
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
						
							
							<table>
						 
							<thead>
								<tr>
								   <!--<th><input class="check-all" type="checkbox" /></th> -->
								   <th width="40" align="center">分类名</th>
                                    <th width="34" align="center">显示/隐藏</th>
							      <th width="34" align="center">操作</th>
                                   <th width="60" align="center">排序</th>
								</tr>
								
							</thead>
							
							<tbody>
								<form name="form1" method="post" action="catalog_do.php?dopost=upRankAll"></form>
								</tbody>
							</table>
							<table cellpadding="2" cellspacing="0" border="0" width="100%">
  <tbody>
	<tr>
		<!--<th><input class="check-all" type="checkbox" /></th> -->
		<th width="40" align="center">分类名</th>
		 <th width="34" align="center">显示/隐藏</th>
	   <th width="34" align="center">操作</th>
		<th width="60" align="center">排序</th>
	 </tr>

  <!--分类循环开始-->
  <?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><tr class="alt-row"><td width="25%"><input type="checkbox" /><a href="cat_edit?cid=<?php echo ($cat["cat_id"]); ?>" ><?php echo ($cat["cat_name"]); ?></a>(小说：<?php echo ($cat["total"]); ?>本)  <a href="cat_edit?cid=<?php echo ($cat["cat_id"]); ?>"><img src="__PUBLIC__/admin/images/write2.gif"></a></td><td width="17%" align="center"><?php if($cat["status"] == 1): ?>显示
<?php else: ?> 隐藏<?php endif; ?></td><td width="26%" align="right"><a href="http://localhost/dede/plus/list.php?tid=2" target="_blank">预览</a>|<a href="http://localhost/dede/dede/catalog_do.php?cid=2&amp;dopost=listArchives">内容</a>|
	<a href="__APP__/book/cat_edit?cid=<?php echo ($cat["cat_id"]); ?>">修改</a>|<a href="__APP__/book/cat_del?cid=<?php echo ($cat["cat_id"]); ?>" onclick="return confirm('确定要删除?')">删除</a></td>
    <td width="32%" align="right"><input name="ordernum" value="<?php echo ($cat["ordernum"]); ?>" style="width:25px;height:20px" type="text"></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  <!--分类循环结束-->
  <!-- <tr><td colspan="3" id="suns1"></td></tr> -->
  <tr><td colspan="4" >
	<?php echo ($page); ?>
  </td></tr>
</tbody></table>
<!-- <table cellpadding="2" cellspacing="0" border="0" width="100%">
  <tbody>

   
</tbody></table> -->
								

										
										<!-- <div class="pagination">
											<?php echo ($page); ?>
										</div>  -->
										<!-- End .pagination -->
										<div class="clear"></div>
									
								
							
						
							
							<div class="clear"></div><!-- End .clear -->
							
						
						
					</div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
           			<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	

</body></html>