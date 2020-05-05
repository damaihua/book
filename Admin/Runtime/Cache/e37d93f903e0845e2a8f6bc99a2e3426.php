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
			
			
			<div  class="content-box">
				<div  class="content-box-header">
					<h3  style="cursor: s-resize;">系统信息</h3>
				</div> 
				<div  class="content-box-content">
					<div  class="tab-content default-tab"  style="display: block;"> 
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
									<td><div  class="fRight mR10"  id="time"></div></td>
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
					
		</div> 	

 </body></html>