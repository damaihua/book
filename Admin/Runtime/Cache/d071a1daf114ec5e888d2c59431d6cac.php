<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>网站会员管理</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">
<script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>	

</head>
<body>

<div id="main-content">
			

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>管理员列表</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div class="tab-content  default-tab" id="tab1">				


<table cellpadding="0" cellspacing="1" align="center" border="1" width="100%">
  <tbody>
  <tr align="center" height="10" > 
    <td width="6%"><strong>选择</strong></td>
    
    <td width="10%"><strong>登录名</strong></td>
    <td width="7%"><strong>用户组</strong></td>
    
    
     
    
    
    <td width="10%"><strong>上次登录时间</strong></td>
    <td width="8%"><strong>操作</strong></td>
  </tr>
 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$admin): $mod = ($i % 2 );++$i;?><tr align="center" height="26"> 
  <td><input name="mid" id="mid" value="1" class="np" type="checkbox"></td>
  
  <td><?php echo ($admin["admin_name"]); ?></td>
	
  <td>
  	<?php echo ($admin["group_name"]); ?> </td>
  
     
  
    
  <td>
  <?php echo (date('Y-m-d H:i:s',$admin["login_time"])); ?>   	</td>
  <td align="center">
    <a href="http://localhost/dede/dede/member_view.php?id=1">修改</a> | 
    <a href="__APP__/admin/admin_del?id=<?php echo ($admin["admin_id"]); ?>" onclick="return confirm('确定要删除?')">删除</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>

<tr> 
 <td colspan="11" align="center" height="36">
	<span><?php echo ($page); ?></span>
 </td>
</tr>
</tbody></table>
<div class="clear"></div><!-- End .clear -->
</div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			
           			</div></body></html>