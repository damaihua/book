<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
分类管理</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>	
<script type="text/javascript" src="__PUBLIC__/admin/js/admin.js"></script>

<script src="__PUBLIC__/admin/js/config.js" type="text/javascript"></script>

<link href="__PUBLIC__/admin/css/editor.css" type="text/css" rel="stylesheet">
</head>
<body >

<div id="main-content">

			<div class="content-box">
				
				<div class="content-box-header">
					<h3 style="cursor: s-resize;">增加分类</h3>
					<a class="close-btn" href="javascript:void(0);" onClick="javascript :history.back(-1);">关闭</a>
				</div> 
				
				<div class="content-box-content">
				
  <form  action="__URL__/insert" method="post" >

  					<div style="display: block;" class="tab-content  default-tab" id="tab1">				

							<fieldset> 
                            	
                            	<p>
                                <label>是否隐藏</label>
                                 <input name="status" value="1" class="np" checked="checked" type="radio">
              显示　&nbsp;
              <input name="status" value="0" class="np" type="radio">
              隐藏 
                                </p> 
                            	                                                                
  <p>
									<label>分类名称</label>
			    <input name="cat_name" type="text" class="text-input small-input" id="cat_name"  style="width:60px" size="30"> 
			  </p>
               <p>
									<label>分类简称</label>
			    <input name="cat_sortname" type="text" class="text-input small-input" id="cat_sortname"  style="width:60px" size="30"> 
			  </p>
								<p>
									<label>排列顺序</label>
                                    <input name="ordernum" size="6" value="10" class="text-input small-input" style="width:60px" type="text">
              （数字越小越靠前） 
								</p>   
								

								
								<p class="operate-btn">
									<input class="button" name="submit" value="确定" type="submit">
									<a class="cancel-btn" href="javascript:void(0);" onClick="javascript:history.back(-1);">取消</a>
								</p>
								
							</fieldset>
							
						
					</div> 
					
					
					</form>
					
				</div> 
				
			</div> 
			
			
			
								
		</div> 
	


</body></html>