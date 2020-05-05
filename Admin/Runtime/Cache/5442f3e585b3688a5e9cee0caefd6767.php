<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>增加文章</title>
<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<script  language="javascript"  src="__PUBLIC__/admin/js/jquery.min.js"  type="text/javascript"></script>	
<script charset="UTF-8"src="__PUBLIC__/kindeditor/kindeditor-min.js"></script> 
 	<script charset="UTF-8"src="__PUBLIC__/kindeditor/lang/zh_CN.js">
    </script> 
 	<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="book_info"]', {
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
<body onload="ContextMenu.intializeContextMenu()" >
<div id="main-content">
			<div class="content-box">
				<div class="content-box-header">	
					<h3>添加书籍</h3>
					<a class="close-btn" href="javascript:void(0);" onClick="javascript :history.back(-1);">关闭</a>
				</div>
				<div class="content-box-content" >	
					<form action="__URL__/book_insert" enctype="multipart/form-data" method="post" >
  <!-- <input name="book_id" value="<?php echo ($book_id); ?>" type="hidden"> -->
					<div style="display: block;" class="tab-content  default-tab" id="tab1">				
							<fieldset> 
								<p>
									<label>书名</label>
									<input name="book_name" type="text"> 
								</p>
								<p>
									<label>标签</label>
									<input name="tags" type="text" >
								</p>
								<p>
									<label>作者</label>
								  <input name="writer" type="text">
								</p>
								<p>
									<label>推荐位</label>
                                    <input name="flags[a]" type="checkbox" class="np" id="flagsh" value="a">
                                    强力推荐[a]
                                <input class="np" name="flags[b]" id="flagsc" value="b" type="checkbox">
                                    封面推荐[b]
                                    <input class="np" name="flags[c]" id="flagsf" value="c" type="checkbox">
                                    编辑推荐[c]
                                    <input class="d" name="flags[d]" id="flagss" value="d" type="checkbox">精品推荐[d]							
                                </p>   
                                
		
								<p>
									<label>书籍封面</label>
                  						<input name='cover' type="file" />
                                </p>                  
								<p></p>
								
								<p>
									<label>所属分类</label>
                                   <span id="typeidct">
                                 
                                    <select name="book_cat" id="typeid" style="width:240px">
                                        <?php echo ($catlist); ?>
                                    </select>
                                    </span>
								</p>
								

								<p>
									<label>书籍进度</label>
                                   <span id="typeidct">
                                   <select name="progress" id="progress" style="width:240px">
                                    <?php echo ($proglist); ?>
                                    </select>
                                    </span>
									
								</p>
						  <p>
									<label>书籍简介</label>
								<textarea name="book_info" style="width:800px;height:200px;visibility:hidden;"></textarea>
                              
							  </p>
                                
                                <p>
  
     						<input name="dede_addonfields" value="" type="hidden">

                                   
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