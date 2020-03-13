<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>系统用户组管理</title>
<link href="__PUBLIC__/admin/css/base.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="8" topmargin="8" background="__PUBLIC__/admin/images/allbg.gif">
<table cellpadding="3" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">
  <form name="form1" action="content_att.php" method="post"></form>
    <input name="dopost" value="save" type="hidden">
    <tbody><tr> 
      <td colspan="3" background="__PUBLIC__/admin/images/tbg.gif" height="28">
       <table cellpadding="1" cellspacing="1" border="0" width="96%">
        <tbody><tr> 
          <td style="padding-left:10px;" width="24%"><b>系统用户组管理</b> </td>
          <td align="right" width="76%"><b>
          	<a href="http://gouguoyin.cn/admin/sys_group_add.php"><u>增加一个用户组</u></a>
          	|
            <a href="http://gouguoyin.cn/admin/sys_admin_user.php"><u>管理系统用户</u></a>
          	</b>
          </td>
        </tr>
      </tbody></table>
      </td>
    </tr>
    <tr align="center" bgcolor="#FBFCE2"> 
      <td height="24" width="20%">Rank</td>
      <td width="45%">组名称</td>
      <td width="35%">管理</td>
    </tr>
       <tr align="center" bgcolor="#FFFFFF"> 
      <td height="24"> 
        1      </td>
      <td height="24">
      	信息发布员      </td>
      <td>
        <a href="http://gouguoyin.cn/admin/sys_group_edit.php?rank=1">[权限设定]</a>
      	<a href="http://gouguoyin.cn/admin/sys_admin_user.php?rank=1">[组用户]</a>
            </td>
    </tr>
       <tr align="center" bgcolor="#FFFFFF"> 
      <td height="24"> 
        5      </td>
      <td height="24">
      	频道管理员      </td>
      <td>
        <a href="http://gouguoyin.cn/admin/sys_group_edit.php?rank=5">[权限设定]</a>
      	<a href="http://gouguoyin.cn/admin/sys_admin_user.php?rank=5">[组用户]</a>
            </td>
    </tr>
       <tr align="center" bgcolor="#FFFFFF"> 
      <td height="24"> 
        10      </td>
      <td height="24">
      	超级管理员      </td>
      <td>
        <a href="http://gouguoyin.cn/admin/sys_group_edit.php?rank=10">[权限设定]</a>
      	<a href="http://gouguoyin.cn/admin/sys_admin_user.php?rank=10">[组用户]</a>
            </td>
    </tr>
        <tr> 
      <td colspan="3" bgcolor="#F9FCEF" height="24">&nbsp;</td>
    </tr>
  
</tbody></table>


</body></html>