<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>友情链接管理</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">
<script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>	
<script type="text/javascript" src="__PUBLIC__/admin/js/admin.js"></script>

<script language="javascript" src="__PUBLIC__/admin/js/global.js"></script>

<script language="javascript">
function Sel(stype)
{
	  for(var i=0;i < document.getElementsByName('aids').length;i++)
	  {
		  if(stype=='all') document.getElementsByName('aids')[i].checked=true;
		  else document.getElementsByName('aids')[i].checked=false;
	  }
}
function checkSubmit()
{
	var str = '';
	for(var i=0;i < document.getElementsByName('aids').length;i++)
	{
		  if(document.getElementsByName('aids')[i].checked){
		  	if(str=='') str += document.getElementsByName('aids')[i].value;
		  	else str += ',' + document.getElementsByName('aids')[i].value;
		  }
	}
	if(str=='')
	{
		alert('你没选择任何内容！');
		return false;
	}
	else
	{
		location="friendlink_edit.php?aids="+str+"&dopost=delall";
	}
}
</script>
</head>
<body>

<div id="main-content">
<script language="javascript">
$("#plus").addClass("current");$("#friendlink_main").addClass("current");</script>				

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">友情链接管理</h3>
					
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
		<p><h2>友情链接修改</h2></p>
	</div>

  </td>

</tr>
   
<form name="form1" method="post" action="friendlink_edit.php" onsubmit="return checkSubmit();"></form>
<input name="dopost" value="delall" type="hidden">
<input name="allid" value="" type="hidden">

   </tbody></table>
  

  		<table cellpadding="3" cellspacing="1" align="center" bgcolor="#FBFCE2" border="0" width="98%">
		<form action="__URL__/do_link_edit" method="post">
		<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr >
  		  <td>网站名称</td><td><input type="text" name="name" value="<?php echo ($vo["name"]); ?>"></td></tr>
  		<tr>
  		  <td>网站域名</td><td><input type="text" name="url" value="<?php echo ($vo["url"]); ?>"></td></tr><br />
  		<tr>
  		  <td>电子邮箱</td><td><input type="text" name="email" value="<?php echo ($vo["email"]); ?>"></td></tr>
  		<tr><td>手机号码</td><td><input type="text" name="phone" value="<?php echo ($vo["phone"]); ?>"></td></tr>
  		<tr><td>修改描述</td><td><TEXTAREA name="intro" rows="5" cols="45"><?php echo ($vo["intro"]); ?></TEXTAREA>
</td><tr><br />
	<tr>
  		  <td>审核状态</td>
          <td>
          <select name="status" >
          <option value="1" <?php if($vo["status"] == 1 ): ?>selected
<?php else: endif; ?>>通过</option>
           <option value="0" <?php if($vo["status"] == 0 ): ?>selected
<?php else: endif; ?>
>未通过</option>
          </select>
          </td>
    </tr><?php endforeach; endif; ?>	
  		<tr><td><input type="submit" name="submit" value="修改"> <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
<td></td></td></tr><br />	
	
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