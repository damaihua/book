<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理员帐号--新增帐号</title>

<link rel="stylesheet" href="admin_add.html1_files/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">

<script language="javascript">
	function checkSubmit()
  {
     if(document.form1.admin_name.value==""){
	     alert("用户名不能为空！");
	     document.form1.admin_name.focus();
	     return false;
     }
     
     if(document.form1.admin_pwd.value==""){
	     alert("用户密码不能为空！");
	     document.form1.admin_pwd.focus();
	     return false;
     }
	 
	 if(document.form1.admin_email.value==""){
	     alert("电子邮箱不能为空！");
	     document.form1.admin_email.focus();
	     return false;
     }
     return true;
 }
 
</script>
</head>
<body>

<div id="main-content">
<script language="javascript">
$("#sys").addClass("current");$("#sys_admin_user").addClass("current");</script>				

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">新增充值点卡</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
<table cellpadding="3" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">

<tbody><tr class="alt-row">
    <td align="center" bgcolor="#FFFFFF" height="215" valign="top">
	<form name="form1" action="__APP__/score/do_score_add" onsubmit="return checkSubmit();" method="post">
	
  <table cellpadding="1" cellspacing="1" border="0" width="98%">
          <tbody><tr> 
          
            <td height="30" width="16%">点卡积分：</td>
            <td style="text-align:left;" width="84%"><input name="paycard_score" id="paycard_score" size="16" style="width:200px" type="text"></td>
          </tr>
          
          <tr> 
            <td height="30">所需金钱：</td>
            <td style="text-align:left;"><input name="paycard_money" id="paycard_money" size="16" style="width:200px" type="text"> 
             RMB</td>
          </tr>
          
          
          
          
          
          <tr> 
            <td height="60">&nbsp;</td>         
            <td>
            <input class="button" name="Submit" value="增加点卡" type="submit">
            
           </td>
          </tr>
        </tbody></table>
      </form>
	  </td>
</tr>
</tbody></table>
						
						
					</div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
		
           			<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	

</body></html>