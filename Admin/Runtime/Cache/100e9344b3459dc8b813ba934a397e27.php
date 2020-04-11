<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
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
			<p  id="page-intro">快捷方式</p>
			
			<ul  class="shortcut-buttons-set">
				                                                             
				<li><a  class="shortcut-button"  href="/book/admin.php/book/book_add"><span>         
					<img  src="__PUBLIC__/admin/images/pencil.png"  alt="添加文章"><br>
					添加书籍
				</span></a></li>			
							
				
				<li><a  class="shortcut-button"  href="http://localhost/dede/dede/feedback_main.php"><span>
					<img  src="__PUBLIC__/admin/images/comment.png"  alt="评论管理"><br>
					评论管理
				</span></a></li>
                                          
				
			</ul>
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
			
			
			
			
									
		</div> 	
	


            </body></html>