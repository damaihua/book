<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0041)http://localhost/dede/dede/index_body.php -->
<html  xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>我的网站-织梦内容管理系统 V57_GBK_SP1</title>
<link  rel="stylesheet"  href="__PUBLIC__/admin/css/reset.css"  type="text/css"  media="screen">
<link  rel="stylesheet"  href="__PUBLIC__/admin/css/style.css"  type="text/css"  media="screen">
<link  rel="stylesheet"  href="__TMPL__/public/css/invalid.css"  type="text/css"  media="screen">	
<script  language="javascript"  src="__PUBLIC__/admin/js/jquery.min.js"  type="text/javascript"></script>	
<script  type="text/javascript"  src="__PUBLIC__/admin/js/admin.jquery.configuration.js"></script>
<script  src="__PUBLIC__/admin/js/frame.js"  language="javascript"  type="text/javascript"></script>
<script charset="UTF-8"src="__PUBLIC__/kindeditor/kindeditor-min.js"></script> 
<script  language="javascript"  type="text/javascript">
	window.onload=function (){
		setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
	}
</script>
<script>
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="chapter_content"]', {
			resizeType : 1,
			allowPreviewEmoticons : false,
			allowImageUpload : false,
			items : [
				'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|', 'emoticons', 'image', 'link']
		});
	});


</script>
</head>
<body  onload="ContextMenu.intializeContextMenu()">
<div  id="main-content">
			<div  class="content-box">
				<div  class="content-box-header">
					<h3  style="cursor: s-resize;">新增章节</h3>
					<a class="close-btn" href="javascript:void(0);" onClick="javascript :history.back(-1);">关闭</a>
				</div> 
				<div  class="content-box-content">
					<form action="__URL__/chapter_insert" enctype="multipart/form-data" method="post" >
						<input type="hidden" name="book_id" value="<?php echo ($book_id); ?>">
						<input type="hidden" name="book_name" value="<?php echo ($book_name); ?>">
						<fieldset> 
							<p>
								<label>书名</label>
								<input name="book_name" style="width:150px" type="text" value="<?php echo ($book_name); ?>" disabled> 
							</p>
							<p>
								<label>章节名</label>
								<input name="chapter_title" style="width:150px" type="text"> 
							</p>
							
							<p>
								<label>收费\免费</label>
								<input name="charge" value="0" class="np" checked="checked" type="radio">
              免费&nbsp;
              <input name="charge" value="1" class="np" type="radio">
             收费 
							</p>
							<p>
								<label>所需积分</label>
								<input name="chapter_much" style="width:150px" type="text"> 
							</p>
							<p>
								<label>章节内容</label>
								<textarea name="chapter_content" style="width:800px;height:200px;visibility:hidden;"></textarea>
							</p>
							<p>
  
								<input name="dede_addonfields" value="" type="hidden">
   
									  
								   </p>  
							<p class="operate-btn">
								<input class="button" name="submit" value="确定" type="submit">
							
								<a class="cancel-btn" href="javascript:void(0);" onClick="javascript:history.back(-1);">取消</a>
							</p>
							
						</fieldset>
					
					</form>
					
				</div> 
				
			</div> 
			
			
			
									
		</div> 	
	


            </body></html>