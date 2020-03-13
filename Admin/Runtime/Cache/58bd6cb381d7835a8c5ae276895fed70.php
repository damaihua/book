<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $cfg_soft_lang; ?>">
<title>数据库维护</title>
<link href='__PUBLIC__/admin/style/base.css' rel='stylesheet' type='text/css'>
<script language="javascript" src="__PUBLIC__/admin/js/jquery.js"></script>
<script language="javascript">

function LoadUrl(surl){
        $.get('__URL__/click',{'zhi':surl},function(data){
           alert(data);
        });
    }

function HideObj(objname){
   var obj = document.getElementById(objname);
   obj.style.display = "none";
}

//获得选中文件的数据表

function getCheckboxItem(){
	 var myform = document.form1;
	 var allSel="";
	 if(myform.tables.value) return myform.tables.value;
	 for(i=0;i<myform.tables.length;i++)
	 {
		 if(myform.tables[i].checked){
			 if(allSel=="")
				 allSel=myform.tables[i].value;
			 else
				 allSel=allSel+","+myform.tables[i].value;
		 }
	 }
	 return allSel;	
}

//反选
function ReSel(){
	var myform = document.form1;
	for(i=0;i<myform.tables.length;i++){
		if(myform.tables[i].checked) myform.tables[i].checked = false;
		else myform.tables[i].checked = true;
	}
}

//全选
function SelAll(){
	var myform = document.form1;
	for(i=0;i<myform.tables.length;i++){
		myform.tables[i].checked = true;
	}
}

//取消
function NoneSel(){
	var myform = document.form1;
	for(i=0;i<myform.tables.length;i++){
		myform.tables[i].checked = false;
	}
}

function checkSubmit()
{
	var myform = document.form1;
	myform.tablearr.value = getCheckboxItem();
	return true;
}

</script>
</head>
<body background='images/allbg.gif' leftmargin='8' topmargin='8'>
<table width="99%" border="0" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6">
  <tr> 
    <td height="19" colspan="8" background="images/tbg.gif" bgcolor="#E7E7E7">
    	<table width="96%" border="0" cellspacing="1" cellpadding="1">
        <tr> 
          <td width="24%" style="padding-left:10px;"><strong>数据库管理</strong></td>
          <td width="76%" align="right">
          	
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <form name="form1" onSubmit="checkSubmit()" action="__URL__/back" method="post">
  <input type='hidden' name='tablearr' value='' />
  <tr bgcolor="#F7F8ED"> 
    <td height="24" colspan="8"><strong>默认系统表：</strong></td>
  </tr>
  <tr bgcolor="#FBFCE2" align="center"> 
    <td height="24" width="5%">选择</td>
    <td width="20%">表名</td>
    <td width="8%">记录数</td>
    <td width="17%">操作</td>
  </tr>
 <?php if(is_array($re)): $i = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr bgcolor="#FFFFFF" align="center">
    <td height="24" width="5%">
	<input name="tables" type="checkbox" class="np" value="{$vo.Tables_in_new}" checked="checked" /> 
	</td>
    <td width="20%"><?php echo ($vo["Name"]); ?></td>
    <td width="8%"><?php echo ($vo["Rows"]); ?></td>
    <td>
    <a href="#" onClick="LoadUrl('optimize&{$vo.Tables_in_new}');">优化</a> |
    <a href="#" onClick="LoadUrl('repair&{$vo.Tables_in_new}');">修复</a> |
    <a href="#" onClick="LoadUrl('viewinfo&{$vo.Tables_in_new}');">结构</a>
  </td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>  
 
    <tr bgcolor="#ffffff"> 
      <td height="24" colspan="8">
      	&nbsp; 
        <input name="b1" type="button" id="b1" class="coolbg np" onClick="SelAll()" value="全选" />
        &nbsp; 
        <input name="b2" type="button" id="b2" class="coolbg np" onClick="ReSel()" value="反选" />
        &nbsp; 
        <input name="b3" type="button" id="b3" class="coolbg np" onClick="NoneSel()" value="取消" />&nbsp; 
		<input type="submit" name="Submit" value="备份" class="coolbg np" />
      </td>
  </tr>
  
   </form>

</table>
</body>
</html>