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
					
					<h3>积分奖罚管理</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div class="tab-content  default-tab" id="tab1">				


<table cellpadding="0" cellspacing="1" align="center" border="1" width="100%">
  <tbody>
  <tr align="center" height="10" > 
    <td width="6%"><strong>ID</strong></td>
    
    <td width="10%"><strong>事项</strong></td>
    
    <td width="10%"><strong>奖/罚</strong></td>
    
     
    
    
    <td width="10%"><strong>奖罚积分</strong></td>
    <td width="8%"><strong>操作</strong></td>
  </tr>
 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" height="26"> 
  <td><?php echo ($vo["id"]); ?></td>
  
  <td><?php echo ($vo["name"]); ?></td>
	
  
  
     
  <td>
  <?php if($vo["type"] == 1 ): ?>奖励
<?php else: ?> <font color="#FF0000">惩罚</font><?php endif; ?>

  </td>
    
  <td>
  <?php echo ($vo["score"]); ?></td>
  <td align="center">
    <a href="__APP__/score/score_role_edit?id=<?php echo ($vo["id"]); ?>">修改</a> | 
    <a href="__APP__/score/score_role_del?id=<?php echo ($vo["id"]); ?>" onclick="return confirm('确定要删除?')">删除</a></td>
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