<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户短信管理</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">

</head>
<body>

<div id="main-content">
			

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">管理员收信箱</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				

<table   cellpadding="1" cellspacing="1" align="center" border="1" width="98%">
  <tbody>
  <tr height="26">
    <td align="center" width="14%"><strong>发送时间</strong></td>
    <td align="center" width="20%"><strong>标题</strong></td>
    <td align="center" width="8%"><strong>状态</strong></td>
    <td align="center" width="10%"><strong>发件人</strong></td>
    
    
    <td align="center" width="18%"><strong>操作</strong></td>
  </tr>
  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr height="26">
    <td width="14%" align="center" bgcolor="#FFFFFF"><?php echo (date("Y-m-d h:i:s",$vo["time"])); ?></td>
    <td width="20%" align="center" bgcolor="#FFFFFF"><?php echo ($vo["letter_title"]); ?></td>
    <td width="8%" align="center" bgcolor="#FFFFFF"><?php if($vo["status"] == 0): ?><font color='red'>未读</font><?php elseif($vo["status"] == 1): ?>已读
<?php else: ?> 已读<?php endif; ?>

</td>
    <td width="10%" align="center" bgcolor="#FFFFFF"><?php echo ($vo["user_nicename"]); ?></td>
    
    
    <td width="18%" align="center" bgcolor="#FFFFFF"><a href="__ROOT__/index.php/letter/show/letter_id/<?php echo ($vo["letter_id"]); ?>" target="_blank">浏览</a>|<a href="__APP__/member/letter_del/id/<?php echo ($vo["letter_id"]); ?>" onclick="return confirm('确定要删除?')">删除</a></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
   <tr class="alt-row">
    <td height="26" colspan="9" align="center" bgcolor="#FFFFFF"> <span><?php echo ($page); ?></span> </td>
  </tr>
</tbody></table>
<div class="clear"></div><!-- End .clear -->
							
						
						
					</div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
		
			
           			<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	

</body></html>