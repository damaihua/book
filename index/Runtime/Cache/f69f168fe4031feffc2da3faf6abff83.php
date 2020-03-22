<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0055)http://www.cuiweiju.com/modules/article/applywriter.php -->
<html  xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>作者申请--<?php echo (SITE_NAME); ?></title>
<meta name="keywords" content="<?php echo (SITE_KEYWORDS); ?>" />
<meta name="description" content="<?php echo (SITE_DESCRIPT); ?>" />
<link  rel="stylesheet"  rev="stylesheet"  href="__CSS__/style.css"  type="text/css"  media="all">
<link  rel="stylesheet"  rev="stylesheet"  href="__CSS__/main.css"  type="text/css"  media="all">
 <script charset="UTF-8"src="__PUBLIC__/kindeditor/kindeditor-min.js"></script> 
 	<script charset="UTF-8"src="__PUBLIC__/kindeditor/lang/zh_CN.js">
    </script>
    
    <script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="test_chapter"]', {
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
<script  language="javascript"  type="text/javascript"  src="__JS__/common.js"></script>
<script  language="javascript"  type="text/javascript"  src="__JS__/theme.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="__JS__/Validform_v5.3.2.js"></script>

<script type="text/javascript">
$(function(){
	//$(".registerform").Validform();  //就这一行代码！;
		
	$(".applyform").Validform({
		tiptype:function(msg,o,cssctl){
        if(!o.obj.is("form")){
				var objtip=o.obj.siblings(".Validform_checktip");
				cssctl(objtip,o.type);
				objtip.text(msg);
			 }
		}
    
		
		
	});
	
	
})
</script>

</head>
<body>

<!---头部部分--->
<div  id="top">
	<div class="wrap">
		<p class="top-welcome">欢迎访问在线阅读！</p>
		<div class="login-content"><?php echo showbar();?></div>
	</div>
</div>

<div id="head" class="clearfix">
	ROOT--------__ROOT__        //  URl   ---- __URL__     //APP---__APP__
	<h1><a href="__ROOT__"><img name="logo" src="__ROOT__/<?php echo (SITE_LOGO); ?>" width="222" height="53" alt="" /></a></h1>

	<div class="header-search">
		<form name="book" method="post" action="__URL__/index" target="_blank">
			<!-- /book/index.php/search/index.html -->
			<div class="header-searchCon">
				<select name="" class="search-sort">
					<option  name="searchtype" value="articlename" checked="checked">书名</option>
					<option  name="searchtype" value="author" >作者</option>
				</select>
			<input name="searchkey" type="text" class="search_text"> 
			<!-- <input type="radio" class="radio" name="searchtype" value="articlename" checked="checked" />书名 	
			<input type="radio" class="radio" name="searchtype" value="author" />作者 -->
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



<div  class="main">


<div  id="pbody">

	<div  class="row row_bg clearfix">
    	<div  class="title_pic ts">作者申请</div>
        <div  class="regulation">
        	<h2>作者申请条例：</h2>
         <p>1、所申请的文章必须自己的原创作品。如抄袭或者剽窃其他任何作品， 一切后果自行负责。</p>
              <p>2、申请本站成为专栏作家，即表示您授权翠微居发布此作品，并愿意在第一时间在翠微居上传您的作品。申请成功以后，您可以随时上传最新作品或最新章节，可以修改作品的基本信息，管理读者书评等。</p>
              <p>3、申请本站作家后，不得利用本站危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益，不得利用本站制作、复制和传播下列信息：</p>
              
        
              
              <p>本站有权对违反上述规定的作品进行屏蔽甚至删除处理，并对违反规定的用户进行处罚直至删除帐号。</p>
              
              <p>4、提交驻站申请以后，管理员会在24小时内处理完您的申请，一旦您的申请通过，请您务必在一周内上传您的作品，否则
本站有权取消驻站资格。首次发表的新作品不能马上在本站首页显示，需要通过本站管理员的二次审核(上传新作品后24小时内审核)以后，才能让读者观看您的
作品。</p>
              
              <h2>作者申请表单：</h2>
             
			  <form class="applyform"  action="__APP__/member/do_apply"  method="post" >
           <ul class='link'>
            <input name="user_id" id="user_id" value="<?php echo (session('user_id')); ?>" type="hidden">
		<li>
        <label>会员名：</label>
        <input name="user_name" type="text" disabled class="ad-wnameth1" value="<?php echo (session('user_name')); ?>" readonly>
        </li>
		<li>
        <label>真实姓名：</label><input type="text" class="ad-wnameth1" name="realy_name" maxlength="50" datatype="/^[\u4E00-\u9FA5\uf900-\ufa2d]{2,5}$/"  errormsg="真实姓名由2-5个汉字组成！"> <span class="Validform_checktip">(与身份证上姓名保持一致)</span>
        </li>
		
		<li>
        <label>身份证号码：</label><input type="text" class="ad-wnameth2" name="card_no" maxlength="70" datatype="/^\d{18}$/" nullmsg="请填写18位身份证号码！" errormsg="您填写的身份证号码不对！"><span class="Validform_checktip">请填写18位身份证号码！</span>
        </li>
		<li>
        <label>银行类型：</label>
        <select name='bank_type'>
        <option selected="selected" value="支付宝">支付宝（推荐）</option>
        <option value="工商银行">工商银行</option>
        <option value="建设银行">建设银行</option>
        <option value="农业银行">农业银行</option>
        <option value="招商银行">招商银行</option>
        <option value="邮政储蓄">邮政储蓄</option>
        <option value="中国银行">中国银行</option>
        </select>
        </li>
		<li>
        <label>银行账号：</label><input type="text" class="ad-wnameth2" name="bank_no" maxlength="30" datatype="/^\d{19}$/" nullmsg="请填写19位正确的银行账号！" errormsg="请填写19位正确的银行账号！"> <span class="Validform_checktip">请填写19位正确的银行账号！</span>
        </li>
		<li>
       
        <label>小说样章：</label><textarea name="test_chapter" tip="请输入不少于1000字的小说样章！" style="width:800px;height:400px;"></textarea>
        <span class="Validform_checktip">请输入不少于1000字的小说样章！</span>
        </li>
		
		<li class="ad-form-bd-info">如果提交审核的小说已经在别站发表，必须额外提交一章（至少2000字）该书从没发表过的新章节，以便审核通过！</li>
		<li class="ad-form-bd-submit"><input  type="submit"  class="agree_bt"  value="同意并申请"><input  name="action"  type="hidden"  value="applywriter"></li>
	</ul>
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
    <p>请作者发布作品时遵守国家互联网信息管理办法规定</p>
    <!-- <p><?php echo (SITE_COPYRIGHT); ?>&nbsp;&nbsp;<?php echo (SITE_BEIAN); ?></p> -->
    
</div>


</body>
</html>