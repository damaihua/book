<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>广告管理</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">


</head>
<body>

<div id="main-content">
			

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
			    <h3 style="cursor: s-resize;">单页管理</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
<table cellpadding="3" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">
  <tbody><tr class="alt-row">
    <td colspan="7" style="padding-left:10px;">
     <a href="__APP__/other/page_add"><u>增加单页</u></a>
   </td>
</tr>
  
  <tr "="" align="center" bgcolor="#FBFCE2" height="24"> 
      <td width="8%">编号</td>
      <td width="25%">&nbsp;题目</td>
      
      <td width="18%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布时间</td>
      <td width="18%" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理</td>
   </tr>
  <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr > 
        <td><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($vo["title"]); ?></td>
        
        <td><?php echo (date("Y_m-d H:i:s",$vo["time"])); ?></td>
        <td>
         <a href="__APP__/other/ad_edit?id=<?php echo ($vo["id"]); ?>">[浏览]</a>
         <a href="__APP__/other/page_edit?id=<?php echo ($vo["id"]); ?>">[更改]</a>
		     <a href="__APP__/other/page_del?id=<?php echo ($vo["id"]); ?>" onclick="return confirm('确定要删除?')">[删除]</a>
		    </td>
     </tr><?php endforeach; endif; ?>
		   
		   
		   
		     
		     <tr > 
      <td colspan="7">
      	<span><?php echo ($page); ?></span>
      </td>
     </tr>
   </tbody></table>
   


							<div class="clear"></div><!-- End .clear -->
							
						
						
					</div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
           			<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	

</body></html>