<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>组权限设置</title>
<link href="__PUBLIC__/admin/css/base.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="8" topmargin="8" background="__PUBLIC__/admin/images/allbg.gif">
<center>
<table cellpadding="2" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">
<form name="form1" action="sys_group_edit.php" method="post"></form> 
<input name="dopost" value="save" type="hidden">
  <tbody><tr>
    <td style="padding-left:10px;" align="left" background="__PUBLIC__/admin/images/tbg.gif" height="23"><b><a href="http://localhost/dede/dede/sys_group.php">系统用户组管理</a>&gt;&gt;更改用户组：</b></td>
</tr>
  <tr> 
    <td align="center" bgcolor="#FFFFFF" valign="top"> 
      <table cellpadding="0" cellspacing="0" border="0" width="98%">
        <tbody><tr> 
          <td height="30" width="9%">组名称：</td>
          <td style="text-align:left;" width="91%"> <input name="typename" id="typename" value="信息发布员" type="text"> 
          </td>
        </tr>
        
        
        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">1、特别权限(仅超级管理员使用)</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" class="np" id="purviews0" value="admin_AllowAll" type="checkbox">可以进行任意操作</td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">2、小说管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" type="checkbox" class="np" id="purviews1" value="c_List" checked="checked">
        		          	小说列表
        		          	<input name="purviews[]" class="np" id="purviews2" value="c_New" type="checkbox">
        		          	审核小说
        		          	<input name="purviews[]" class="np" id="purviews3" value="c_Edit" type="checkbox">
        		          	删除小说
        		          	</td></tr>
<tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" type="checkbox" class="np" id="purviews1" value="c_List" checked="checked">
        		          	章节列表
	          	  <input name="purviews[]" class="np" id="purviews2" value="c_New" type="checkbox">
        		          	审核章节
        		          	<input name="purviews[]" class="np" id="purviews3" value="c_Edit" type="checkbox">
        		          	删除章节
        		          	</td></tr>
                            <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" type="checkbox" class="np" id="purviews1" value="c_List" checked="checked">
        		          	分类列表
        		          	<input name="purviews[]" class="np" id="purviews2" value="c_New" type="checkbox">
        		          	增加分类
        		          	<input name="purviews[]" class="np" id="purviews3" value="c_Edit" type="checkbox">
        		          	修改分类<input name="purviews[]" class="np" id="purviews3" value="c_Edit" type="checkbox">
        		          	删除分类</td></tr>
        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">3、会员管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" class="np" id="purviews6" value="t_List" type="checkbox">
        		          	会员列表
	          	            <input name="purviews[]" class="np" id="purviews7" value="t_New" type="checkbox">添加会员
   	              <input name="purviews[]" class="np" id="purviews8" value="t_Edit" type="checkbox">
   	              修改会员<font color="#888888">&nbsp;</font>
          	      <input name="purviews[]" class="np" id="purviews9" value="t_Move" type="checkbox">
          	      删除会员
          	     </td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">4、管理员管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" type="checkbox" class="np" id="purviews6" value="t_List" checked="checked">
        		          	管理员列表
	          	            <input name="purviews[]" class="np" id="purviews7" value="t_New" type="checkbox">
	          	            添加管理员
   	                        <input name="purviews[]" class="np" id="purviews8" value="t_Edit" type="checkbox">
   	              修改管理员<font color="#888888">&nbsp;</font>
          	      <input name="purviews[]" class="np" id="purviews9" value="t_Move" type="checkbox">
          	      删除管理员
          	     </td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">5、积分管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" class="np" id="purviews31" value="co_NewRule" type="checkbox">管理数据规则模型
	          	  <input name="purviews[]" class="np" id="purviews32" value="co_Switch" type="checkbox">导入外部数据
	          	  <input name="purviews[]" class="np" id="purviews33" value="co_AddNote" type="checkbox">增加采集节点
	          	  <input name="purviews[]" class="np" id="purviews34" value="co_EditNote" type="checkbox">修改采集节点</td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">6、稿费管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" class="np" id="purviews41" value="temp_All" type="checkbox">管理所有模板<font color="#888888">(temp_All)</font>
          	<input name="purviews[]" class="np" id="purviews42" value="temp_New" type="checkbox">新建模板<font color="#888888">(temp_New)</font>
          	<input name="purviews[]" class="np" id="purviews43" value="temp_Edit" type="checkbox">修改模板<font color="#888888">(temp_Edit)</font>
          	<input name="purviews[]" class="np" id="purviews44" value="temp_Del" type="checkbox">删除模板<font color="#888888">(temp_Del)</font></td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">7、权限管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" type="checkbox" class="np" id="purviews49" value="spec_New" checked="checked">
        		          	用户组列表<font color="#888888">&nbsp;</font>
                  <input name="purviews[]" class="np" id="purviews50" value="spec_List" type="checkbox">
          	                添加用户组
          	                <input name="purviews[]" class="np" id="purviews51" value="spec_Edit" type="checkbox">
          	                修改用户组<input name="purviews[]" class="np" id="purviews51" value="spec_Edit" type="checkbox">
          	                删除用户组</td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">8、辅助插件管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" type="checkbox" class="np" id="purviews52" value="sys_User" checked="checked">
        		          	友情链接列表<font color="#888888">&nbsp;</font>
          	                <input name="purviews[]" class="np" id="purviews53" value="sys_Group" type="checkbox">
          	                友情链接删除
          	                <input name="purviews[]" class="np" id="purviews54" value="sys_MdPwd" type="checkbox">
          	                友情链接修改
          	                <input name="purviews[]" class="np" id="purviews55" value="sys_DelUpload" type="checkbox">
              友情链接删除</td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">9、系统设置管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="purviews[]" class="np" id="purviews73" value="member_Type" type="checkbox">
        		          	基本参数
        		          	<input name="purviews[]" type="checkbox" class="np" id="purviews74" value="member_List" checked="checked">
        		          	菜单列表<font color="#888888">&nbsp;</font>
                  <input name="purviews[]" class="np" id="purviews75" value="member_Edit" type="checkbox">
          	                增加菜单
          	                <input name="purviews[]" class="np" id="purviews76" value="member_Del" type="checkbox">
          	                修改菜单 <input name="purviews[]" class="np" id="purviews76" value="member_Del" type="checkbox">
                  删除菜单 <input name="purviews[]" class="np" id="purviews76" value="member_Del" type="checkbox">
          	                数据库备份 
          	                <input name="purviews[]" class="np" id="purviews76" value="member_Del" type="checkbox">
          	                数据库还原</td>
        </tr>
        
        
        <tr> 
          <td align="center" height="50">&nbsp;</td>
          <td height="50"><input class="np" name="imageField" src="__PUBLIC__/admin/images/button_save.gif" border="0" height="22" type="image" width="60">
          </td>
        </tr>
      </tbody></table>
    </td>
</tr>

</tbody></table>
</center>

</body></html>