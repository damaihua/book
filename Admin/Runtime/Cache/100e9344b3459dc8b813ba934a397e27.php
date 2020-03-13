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
			<p  id="page-intro">快捷方式</p>
			
			<ul  class="shortcut-buttons-set">
				                                                             
				<li><a  class="shortcut-button"  href="http://localhost/dede/dede/article_add.php"><span>         
					<img  src="__PUBLIC__/admin/images/pencil.png"  alt="添加文章"><br>
					添加文章
				</span></a></li>			
				<li><a  class="shortcut-button"  href="http://localhost/dede/dede/content_list.php"><span>
					<img  src="__PUBLIC__/admin/images/document.png"  alt="管理文章"><br>
					管理文章
				</span></a></li>				
				
				<li><a  class="shortcut-button"  href="http://localhost/dede/dede/feedback_main.php"><span>
					<img  src="__PUBLIC__/admin/images/comment.png"  alt="评论管理"><br>
					评论管理
				</span></a></li>
                
				<li><a  class="shortcut-button"  href="http://localhost/dede/dede/index_body.php#" ><span>  
					<img  src="__PUBLIC__/admin/images/post.png"  alt="发布内容"><br>
					发布内容
				</span></a></li>                  
                
				<li><a  class="shortcut-button"  href="http://localhost/dede/dede/makehtml_homepage.php"><span>
					<img  src="__PUBLIC__/admin/images/HTML.png"  alt="生成HTML"><br>
					生成HTML
				</span></a></li>
                
				<li><a  class="shortcut-button"  href="__APP__/siteset/sys_set"><span>
					<img  src="__PUBLIC__/admin/images/hammer.png"  alt="基本设置"><br>
					基本设置
				</span></a></li>                                
				
			</ul>
            <script>
                $(".shortcut-button").click(function(){
                    curhref=$(this).attr('href');
 
                    $("#main-nav li ul",window.parent.menu.document).hide(); // Slide up all sub menus except the one clicked

	  $(".nav-bottom-item[href='"+curhref+"']",window.parent.menu.document).parent().parent().show(); // Slide down the clicked sub menu
                    $(".nav-bottom-item",window.parent.menu.document).removeClass('current');
                    $(".nav-top-item",window.parent.menu.document).removeClass('current');
                    $(".nav-bottom-item[href='"+curhref+"']",window.parent.menu.document).addClass("current");
                    $(".nav-bottom-item[href='"+curhref+"']",window.parent.menu.document).parents("li").children(".nav-top-item").addClass("current");
                });        
        
    </script>            
			
			<div  class="clear"></div> 
			
			<div  class="content-box">
				
				<div  class="content-box-header">
					
					<h3  style="cursor: s-resize;">系统信息</h3>
					
					
					
					<div  class="clear"></div>
					
				</div> 
				
				<div  class="content-box-content">
					
					<div  class="tab-content default-tab"  id="tab1"  style="display: block;"> 
						
						
						
						<table>
						 
							<tbody>
								<tr  class="alt-row">
									<td>程序版本</td>
									<td>thinkphp<?php echo (THINK_VERSION); ?></td>
								</tr>
								<tr>
									<td>操作系统</td>
									<td>WINNT</td>
								</tr>
								<tr  class="alt-row">
									<td>网站域名/IP</td>
									<td><?php echo ($_SERVER['HTTP_HOST']); ?></td>
								</tr>
								<tr>
									<td>服务器解译引擎</td>
									<td><?php echo PHP_OS;?></td>
								</tr>
								<tr  class="alt-row">
									<td>PHP</td>
									<td>php <?php echo PHP_VERSION;?></td>
								</tr>
																<tr>
									<td>MySQL 版本</td>
									<td><?php echo PHP_VERSION;?></td>
								</tr>
																<tr  class="alt-row">
									<td>服务器时间</td>
									<td><div  class="fRight mR10"  id="time">2014年3月31日 上午1:03:50 星期一</div></td>
								</tr>
								<tr>
									<td>当前附件尺寸</td>
									<td>2M</td>
								</tr>
								<tr  class="alt-row">
									<td>服务器语言</td>
									<td>zh-CN,zh;q=0.8</td>
								</tr>

							</tbody>
							
						</table>
						
					</div> 
					
				</div> 
				
			</div> 
			
			<div  class="clear"></div>
			
									
		</div> 	
	


            </body></html>