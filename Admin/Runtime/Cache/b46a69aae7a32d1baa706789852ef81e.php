<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $cfg_softname." ".$cfg_version; ?></title>
<link href="__PUBLIC__/admin/css/login.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/admin/js/j.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript">
function changeAuthCode() {
	var num = 	new Date().getTime();
	var rand = Math.round(Math.random() * 10000);
	num = num + rand;
	$('#ver_code').css('visibility','visible');
	if ($("#vdimgck")[0]) {
		$("#vdimgck")[0].src = "../include/vdimgck.php?tag=" + num;
	}
	return false;	
}
</script>
</head>
<body>
<!--wrap-->
<div class="wrap">
  <!-- 头部 -->
  <div class="ln_top">
    <h1 class="ln_logo">
      <script type="text/javascript">
           	var now=(new Date()).getHours();
			if(now>0&&now<=6){
				document.write("午夜好，");
			}else if(now>6&&now<=11){
				document.write("早上好，");
			}else if(now>11&&now<=14){
				document.write("中午好，");
			}else if(now>14&&now<=18){
				document.write("下午好，");
			}else{
				document.write("晚上好，");
			}
			</script>欢迎登录听雨轩在线书城网站后台控制管理面板
    </h1>
    <ul class="ln_top_nav">
                    <li><a href="__ROOT__" target="_blank">点此返回网站主页</a>/</li>
       <li><a href="../member" target="_blank">会员中心</a>/</li>
        <li><a href="http://www.dedecms.com" target="_blank" title="织梦官方论坛">官方网站</a>/<a href="../bbs" target="_blank" >书友论坛</a></li>
                </ul>
  </div>
  <!-- 头部 end -->
  <!--ln_main-->
  <div class="ln_main">
    <p id="error_info" class="ln_error" style="display:none;"></p>

    <form  method="post" action="__URL__/check">

      <input type="hidden" name="gotopage" value="<?php if(!empty($gotopage)) echo $gotopage;?>" />
      <input type="hidden" name="dopost" value="login" />
      <input name='adminstyle' type='hidden' value='newdedecms' />
    <table border="0" cellspacing="0" cellpadding="0" class="ln_login" id="login_area">
      <tbody>
        <tr>
          <td class="in_login_de">帐号:</td>
          <td><input type="text" name="admin_name" class="ln_text co_b6" value="请在此输入用户名/账号" onFocus="if(this.value=='请在此输入用户名/账号'){this.value='';}" onBlur="if(this.value==''){this.value='请在此输入用户名/账号';}"/>
          </td>
        </tr>
        <tr>
          <th>密码:</th>
          <td><input type="password" name="admin_pwd" class="ln_text"/></td>
        </tr>
        <tr>
          <th>验证码:</th>
          <td><input id="vdcode" type="text" name="verify" class="ln_text ln_text_74"/>
            <img  src="__APP__/Public/verify/" alt="点击更换验证码" style="cursor:pointer;" onClick="this.src='__APP__/Public/verify/?rand='+Math.random();">
            <p >看不清可点击图片切换验证码！</p>
          </td>
        </tr>
        <tr>
          <th> </th>
          <td><input type="submit" value="" name="submit" class="ln_btn_login" onClick="this.form.submit();" /></td>
        </tr>
        <tr>
          <th> </th>
          <td><a id="findpwd_link" href="../member/resetpassword.php" target="_blank" title="忘记密码">忘记密码</a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                                id="register_link" href="../member/index_do.php?fmdo=user&dopost=regnew" target="_blank" title="免费注册">免费注册</a> </td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2">
            <div style="margin-top:25px; color:#666;"><script type="text/javascript">
           	var now=(new Date()).getHours();
			if(now>0&&now<=6){
				document.write("午夜好，");
			}else if(now>6&&now<=11){
				document.write("早上好，");
			}else if(now>11&&now<=14){
				document.write("中午好，");
			}else if(now>14&&now<=18){
				document.write("下午好，");
			}else{
				document.write("晚上好，");
			}
			</script>
          您也可以继续访问您的  <a href="__ROOT__" target="_blank">网站主页</a></div>
          </td>
        </tr>
      </tfoot>
    </table>
    </form>
    
  </div>
  <!--ln_main end-->
  
</div>
<!--wrap end-->
<!-- 底部 -->
<div class="ln_footer">
  <div class="ln_footer_content"><?php echo $redmsg; ?> </div>
  <div class="ln_footer_content"><?php echo $cfg_powerby?></div>
</div>
<!-- 底部 end -->
</body>
</html>