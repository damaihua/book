<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员登录页面</title>
<link href="__PUBLIC__/admin/css/login.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/admin/js/j.js" language="javascript" type="text/javascript"></script>

</head>
<body>
<!--wrap-->
<div class="admin-content">
  <form  method="post" action="__URL__/check">
      <h2>管理员登录</h2>
    <div class="admin-loginItem">
      <span>帐号:</span>
      <input type="text"  name="admin_name" placeholder="请在此输入用户名/账号">
    </div>
    <div class="admin-loginItem">
      <span>密码:</span>
      <input type="password"  name="admin_pwd" placeholder="请在此输入密码">
    </div>
    <div class="admin-loginItem">
        <span>验证码:</span>
        <input class="code-txt" type="text"  name="verify" placeholder="请输入验证码">
        <img  src="__APP__/Public/verify/" alt="点击更换验证码"  onClick="this.src='__APP__/Public/verify/?rand='+Math.random();">
    </div>
    <input type="submit" value="登录" name="submit" class="login-btn" onClick="this.form.submit();" />





  </form>
  
  
</div>

</body>
</html>