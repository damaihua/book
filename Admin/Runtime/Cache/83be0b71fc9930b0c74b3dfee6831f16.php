<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>会员级别设置</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">

</head>
<body>

<div id="main-content">
<script language="javascript">
$("#member").addClass("current");$("#member_rank").addClass("current");</script>				

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">会员级别设置</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
<form name="form1" action="member_rank.php" method="post">
  <input name="dopost" value="save" type="hidden">
  <table cellpadding="3" cellspacing="1" align="center" border="0" width="98%">

    <tbody><tr class="alt-row" height="24">
      <td colspan="6">级别名称和级别值</td>
    </tr>
    <tr align="center" height="24">
      <td width="16%">等级ID</td>
      <td width="42%">等级名</td>
      <td width="42%">所需积分</td>
      
      
      
    </tr>
        
    
    
     <?php if(is_array($user_lv)): $i = 0; $__LIST__ = $user_lv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr align="center" height="24">
      <td><?php echo ($user["lv_id"]); ?></td>
      <td><input name="rank_4" value="<?php echo ($user["lv_name"]); ?>" id="rank_4" class="autoinput alltxt" type="text"></td>
      <td><input name="money_4" value="<?php echo ($user["lv_score"]); ?>" id="money_4" class="autoinput alltxt" type="text"></td>
      
      
      
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>  
    
        
    
        <input name="idend" value="6" type="hidden">
    
    <tr class="alt-row">
      <td colspan="6" align="center" height="36">
      <input class="button" name="imageField" value="修改" type="submit">

    </td></tr>
  </tbody></table>
</form>
							<div class="clear"></div><!-- End .clear -->
							
						
						
					</div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
           			<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	

</body></html>