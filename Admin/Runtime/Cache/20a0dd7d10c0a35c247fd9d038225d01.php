<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>公告修改</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">

<script charset="UTF-8"src="__PUBLIC__/kindeditor/kindeditor-min.js"></script> 
 	<script charset="UTF-8"src="__PUBLIC__/kindeditor/lang/zh_CN.js">
    </script>
    
<script>
			KindEditor.ready(function(K) {
				K.create('textarea[name="content"]', {
					autoHeightMode : true,
					afterCreate : function() {
						this.loadPlugin('autoheight');
					}
				});
			});
		</script>

</head>
<body>

<div id="main-content">
			

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">单页修改</h3>

					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
<table cellpadding="3" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">
  <tbody>


   </tbody></table>
  

  		<table align="center" bgcolor="#FBFCE2" border="0" width="98%">
		<form action="__APP__/other/do_page_edit" method="post" >
		
  		<tr >
  		  <td width="70">单页标题</td>
          <td><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"><input name="title" type="text" value="<?php echo ($data["title"]); ?>" size="50"></td>
        </tr>
  		<tr>
  		  <td width="70" valign="top">单页内容</td>
          <td>

          </td>
         </tr>
  		
  		<tr>
  		  <td colspan="2" valign="top"><textarea name="content"  style="width:100%;height:400px;"><?php echo ($data["content"]); ?></textarea>  
          <span class="Validform_checktip">内容不少于10个汉字！</span>        
          </td>
         </tr>
  		<tr>
        <td><input type="submit" value="修改单页"> 
		</td>
        <td></td>
        </tr>	
	
	</form>

  </table>


							
						
						
					</div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			

			
           			<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	

</body></html>