<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>组权限设置</title>
<link href="__PUBLIC__/admin/css/base.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="8" topmargin="8" background="__PUBLIC__/admin/images/allbg.gif">
<center>
<form name="form1" action="__APP__/admin/do_group_add" method="post">
<table cellpadding="2" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">


  <tbody><tr>
    <td style="padding-left:10px;" align="left" background="__PUBLIC__/admin/images/tbg.gif" height="23">系统用户组管理&gt;&gt;添加用户组：</td>
</tr>
  <tr> 
    <td align="center" bgcolor="#FFFFFF" valign="top"> 
      <table cellpadding="0" cellspacing="0" border="0" width="98%">
        <tbody><tr> 
          <td height="30" width="9%">组名称：</td>
          <td style="text-align:left;" width="91%"> <input name="group_name" id="group_name" type="text"> 
          </td>
        </tr>
        
        
        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">1、特别权限(仅超级管理员使用)</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" class="np" id="role_id0" value="all" type="checkbox">
        		          	可以进行任意操作(all)</td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">2、小说管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" type="checkbox" class="np" id="role_id1" value="blist" checked="checked">
        		          	小说列表(blist)
        		          	<input name="role_id[]" class="np" id="role_id2" value="bmod" type="checkbox">
        		          	审核小说(bmod)
        		          	<input name="role_id[]" class="np" id="role_id3" value="bdel" type="checkbox">
        		          	删除小说(bdel)
        		          	</td></tr>
<tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" type="checkbox" class="np" id="role_id1" value="clist" checked="checked">
        		          	章节列表(clist)
	          	            <input name="role_id[]" class="np" id="role_id2" value="cmod" type="checkbox">
        		          	审核章节(cmod)
        		          	<input name="role_id[]" class="np" id="role_id3" value="cdel" type="checkbox">
        		          	删除章节(cdel)
        		          	</td></tr>
                            <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" type="checkbox" class="np" id="role_id1" value="catlist" checked="checked">
        		          	分类列表(catlist)
        		          	<input name="role_id[]" class="np" id="role_id2" value="catadd" type="checkbox">
        		          	增加分类
        		          	(catadd)
        		          	<input name="role_id[]" class="np" id="role_id3" value="catmod" type="checkbox">
        		          	修改分类(catmod)
        		          	<input name="role_id[]" class="np" id="role_id3" value="catdel" type="checkbox">
        		          	删除分类(catdel)</td></tr>
        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">3、会员管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" type="checkbox" class="np" id="role_id6" value="mlist" checked="checked">
        		          	会员列表(mlist)
   	              <input name="role_id[]" class="np" id="role_id7" value="madd" type="checkbox">
	          	            添加会员(madd)
   	                        <input name="role_id[]" class="np" id="role_id8" value="mmod" type="checkbox">
   	              修改会员(mmod)<font color="#888888">&nbsp;</font>
          	      <input name="role_id[]" class="np" id="role_id9" value="mdel" type="checkbox">
          	      删除会员(mdel)
          	     </td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">4、管理员管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" type="checkbox" class="np" id="role_id6" value="alist" checked="checked">
        		          	管理员列表(alist)
	          	            <input name="role_id[]" class="np" id="role_id7" value="aadd" type="checkbox">
	          	            添加管理员(aadd)
   	                        <input name="role_id[]" class="np" id="role_id8" value="amod" type="checkbox">
   	              修改管理员(amod)<font color="#888888">&nbsp;</font>
          	      <input name="role_id[]" class="np" id="role_id9" value="adel" type="checkbox">
          	      删除管理员(adel)
          	     </td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">5、积分管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" class="np" id="role_id31" value="co_NewRule" type="checkbox">管理数据规则模型
	          	  <input name="role_id[]" class="np" id="role_id32" value="co_Switch" type="checkbox">导入外部数据
	          	  <input name="role_id[]" class="np" id="role_id33" value="co_AddNote" type="checkbox">增加采集节点
	          	  <input name="role_id[]" class="np" id="role_id34" value="co_EditNote" type="checkbox">修改采集节点</td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">6、稿费管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" class="np" id="role_id41" value="temp_All" type="checkbox">管理所有模板<font color="#888888">(temp_All)</font>
          	<input name="role_id[]" class="np" id="role_id42" value="temp_New" type="checkbox">新建模板<font color="#888888">(temp_New)</font>
          	<input name="role_id[]" class="np" id="role_id43" value="temp_Edit" type="checkbox">修改模板<font color="#888888">(temp_Edit)</font>
          	<input name="role_id[]" class="np" id="role_id44" value="temp_Del" type="checkbox">删除模板<font color="#888888">(temp_Del)</font></td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">7、权限管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" type="checkbox" class="np" id="role_id49" value="glist" checked="checked">
        		          	用户组列表(glist)<font color="#888888">&nbsp;</font>
                            <input name="role_id[]" class="np" id="role_id50" value="spec_List" type="checkbox">
          	                添加用户组(gadd)
          	                <input name="role_id[]" class="np" id="role_id51" value="gmod" type="checkbox">
          	                修改用户组(gmod)
          	                <input name="role_id[]" class="np" id="role_id51" value="gdel" type="checkbox">
          	                删除用户组(gdel)</td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">8、辅助插件管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" type="checkbox" class="np" id="role_id52" value="llist" checked="checked">
        		          	友情链接列表(llist)<font color="#888888">&nbsp;</font>
          	                <input name="role_id[]" class="np" id="role_id53" value="ladd" type="checkbox">
          	                增加友情链接(ladd)
          	                <input name="role_id[]" class="np" id="role_id54" value="lmod" type="checkbox">
          	                友情链接修改(lmod)
          	                <input name="role_id[]" class="np" id="role_id55" value="ldel" type="checkbox">
              友情链接删除(ldel)</td></tr>

        	 <tr> 
           <td colspan="2" style="text-align:left;" bgcolor="#F9FAF3" height="25">9、系统设置管理</td></tr>
           <tr><td colspan="2" style="text-align:left;" height="25">
        		          	<input name="role_id[]" class="np" id="role_id73" value="sys" type="checkbox">
        		          	基本参数(sys)
        		          	<input name="role_id[]" type="checkbox" class="np" id="role_id74" value="menulist" checked="checked">
        		          	菜单列表(menulist)<font color="#888888">&nbsp;</font>
                            <input name="role_id[]" class="np" id="role_id75" value="menuadd" type="checkbox">
          	                增加菜单(menuadd)
          	                <input name="role_id[]" class="np" id="role_id76" value="menumod" type="checkbox">
          	                修改菜单(menumod) 
          	                <input name="role_id[]" class="np" id="role_id76" value="menudel" type="checkbox">
                  删除菜单(menudel) 
                  <input name="role_id[]" class="np" id="role_id76" value="dbback" type="checkbox">
          	                数据库备份(dbback) 
          	                <input name="role_id[]" class="np" id="role_id76" value="redb" type="checkbox">
          	                数据库还原(redb)</td>
        </tr>
        
        
        <tr> 
          <td align="center" height="50">&nbsp;</td>
          <td height="50"><input    type="submit" value="确认添加">
          </td>
        </tr>
      </tbody></table>
    </td>
</tr>

</tbody></table>
</form> 
</center>

</body></html>