<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>友情链接管理</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">


<script language="javascript" type="text/javascript" src="__JS__/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="__JS__/Validform_v5.3.2.js"></script>
</head>
<body>

<div id="main-content">
			

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">广告管理</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
<table cellpadding="3" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">
  <tbody><tr class="alt-row">
    <td colspan="8" style="padding-left:10px;">
  <div style="float:left">
		<p>
		<h2>广告位修改</h2></p>
	</div>

  </td>

</tr>


   </tbody></table>
  

  		<table cellpadding="3" cellspacing="1" align="center" bgcolor="#FBFCE2" border="0" width="98%">
		<form action="__URL__/do_ad_edit" method="post" enctype="multipart/form-data">
		<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr >
  		  <td>广告位名称</td><td><input type="text" name="name" value="<?php echo ($vo["name"]); ?>"></td></tr>
  		<tr>
  		  <td>广告位图片</td><td><input type="text"  value="<?php echo ($vo["image"]); ?>"><input name='image' type="file" /></td></tr><br />
  		<tr>
  		  <td>链接地址</td><td><input type="text" name="url" value="<?php echo ($vo["url"]); ?>" datatype="url" nullmsg="请填写正确的url！" errormsg="请填写正确的url！"><span class="Validform_checktip"></span></td></tr>
  		
  		<tr><br /><?php endforeach; endif; ?>	
  		<tr><td><input type="submit" name="submit" value="修改"> <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
</td><td></td></tr><br />	
	
	</form>

  </table>


							<div class="clear"></div><!-- End .clear -->
							
						
						
					</div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
           			<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	

</body></html>