<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
栏目管理</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>	
<script type="text/javascript" src="__PUBLIC__/admin/js/admin.js"></script>

<script src="__PUBLIC__/admin/js/config.js" type="text/javascript"></script>
<style type="text/css" id="cke_ui_color">.cke_1 .cke_wrapper,.cke_1_dialog .cke_dialog_contents,.cke_1_dialog a.cke_dialog_tab,.cke_1_dialog .cke_dialog_footer{background-color: #F1F5F2 !important;}</style>
<link href="__PUBLIC__/admin/css/editor.css" type="text/css" rel="stylesheet">
</head>
<body >

<div id="main-content">


			
			<div class="content-box">
				
				<div class="content-box-header">
					
			    <h3>修改分类</h3>
				<a class="close-btn" href="javascript:void(0);" onClick="javascript :history.back(-1);">关闭</a>
				</div> 
				
				<div class="content-box-content">
					
  <form name='form' action="__URL__/update" method="post" onsubmit="return checkSubmit();">
  					<div style="display: block;" class="tab-content  default-tab" id="tab1">				
							<fieldset> 
                          <input name="cat_id" id="cat_id" value="<?php echo ($cat['cat_id']); ?>" type="hidden">
                            	<p>
                                <label>是否隐藏</label>
                                 <input name="status" value="1" class="np" type="radio" <?php if($cat["status"] == 1): ?>checked <?php else: endif; ?>>
              显示　&nbsp;
              <input name="status" value="0" class="np" type="radio" <?php if($cat["status"] == 0): ?>checked <?php else: endif; ?>>
              隐藏 
                                </p> 
                            	                                                                
								<p>
								  <label>分类名称</label>
									<input name="cat_name" type="text" class="text-input small-input" id="cat_name"  style="width:60px" value="<?php echo ($cat['cat_name']); ?>" size="30"> 
								</p>
                                <p>
								  <label>分类简称</label>
									<input name="cat_sortname" type="text" class="text-input small-input" id="cat_name"  style="width:60px" value="<?php echo ($cat['cat_sortname']); ?>" size="30"> 
								</p>
								<p>
									<label>排列顺序</label>
                                    <input name="ordernum" size="6" value="<?php echo ($cat['ordernum']); ?>" class="text-input small-input" style="width:60px" type="text">
              （由低 -&gt; 高） 
								</p>   
								
								                                                                
								
								
								<p class="operate-btn">
									<input class="button" name="imageField" value="修改" type="submit">
									<a class="cancel-btn" href="javascript:void(0);" onClick="javascript:history.back(-1);">取消</a>
								</p>
								
							</fieldset>
							
						
					</div> 
					</form>
					
				</div> 
				
			</div> 
			
						
		</div> 
	


</body></html>