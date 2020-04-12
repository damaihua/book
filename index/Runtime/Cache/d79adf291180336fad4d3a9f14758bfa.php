<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" rev="stylesheet" href="__CSS__/style.css" type="text/css" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="__CSS__/main.css" type="text/css" media="all" />
    <script language="javascript" type="text/javascript" src="__JS__/common.js"></script>
    <script language="javascript" type="text/javascript" src="__JS__/theme.js"></script>
    <script language="javascript" src="__JS__/rating.js"></script>
    <script type="text/javascript" src="__JS__/jquery.tools.min.js"></script>
</head>
<body>
    <div  id="top">
	<div class="wrap">
		<p class="top-welcome">您好，欢迎来访！</p>
		<div class="login-content"><?php echo showbar();?></div>
	</div>
</div>

<div id="head" class="clearfix">
	
	<h1><a href="__ROOT__"><img name="logo" src="__ROOT__/<?php echo (SITE_LOGO); ?>" width="222" height="53" alt="" /></a></h1>

	<div class="header-search">
		<form name="book" method="post" action="__URL__/index" target="_blank">
			
			<div class="header-searchCon">
				<select name="" class="search-sort">
					<option  name="searchtype" value="articlename" checked="checked">书名</option>
					<option  name="searchtype" value="author" >作者</option>
				</select>
			<input name="searchkey" type="text" class="search_text"> 
			
			<input type="submit" class="search_submit" value="搜索"></div>
		</form>
	</div>
</div>
<div id="menu_bar">
	<div id="nav">
	 <?php echo showHeadermenu();?>
	 </div>
    <div class="type-nav">
		<div class="wrap">
			<?php echo showcats();?>
		</div>
    </div>
    
</div>


    
    <div class="wrap clearfix mb20">
        <div class="c_left">
            <span class="ph">
                <img alt="<?php echo ($book_info[0]['book_name']); ?>" src="__ROOT__/<?php echo ($book_info[0]['book_cover']); ?>" />
            </span>
            <span class="prg">上架时间:<?php echo (date('Y-m-d',$book_info[0]['public_time'])); ?></span>

            <ul>
                <li><em>小说标签：</em>
                    <?php echo ($book_info[0]['tags']); ?>
                </li>
                <li><em>写作进程：</em>
                    <?php echo ($progress); ?>
                </li>
                <li><em>作品字数：</em>
                    <?php echo ($book_info[0]['book_size']); ?>
                </li>

            </ul>
        </div>
        <div class="c_right">
            <h3>
                <?php echo ($book_info[0]['book_name']); ?>
            </h3>
            <div class="info">
                <!-- <span>总点击：<?php echo ($book_info[0]['hits']); ?></span> -->
                <p class="author">作者：
                    <?php echo ($book_info[0]['writer']); ?>
                </p>
            </div>
            <div class="sum hidden clearfix">
                <h4>作品简介 </h4>

                <div>
                    <?php echo (htmlspecialchars_decode($book_info[0]['book_info'])); ?>
                </div>
            </div>
            <div class="fun clearfix">

                <a class="bt_vip" href="__APP__/chapters/chaplist/book_id/<?php echo ($book_info[0]['book_id']); ?>">阅读本书
                </a>
            </div>
            <div class="author_lable">
                <strong>标签:</strong>
                <?php if(is_array($tags)): foreach($tags as $key=>$vo): ?><a href="__APP__/booksear/index/type/tag/val/<?php echo ($vo); ?>" target="_blank">
                        <?php echo ($vo); ?>
                    </a><?php endforeach; endif; ?>
            </div>

        </div>
    </div>
    <div class="clearfix wrap mb20">
        <div class="update-chapter">
            <h3 class="chapter-headline">小说更新列表</h3>
            <div class="book_view">
                <h4><span>更新于: <?php echo (date("Y-m-d H:i",$chap['update_time'])); ?></span>
                    <a href="/html/127/127180/6682713.html">
                        <?php echo ($chap['chapter_title']); ?>
                    </a></h4>
                <div>
                    <!-- <?php echo (substr($chap['content'],0,992)); ?> -->
                    <?php echo (substr(htmlspecialchars_decode($chap['content']),0,1000)); ?>
                    <!-- |htmlspecialchars_decode -->
                        <span>......</span>
                </div>
            </div>

        </div>

    </div>
    
    <div class="wrap mb20">
        <div class="update-chapter">
            <h3 class="chapter-headline">《<?php echo ($book_info[0]['book_name']); ?>》 书评区</h3>
            <div class="clearfix" style="background:#fff;">
                <div>
                    <div class="cmt_list">
                        <ul>
                            <?php if(is_array($comment)): foreach($comment as $key=>$vo): ?><li>
                                    <h4>
                                        <?php echo ($vo["title"]); ?>
                                    </h4>
                                    <div class="comment-content">
                                        <?php echo ($vo["content"]); ?>
                                    </div>
                                    <p class="info">
                                        <span>发表人<strong>
                                                <?php echo ($vo["user_name"]); ?>
                                            </strong></span>
                                        <span>时间：<?php echo (date("Y-m-d H;i",$vo["time"])); ?></span>
                                    </p>
                                </li><?php endforeach; endif; ?>

                        </ul>
                    </div>
                    <p style="text-align:center;color:gray">
                        <?php echo ($page); ?>
                    </p>
                </div>
                <div class="cmt_box main_form">
                    <h4 class="form-title">发表评论</h4>
                    <form name="frmreview" id="frmreview" method="post" action="__APP__/chapters/comment">
                        <table cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td class="t1">
                                        <label>评论标题：</label>
                                    </td>
                                    <td>
                                        <input type="text" class="text" style="width:590px;" name="ptitle" id="ptitle"
                                            maxlength="60" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="t1">
                                        <label>评论内容：</label></td>
                                    <td>
                                        <textarea class="iptxt" style="width:595px;height:150px;" name="pcontent"
                                            id="pcontent"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>&nbsp;
                                        <input type="hidden" name="action" id="action" value="newpost" />
                                    </td>
                                    <input type="hidden" name="book_id" value="<?php echo ($book_info[0]['book_id']); ?>" />
                                    <td>
                                        <input type="submit" name="Submit" class="button" value=" 发表评论 ">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--foot底部部分--->
    
<div class="cb"></div>
<div id="footer">
	<div class="foot_nav">
    	
        <?php echo showFootermenu();?>
    </div>
    <p>版权仅自己所有</p>
   
    
</div>

</body>
</html>