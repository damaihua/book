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
			
			<div  class="clear"></div> 
			
			<div  class="content-box">
				
				<div  class="content-box-header">
					
					<h3  style="cursor: s-resize;">小说列表</h3>
					
					
					
					<div  class="clear"></div>
					
				</div> 
				
				<div  class="content-box-content">
					
					<div  class="tab-content default-tab"  id="tab1"  style="display: block;"> 
						
						<table> 
							<tbody>
								<tr  class="alt-row">
									 <th width="10%">序号11</th>
									<th width="20%">小说名</th>
									 <th width="15%">作者</th>
									 <th width="15%">上架时间</th>
									 <th width="10%">最新更新</th>
									<th width="10%">总点击</th>
									<th width="25%">&nbsp;&nbsp;编&nbsp;辑</td>
								</tr>
								<?php if(is_array($books)): foreach($books as $i=>$vo): ?><tr>
											<td class="odd" align="center"><?php echo ($i++); ?></td>
											<td class="odd" align="center">
												
												<a href="__APP__/book/chapter_list/book_id/<?php echo ($vo["book_id"]); ?>"><?php echo ($vo["book_name"]); ?>
											</td>
											<td class="odd" align="center">
												<a href=""><?php echo ($vo["user_name"]); ?>
											</td>
											<td class="odd" align="center"> <?php echo (date("Y-m-d",$vo["public_time"])); ?></td>
											<td class="odd" align="center"><?php echo (date("m-d H:i",$vo["update_time"])); ?></td>
											<td class="odd" align="center"><?php echo ($vo["hits"]); ?></td>
											<td class="odd" align="center">
												<a href="__URL__/del/book_id/<?php echo ($vo["book_id"]); ?>">删除</a>
											</td>
										</tr><?php endforeach; endif; ?>
								<tr>
									<td colspan="7" text-align="right">page<?php echo ($page); ?></td>
								</tr>
								</tbody>
							
						</table>
						
					</div> 
					
				</div> 
				
			</div> 
			
			<div  class="clear"></div>
			
									
		</div> 	
	


            </body></html>