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

<script  language="javascript"  type="text/javascript">
	window.onload=function (){
		setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
	}
</script>
	
</head>
<body>
<div  id="main-content">
			
			<h2>欢迎访问网站管理后台</h2>
			 <script>
    //             $(".shortcut-button").click(function(){
    //                 curhref=$(this).attr('href');
 
    //                 $("#main-nav li ul",window.parent.menu.document).hide(); // Slide up all sub menus except the one clicked

	//   $(".nav-bottom-item[href='"+curhref+"']",window.parent.menu.document).parent().parent().show(); // Slide down the clicked sub menu
    //                 $(".nav-bottom-item",window.parent.menu.document).removeClass('current');
    //                 $(".nav-top-item",window.parent.menu.document).removeClass('current');
    //                 $(".nav-bottom-item[href='"+curhref+"']",window.parent.menu.document).addClass("current");
    //                 $(".nav-bottom-item[href='"+curhref+"']",window.parent.menu.document).parents("li").children(".nav-top-item").addClass("current");
    //             });        
        
    </script>            
			
			<div class="clear"></div> 
			
			<div  class="content-box">
				
				<div  class="content-box-header">
					
					<h3  style="cursor: s-resize;">新增章节</h3>
					
					
					
					<div  class="clear"></div>
					
				</div> 
				
				<div  class="content-box-content">
                    
					<form name="form" action="__URL__/do_chapter_edit" enctype="multipart/form-data" method="post" onsubmit="return checkSubmit()" >
						
                        <input name="chapter_id" value="<?php echo ($chapter_id); ?>" type="hidden">
                        <input name="book_name" value="<?php echo ($chapter['book_name']); ?>" type="hidden">
                        
						<fieldset> 
							<p>
								<label>小说标题</label>
								<input name="book_name" style="width:80px" type="text" value="<?php echo ($chapter['book_name']); ?>" disabled> 
							</p>
							<p>
                                <label>章节名</label>   
                                <!-- <?php echo getData('Book',$book_id,'book_name');?> -->
								<input name="chapter_title" style="width:80px" type="text" value="<?php echo getData('Chapter',$chapter_id,'chapter_title');?>"> 
							</p>
							
							<p>
								<label>收费\免费</label>
								<input name="charge" value="0" class="np" type="radio" <?php if($chapter["charge"] == 0): ?>checked <?php else: endif; ?>>
                                    免费&nbsp;  
                                    <input name="charge" value="1" class="np" type="radio" <?php if($chapter["charge"] == 1): ?>checked <?php else: endif; ?>>
                                    收费 
							</p>
							<p>
								<label>所需积分</label>
								<input name="chapter_much" style="width:80px" type="text" value="<?php echo getData('Chapter',$chapter_id,'much');?>"> 
							</p>
							<p>
								<label>内容</label>
                                <textarea name="chapter_content" style="width:800px;height:200px;" >
                                    <?php echo getData('Chapter',$chapter_id,'content');?>
                                </textarea>
							</p>

							<input class="button" name="submit" value="修改" type="submit">
						</fieldset>
					</form>
					
				</div> 
				
			</div> 
			
			
			
									
		</div> 	
	


            </body></html>