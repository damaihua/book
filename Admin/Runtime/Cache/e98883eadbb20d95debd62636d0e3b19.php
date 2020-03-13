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
          	<a href="__APP__/admin/group_add"><u>增加一个用户组</u></a>
          	|
            <a href="__APP__/admin/admin_main"><u>管理系统用户</u></a>
          	</b>
          </td>
        </tr>
      </tbody></table>
      </td>
    </tr>
    <tr align="center" bgcolor="#FBFCE2"> 
      <td height="24" width="20%">ID</td>
      <td width="45%">组名称</td>
      <td width="35%">管理</td>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" bgcolor="#FFFFFF"> 
      <td height="24"> 
       <?php echo ($vo["group_id"]); ?> </td>
      <td height="24">
      	<?php echo ($vo["group_name"]); ?> </td>
      <td>
        <a href="http://gouguoyin.cn/admin/sys_group_edit.php?rank=1">[修改]</a>
      	<a href="__APP__/admin/group_del?id=<?php echo ($vo["group_id"]); ?>" onclick="return confirm('确定要删除?')">[删除]</a>
            </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody></table>


</body></html>