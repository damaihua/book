<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
增加文章</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
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
<body >
<div id="main-content">
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">小说审核</h3>
					
				
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<form name="form1" action="__APP__/book/do_book_edit" enctype="multipart/form-data" method="post" onsubmit="return checkSubmit()">
  <input name="book_id" value="<?php echo ($book_id); ?>" type="hidden">
 
					<div style="display: block;" class="tab-content  default-tab" id="tab1">				
						
							
							<fieldset> 
								<p>
									<label>小说标题</label>
									<input name="book_name" style="width:80px" type="text" value="<?php echo getData('Book',$book_id,'book_name');?>"> 
								</p>
								<p>
									<label>推荐位</label>
                                    <input name="flags[]" type="checkbox" class="np" id="flagsh" value="a" checked="checked" 
                                
                                    >
                                    强力推荐[a]
                                <input class="np" name="flags[]" id="flagsc" value="b" type="checkbox">
                                    封面推荐[b]
                                    <input class="np" name="flags[]" id="flagsf" value="c" type="checkbox">
                                    编辑推荐[c]
                                    <input class="d" name="flags[]" id="flagss" value="d" type="checkbox">精品推荐[d]							</p>   
                                
		
								<p>
									<label>小说封面</label>
                  <img name="cover" src="<?php echo getData('Book',$book_id,'book_cover');?>" width="180" height="225" alt="" />
					
                
                  
                  
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
									<label>小说进度</label>
                                   <span id="typeidct">
                                   <select name="progress" id="progress" style="width:240px">
<?php echo ($proglist); ?>

</select></span>
									
								</p>
						  <p>
									<label>小说简介</label>
								<textarea name="book_info" style="width:800px;height:200px;visibility:hidden;"><?php echo getData('Book',$book_id,'book_info');?></textarea>
                              
							  </p>
                                
                                <p>
  
     <input name="dede_addonfields" value="" type="hidden">

                                   
                                </p>                                

								<p>
									<br><input class="button" name="imageField" value="编辑" type="submit">
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						
						
					</div> <!-- End #tab1 -->
					
					<div style="display: none;" class="tab-content" id="tab2">
						<fieldset> 
						
							<p>
								<label>发布时间</label>
                                    <input name="pubdate" value="2014-04-07 21:37:00" id="pubdate" style="width:220px" type="text">	 
							</p>
				  <script language="javascript" type="text/javascript">
					Calendar.setup({
						inputField     :    "pubdate",
						ifFormat       :    "%Y-%m-%d %H:%M:%S",
						showsTime      :    true,
						timeFormat     :    "24"
					});
				 </script> 
							
							<p>
								<label>作者</label>
								  <input class="text-input small-input" id="writer" name="writer" type="text">
							    
							</p>
							
							<p>
						    <label>来源</label>
								<input class="text-input small-input" id="source" name="source" type="text"> 
							</p>
							
							<p>
								<label>TAG标签</label>
								<input class="text-input small-input" name="tags" id="tags" style="width:300px" onchange="$Obj('keywords').value=this.value;" type="text">(','号分开，单个标签小于12字节)
							</p>
                            
							
							<p>
								<label>附加选项</label>
                                <input name="remote" class="np" id="remote" value="1" checked="checked" type="checkbox">
                                下载远程图片和资源
                                <input name="dellink" class="np" id="dellink" value="1" type="checkbox">
                                删除非站内链接 <a href="javascript:OpenMyWin('article_allowurl_edit.php');">[设置]</a>
                                <input name="autolitpic" class="np" id="autolitpic" value="1" checked="checked" type="checkbox">
                                提取第一个图片为缩略图
                                <input name="needwatermark" value="1" class="np" checked="checked" type="checkbox">
                                图片是否加水印
							</p>
                            
                            
							
							<p>
								<label>seo关键词</label>
								<input class="text-input small-input" name="keywords" id="keywords" type="text"><input name="Submit" value="浏览..." style="width:56;height:20" onclick="SelectKeywords('form1.keywords');" type="button"><input name="autokey" onclick="ShowHide('keywords');" ;="" class="np" id="autokey" value="1" checked="checked" type="checkbox">
自动获取，手动填写用","分开
							</p>
								
							<p>
								<label>标题颜色</label>
                                <input name="color" id="color" style="width:120px" type="text">
                                <input name="modcolor" id="modcolor" value="选取" onclick="ShowColor(event,this)" type="button">
							</p>							
							
							<p>
								<label>自定义文件名（可代替id为唯一标识，建议为小写字母，可以作为seo使用，例如标题拼音、英文翻译等）</label>
								<input class="text-input medium-input" id="filename" name="filename" type="text"> （不包括后缀名如.html等）
							</p>
							
							<p>
								<label>点击</label>
							  <input class="text-input small-input" name="click" value="86" style="width:100px;" type="text">
							</p>
							
						  <p>
						    <label>评论选项</label>
                              <input name="notpost" class="np" value="0" checked="checked" type="radio">允许评论
                              &nbsp;
                              <input name="notpost" class="np" value="1" type="radio">禁止评论                            

							</p>
							
							<p>
								<label>文章排序</label>
                                <select name="sortup" id="sortup" style="width:150px">
                                <option value="0" selected="selected">默认排序</option>
                                <option value="7">置顶一周</option>
                                <option value="30">置顶一个月</option>
                                <option value="90">置顶三个月</option>
                                <option value="180">置顶半年</option>
                                <option value="360">置顶一年</option>
                                </select>
							</p>
							<p>
								<label>权重</label>
								<input name="weight" id="weight" style="width:50px" value="0" type="text">(越小越靠前)
							</p>                            
							<p>
								<label>阅读权限</label>
                                <select name="arcrank" id="arcrank" style="width:150px">
                                         <option selected="selected" value="0">开放浏览</option>
     <option value="-1">待审核稿件</option>
     <option value="10">注册会员</option>
     <option value="50">中级会员</option>
     <option value="100">高级会员</option>
     <option value="20">低级会员</option>
     <option value="150">给力会员</option>
     <option value="180">超能会员</option>
                                </select> 
							</p>
                            
							<p>
								<label>消费金币</label>
                                <input class="text-input small-input" name="money" id="money" value="0" size="10" type="text">
							</p>
                                                        
                            							
							<p>
								<label>发布选项</label>
                                <input name="ishtml" value="1" checked="checked" type="radio">生成HTML 
                                <input name="ishtml" value="0" type="radio">仅动态浏览
							</p>
							
							<p>
								<label>分页方式</label>
                                <input name="sptype" class="np" value="hand" checked="checked" type="radio">
                                手动
                                <input name="sptype" value="auto" class="np" type="radio">
                                自动　大小：
                                <input name="spsize" id="spsize" value="5" size="6" type="text"> K
                                (分页符为： <font color="#FF0000">#p#分页标题#e# </font>)
							</p>

							
							<p>
									<br><input class="button" name="imageField" value="编辑" type="submit">
							</p>
								
						</fieldset>
						<div class="clear"></div><!-- End .clear -->
					</div> <!-- End #tab2 -->
					</form>
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
						<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	


</body></html>