<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>系统配置参数</title>

<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">
<script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>	

<script language="javascript">
var searchconfig = false;
function Nav()
{
	if(window.navigator.userAgent.indexOf("MSIE")>=1) return 'IE';
	else if(window.navigator.userAgent.indexOf("Firefox")>=1) return 'FF';
	else return "OT";
}
function $Obj(objname)
{
	return document.getElementById(objname);
}
function ShowConfig(em,allgr)
{
	if(searchconfig) location.reload();
	for(var i=1;i<=allgr;i++)
	{
		if(i==em) $Obj('td'+i).style.display = (Nav()=='IE' ? 'block' : 'table');
		else $Obj('td'+i).style.display = 'none';
	}
	$Obj('addvar').style.display = 'none';
}

function ShowHide(objname)
{
	var obj = $Obj(objname);
	if(obj.style.display != "none") obj.style.display = "none";
	else obj.style.display = (Nav()=='IE' ? 'block' : 'table-row');
}

function backSearch()
{
	location.reload();
}
function getSearch()
{
	var searchKeywords = $Obj('keywds').value;
	var myajax = new DedeAjax($Obj('_search'));
	myajax.SendGet('sys_info.php?dopost=search&keywords='+searchKeywords)
	$Obj('_searchback').innerHTML = '<input name="searchbackBtn" type="button" value="返回" id="searchbackBtn" onclick="backSearch()"/>'
	$Obj('_mainsearch').innerHTML = '';
	searchconfig = true;
}
</script>
</head>
<body>

<div id="main-content">
<script language="javascript">
$("#sys").addClass("current");$("#sys_info").addClass("current");</script>				

	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
			    <h3 style="cursor: s-resize;">系统配置参数</h3>
					
					<ul class="content-box-tabs">

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
<div style="display: block;" class="tab-content  default-tab" id="tab1">				
<div style="min-width:780px">
 <table cellpadding="2" cellspacing="1" align="center" border="0" width="98%">

  <tbody><tr class="alt-row">
   <td align="center"> <a href="javascript:ShowConfig(1,8)">站点设置</a>  | <a href="javascript:ShowConfig(2,8)">核心设置</a>  | <a href="javascript:ShowConfig(3,8)">附件设置</a>  | <a href="javascript:ShowConfig(4,8)">会员设置</a>  | <a href="javascript:ShowConfig(5,8)">互动设置</a>  | <a href="javascript:ShowConfig(6,8)">性能选项</a>  | <a href="javascript:ShowConfig(7,8)">其它选项</a>  | <a href="javascript:ShowConfig(8,8)">模块设置</a>     | <a href="#" onclick="ShowHide('addvar')">添加新变量</a></td>
  </tr>
  
 </tbody></table>
 <table style="margin-top:10px" cellpadding="0" cellspacing="0" align="center" border="0" width="98%">
  <tbody>
  <tr class="alt-row">
   <td width="100%">
   <form action="__URL__/sys_edit" method="post" enctype="multipart/form-data">

<div id="_mainsearch">
          <table style="" id="td1" cellpadding="1" cellspacing="1" border="0" width="100%">
      <tbody><tr align="center" bgcolor="#FBFCE2" height="25">
       <td width="300">参数说明</td>
       <td>参数值</td>
       <td width="220">变量名</td>
      </tr>
      <input name="id" id="id" value="<?php echo ($data['id']); ?>" type="hidden">
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">网站名称： </td>
       <td style="padding:3px;" align="left"><input name="site_name" type="text" id="site_name" style="width:80%" value="<?php echo ($data['site_name']); ?>"></td>
       <td>site_name</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">网站logo： </td>
       <td style="padding:3px;" align="left"><input name="site_logo" id="site_logo" style="width:40%" type="file" ></td>
       <td>site_logo</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">网站关键字： </td>
       <td style="padding:3px;" align="left"><input name="site_keywords" type="text" id="site_keywords" style="width:80%" value="<?php echo ($data['site_keywords']); ?>"></td>
       <td>site_keywords</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">网站描述： </td>
       <td style="padding:3px;" align="left"><textarea name="site_descript" row="4" id="site_descript" class="textarea_info" style="width:98%;height:50px"><?php echo ($data['site_descript']); ?></textarea></td>
       <td>site_descript</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">网站风格： </td>
       <td style="padding:3px;" align="left"><input name="site_style" type="text" id="site_style" style="width:80%" value="<?php echo ($data['site_style']); ?>"></td>
       <td>site_style</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">网站版权： </td>
       <td style="padding:3px;" align="left"><input name="site_copyright" type="text" id="site_copyright" style="width:80%" value="<?php echo ($data['site_copyright']); ?>"></td>
       <td>site_copyright</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">备案号： </td>
       <td style="padding:3px;" align="left"><input name="site_beian" type="text" id="site_beian" style="width:80%" value="<?php echo ($data['site_beian']); ?>"></td>
       <td>site_beian</td>
      </tr><tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">允许会员注册： </td>
       <td style="padding:3px;" align="left"><input class="np" name="allow_reg" value="1" type="radio" <?php if($data["allow_reg"] == 1): ?>checked <?php else: endif; ?>>是<input class="np" name="allow_reg" value="0"  type="radio" <?php if($data["allow_reg"] == 0): ?>checked <?php else: endif; ?>>否</td>
       <td>site_status</td>
      </tr>
      <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">注册成功发送邮件： </td>
       <td style="padding:3px;" align="left"><input class="np" name="reg_send_email" value="1" type="radio" <?php if($data["reg_send_email"] == 1): ?>checked <?php else: endif; ?>>是<input class="np" name="reg_send_email" value="0"  type="radio" <?php if($data["reg_send_email"] == 0): ?>checked <?php else: endif; ?>>否</td>
       <td>site_status</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">关闭网站： </td>
       <td style="padding:3px;" align="left"><input class="np" name="site_status" value="0" type="radio" <?php if($data["site_status"] == 0): ?>checked <?php else: endif; ?>>是<input class="np" name="site_status" value="1"  type="radio" <?php if($data["site_status"] == 1): ?>checked <?php else: endif; ?>>否</td>
       <td>site_status</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">网站关闭提示信息： </td>
       <td style="padding:3px;" align="left"><textarea name="close_info" row="4" id="close_info" class="textarea_info" style="width:98%;height:50px"><?php echo ($data['close_info']); ?></textarea></td>
       <td>close_info</td>
      </tr>
            
            
            
           </table>
          <table style="display:none" id="td2" cellpadding="1" cellspacing="1" border="0" width="100%">
      <tbody><tr class="alt-row" align="center" bgcolor="#FBFCE2" height="25">
       <td width="300">参数说明</td>
       <td>参数值</td>
       <td width="220">变量名</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">DedeCMS安装目录： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_cmspath" id="edit___cfg_cmspath" value="/dede" style="width:80%" type="text"></td>
       <td>cfg_cmspath</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">cookie加密码： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_cookie_encode" id="edit___cfg_cookie_encode" value="EOeKVcnd7HApYmAA9shVuOXGkivysVMF" style="width:80%" type="text"></td>
       <td>cfg_cookie_encode</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">数据备份目录（在data目录内）： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_backup_dir" id="edit___cfg_backup_dir" value="backupdata" style="width:80%" type="text"></td>
       <td>cfg_backup_dir</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">网站发信EMAIL： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_adminemail" id="edit___cfg_adminemail" value="admin@dedecms.com" style="width:80%" type="text"></td>
       <td>cfg_adminemail</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">Html编辑器（ckeditor,需要fck的用户可以去官网下载）： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_html_editor" id="edit___cfg_html_editor" value="ckeditor" style="width:80%" type="text"></td>
       <td>cfg_html_editor</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">跨域共享cookie的域名(例如: .dedecms.com)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_domain_cookie" id="edit___cfg_domain_cookie" style="width:80%" type="text"></td>
       <td>cfg_domain_cookie</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">专题的最大节点数： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_specnote" id="edit___cfg_specnote" value="6" style="width:30%" type="text"></td>
       <td>cfg_specnote</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">栏目位置的间隔符号： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_list_symbol" id="edit___cfg_list_symbol" value=" &gt; " style="width:80%" type="text"></td>
       <td>cfg_list_symbol</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">关键字替换(是/否)使用本功能会影响HTML生成速度： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_keyword_replace" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_keyword_replace" value="N" type="radio">否 </td>
       <td>cfg_keyword_replace</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">(是/否)支持多站点，开启此项后附件、栏目连接、arclist内容启用绝对网址： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_multi_site" value="Y" type="radio">是 <input class="np" name="edit___cfg_multi_site" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_multi_site</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">(是/否)开启管理日志： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_dede_log" value="Y" type="radio">是 <input class="np" name="edit___cfg_dede_log" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_dede_log</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">FTP主机： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_ftp_host" id="edit___cfg_ftp_host" style="width:80%" type="text"></td>
       <td>cfg_ftp_host</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">FTP端口： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_ftp_port" id="edit___cfg_ftp_port" value="21" style="width:30%" type="text"></td>
       <td>cfg_ftp_port</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">FTP用户名： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_ftp_user" id="edit___cfg_ftp_user" style="width:80%" type="text"></td>
       <td>cfg_ftp_user</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">FTP密码： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_ftp_pwd" id="edit___cfg_ftp_pwd" style="width:80%" type="text"></td>
       <td>cfg_ftp_pwd</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">网站根在FTP中的目录： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_ftp_root" id="edit___cfg_ftp_root" value="/" style="width:80%" type="text"></td>
       <td>cfg_ftp_root</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否强制用FTP创建目录： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_ftp_mkdir" value="Y" type="radio">是 <input class="np" name="edit___cfg_ftp_mkdir" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_ftp_mkdir</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">服务器时区设置： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_cli_time" id="edit___cfg_cli_time" value="8" style="width:30%" type="text"></td>
       <td>cfg_cli_time</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否启用smtp方式发送邮件： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_sendmail_bysmtp" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_sendmail_bysmtp" value="N" type="radio">否 </td>
       <td>cfg_sendmail_bysmtp</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">smtp服务器： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_smtp_server" id="edit___cfg_smtp_server" value="smtp.qq.com" style="width:80%" type="text"></td>
       <td>cfg_smtp_server</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">smtp服务器端口： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_smtp_port" id="edit___cfg_smtp_port" value="25" style="width:80%" type="text"></td>
       <td>cfg_smtp_port</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">SMTP服务器的用户邮箱： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_smtp_usermail" id="edit___cfg_smtp_usermail" value="desdev@vip.qq.com" style="width:80%" type="text"></td>
       <td>cfg_smtp_usermail</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">SMTP服务器的用户帐号： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_smtp_user" id="edit___cfg_smtp_user" value="desdev" style="width:80%" type="text"></td>
       <td>cfg_smtp_user</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">SMTP服务器的用户密码： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_smtp_password" id="edit___cfg_smtp_password" value="7260444huxiao" style="width:80%" type="text"></td>
       <td>cfg_smtp_password</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">在线支付网关类型： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_online_type" id="edit___cfg_online_type" value="nps" style="width:80%" type="text"></td>
       <td>cfg_online_type</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">删除文章文件同时删除相关附件文件： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_upload_switch" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_upload_switch" value="N" type="radio">否 </td>
       <td>cfg_upload_switch</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">网站全局搜索时间限制： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_allsearch_limit" id="edit___cfg_allsearch_limit" value="1" style="width:80%" type="text"></td>
       <td>cfg_allsearch_limit</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否使用伪静态： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_rewrite" value="Y" type="radio">是 <input class="np" name="edit___cfg_rewrite" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_rewrite</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">文章回收站(是/否)开启： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_delete" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_delete" value="N" type="radio">否 </td>
       <td>cfg_delete</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">栏目网址使用目录名（不显示默认页，即是 /a/abc/ 形式）： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_typedir_df" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_typedir_df" value="N" type="radio">否 </td>
       <td>cfg_typedir_df</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否启用远程站点： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_remote_site" value="Y" type="radio">是 <input class="np" name="edit___cfg_remote_site" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_remote_site</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否发布和编辑文档时远程发布(启用远程站点的前提下)： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_title_site" value="Y" type="radio">是 <input class="np" name="edit___cfg_title_site" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_title_site</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">数据库类型（支持mysql和mysqli）： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mysql_type" id="edit___cfg_mysql_type" value="mysql" style="width:80%" type="text"></td>
       <td>cfg_mysql_type</td>
      </tr>
           </tbody></table>
          <table style="display:none" id="td3" cellpadding="1" cellspacing="1" border="0" width="100%">
      <tbody><tr class="alt-row" align="center" bgcolor="#FBFCE2" height="25">
       <td width="300">参数说明</td>
       <td>参数值</td>
       <td width="220">变量名</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">缩略图默认宽度： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_ddimg_width" id="edit___cfg_ddimg_width" value="240" style="width:30%" type="text"></td>
       <td>cfg_ddimg_width</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">缩略图默认高度： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_ddimg_height" id="edit___cfg_ddimg_height" value="180" style="width:30%" type="text"></td>
       <td>cfg_ddimg_height</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">图片浏览器文件类型： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_imgtype" id="edit___cfg_imgtype" value="jpg|gif|png" style="width:80%" type="text"></td>
       <td>cfg_imgtype</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">允许上传的软件类型： </td>
       <td style="padding:3px;" align="left"><textarea name="edit___cfg_softtype" row="4" id="edit___cfg_softtype" class="textarea_info" style="width:98%;height:50px">zip|gz|rar|iso|doc|xsl|ppt|wps</textarea></td>
       <td>cfg_softtype</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">允许的多媒体文件类型： </td>
       <td style="padding:3px;" align="left"><textarea name="edit___cfg_mediatype" row="4" id="edit___cfg_mediatype" class="textarea_info" style="width:98%;height:50px">swf|mpg|mp3|rm|rmvb|wmv|wma|wav|mid|mov</textarea></td>
       <td>cfg_mediatype</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">图集默认显示图片的大小： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_album_width" id="edit___cfg_album_width" value="800" style="width:30%" type="text"></td>
       <td>cfg_album_width</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">图集多行多列样式默认行数： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_album_row" id="edit___cfg_album_row" value="3" style="width:30%" type="text"></td>
       <td>cfg_album_row</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">图集多行多列样式默认列数： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_album_col" id="edit___cfg_album_col" value="4" style="width:30%" type="text"></td>
       <td>cfg_album_col</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">图集多页多图每页显示最大数： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_album_pagesize" id="edit___cfg_album_pagesize" value="12" style="width:30%" type="text"></td>
       <td>cfg_album_pagesize</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">图集默认样式<br>1为多页多图,2为多页单图,3为缩略图列表： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_album_style" id="edit___cfg_album_style" value="2" style="width:30%" type="text"></td>
       <td>cfg_album_style</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">图集默认缩略图大小： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_album_ddwidth" id="edit___cfg_album_ddwidth" value="200" style="width:30%" type="text"></td>
       <td>cfg_album_ddwidth</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">会员上传头像大小限制(单位：KB)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_max_face" id="edit___cfg_max_face" value="50" style="width:30%" type="text"></td>
       <td>cfg_max_face</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">附件保存形式(按data函数日期参数)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_addon_savetype" id="edit___cfg_addon_savetype" value="ymd" style="width:80%" type="text"></td>
       <td>cfg_addon_savetype</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">异步上传缩略图(空间太不稳定的用户关闭此项)： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_qk_uploadlit" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_qk_uploadlit" value="N" type="radio">否 </td>
       <td>cfg_qk_uploadlit</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">缩略图是否使用强制大小(对背景填充)： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_ddimg_full" value="Y" type="radio">是 <input class="np" name="edit___cfg_ddimg_full" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_ddimg_full</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">缩略图空白背景填充颜色(0-白,1-黑)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_ddimg_bgcolor" id="edit___cfg_ddimg_bgcolor" value="0" style="width:30%" type="text"></td>
       <td>cfg_ddimg_bgcolor</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">上传缩略图后是否马上弹出裁剪框： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_uplitpic_cut" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_uplitpic_cut" value="N" type="radio">否 </td>
       <td>cfg_uplitpic_cut</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">图集是否使用水印(小图也会受影响)： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_album_mark" value="Y" type="radio">是 <input class="np" name="edit___cfg_album_mark" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_album_mark</td>
      </tr>
           </tbody></table>
          <table style="display:none" id="td4" cellpadding="1" cellspacing="1" border="0" width="100%">
      <tbody><tr align="center" bgcolor="#FBFCE2" height="25">
       <td width="300">参数说明</td>
       <td>参数值</td>
       <td width="220">变量名</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否开启会员功能： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_open" value="Y" type="radio">是 <input class="np" name="edit___cfg_mb_open" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_mb_open</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否开启会员图集功能： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_album" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_mb_album" value="N" type="radio">否 </td>
       <td>cfg_mb_album</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否允许会员上传非图片附件： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_upload" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_mb_upload" value="N" type="radio">否 </td>
       <td>cfg_mb_upload</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">会员上传文件大小(K)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mb_upload_size" id="edit___cfg_mb_upload_size" value="1024" style="width:30%" type="text"></td>
       <td>cfg_mb_upload_size</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否开放会员对自定义模型投稿： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_sendall" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_mb_sendall" value="N" type="radio">否 </td>
       <td>cfg_mb_sendall</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否把会员指定的远程文档下载到本地： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_rmdown" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_mb_rmdown" value="N" type="radio">否 </td>
       <td>cfg_mb_rmdown</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">会员附件许可的类型： </td>
       <td style="padding:3px;" align="left"><textarea name="edit___cfg_mb_addontype" row="4" id="edit___cfg_mb_addontype" class="textarea_info" style="width:98%;height:50px">swf|mpg|mp3|rm|rmvb|wmv|wma|wav|mid|mov|zip|rar|doc|xsl|ppt|wps</textarea></td>
       <td>cfg_mb_addontype</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">会员附件总大小限制(MB)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mb_max" id="edit___cfg_mb_max" value="500" style="width:30%" type="text"></td>
       <td>cfg_mb_max</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">不允许注册的会员id： </td>
       <td style="padding:3px;" align="left"><textarea name="edit___cfg_mb_notallow" row="4" id="edit___cfg_mb_notallow" class="textarea_info" style="width:98%;height:50px">www,bbs,ftp,mail,user,users,admin,administrator</textarea></td>
       <td>cfg_mb_notallow</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">用户id最小长度： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mb_idmin" id="edit___cfg_mb_idmin" value="3" style="width:30%" type="text"></td>
       <td>cfg_mb_idmin</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">用户密码最小长度： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mb_pwdmin" id="edit___cfg_mb_pwdmin" value="3" style="width:30%" type="text"></td>
       <td>cfg_mb_pwdmin</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">前台密码验证类型：默认32 — 32位md5，可选：<br>l16 — 前16位， r16 — 后16位， m16 — 中间16位： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mb_pwdtype" id="edit___cfg_mb_pwdtype" value="32" style="width:80%" type="text"></td>
       <td>cfg_mb_pwdtype</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否严格限定会员登录id<br>允许会员使用二级域名必须设置此项： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_md_idurl" value="Y" type="radio">是 <input class="np" name="edit___cfg_md_idurl" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_md_idurl</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">注册会员默认级别<br>[会员权限管理中]查看级别代表的数字： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mb_rank" id="edit___cfg_mb_rank" value="10" style="width:30%" type="text"></td>
       <td>cfg_mb_rank</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否限制Email只能注册一个帐号： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_md_mailtest" value="Y" type="radio">是 <input class="np" name="edit___cfg_md_mailtest" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_md_mailtest</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">会员使用权限开通状态<br>(-10 邮件验证 -1 手工审核, 0 没限制)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mb_spacesta" id="edit___cfg_mb_spacesta" value="-10" style="width:30%" type="text"></td>
       <td>cfg_mb_spacesta</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否允许用户空间显示未审核文章： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_allowncarc" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_mb_allowncarc" value="N" type="radio">否 </td>
       <td>cfg_mb_allowncarc</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否允许新会员注册： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_allowreg" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_mb_allowreg" value="N" type="radio">否 </td>
       <td>cfg_mb_allowreg</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否禁止访问管理员帐号的空间： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_adminlock" value="Y" type="radio">是 <input class="np" name="edit___cfg_mb_adminlock" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_mb_adminlock</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">会员空间中所有文档的频道ID(不限为0)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mb_spaceallarc" id="edit___cfg_mb_spaceallarc" value="0" style="width:30%" type="text"></td>
       <td>cfg_mb_spaceallarc</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否允许用户笔名/昵称重复： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_wnameone" value="Y" type="radio">是 <input class="np" name="edit___cfg_mb_wnameone" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_mb_wnameone</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">会员动态是否需要审核： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_feedcheck" value="Y" type="radio">是 <input class="np" name="edit___cfg_mb_feedcheck" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_mb_feedcheck</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">会员状态是否需要审核： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_msgischeck" value="Y" type="radio">是 <input class="np" name="edit___cfg_mb_msgischeck" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_mb_msgischeck</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">注册是否需要完成详细资料的填写： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_reginfo" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_mb_reginfo" value="N" type="radio">否 </td>
       <td>cfg_mb_reginfo</td>
      </tr>
           </tbody></table>
          <table style="display:none" id="td5" cellpadding="1" cellspacing="1" border="0" width="100%">
      <tbody><tr class="alt-row" align="center" bgcolor="#FBFCE2" height="25">
       <td width="300">参数说明</td>
       <td>参数值</td>
       <td width="220">变量名</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">禁用词语（系统将直接停止用户动作）<br>用|分开，但不要在结尾加|： </td>
       <td style="padding:3px;" align="left"><textarea name="edit___cfg_notallowstr" row="4" id="edit___cfg_notallowstr" class="textarea_info" style="width:98%;height:50px"></textarea></td>
       <td>cfg_notallowstr</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">替换词语（词语会被替换成***）<br>用|分开，但不要在结尾加|： </td>
       <td style="padding:3px;" align="left"><textarea name="edit___cfg_replacestr" row="4" id="edit___cfg_replacestr" class="textarea_info" style="width:98%;height:50px"></textarea></td>
       <td>cfg_replacestr</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">评论及留言(是/否)需审核： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_feedbackcheck" value="Y" type="radio">是 <input class="np" name="edit___cfg_feedbackcheck" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_feedbackcheck</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">评论加验证码重确认： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_feedback_ck" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_feedback_ck" value="N" type="radio">否 </td>
       <td>cfg_feedback_ck</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">两次评论至少间隔时间(秒钟)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_feedback_time" id="edit___cfg_feedback_time" value="30" style="width:30%" type="text"></td>
       <td>cfg_feedback_time</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">每个IP一小时内最大评论数： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_feedback_numip" id="edit___cfg_feedback_numip" value="30" style="width:30%" type="text"></td>
       <td>cfg_feedback_numip</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">会员投稿是否使用验证码： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_vdcode_member" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_vdcode_member" value="N" type="radio">否 </td>
       <td>cfg_vdcode_member</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">会员投稿是否检测重复标题： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_mb_cktitle" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_mb_cktitle" value="N" type="radio">否 </td>
       <td>cfg_mb_cktitle</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">投稿多长时间后不能再修改[天]： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_mb_editday" id="edit___cfg_mb_editday" value="7" style="width:30%" type="text"></td>
       <td>cfg_mb_editday</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">被踩扣除文章好评度： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_caicai_sub" id="edit___cfg_caicai_sub" value="2" style="width:30%" type="text"></td>
       <td>cfg_caicai_sub</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">被顶扣除文章好评度： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_caicai_add" id="edit___cfg_caicai_add" value="2" style="width:30%" type="text"></td>
       <td>cfg_caicai_add</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">详细好评可获好评度： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_feedback_add" id="edit___cfg_feedback_add" value="5" style="width:30%" type="text"></td>
       <td>cfg_feedback_add</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">详细恶评扣除好评度： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_feedback_sub" id="edit___cfg_feedback_sub" value="5" style="width:30%" type="text"></td>
       <td>cfg_feedback_sub</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否禁止所有评论(将包括禁止顶踩等)： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_feedback_forbid" value="Y" type="radio">是 <input class="np" name="edit___cfg_feedback_forbid" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_feedback_forbid</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">投稿可获取积分： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_sendarc_scores" id="edit___cfg_sendarc_scores" value="10" style="width:30%" type="text"></td>
       <td>cfg_sendarc_scores</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">参与评论可获积分： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_sendfb_scores" id="edit___cfg_sendfb_scores" value="3" style="width:30%" type="text"></td>
       <td>cfg_sendfb_scores</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">上传头像增加积分： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_face_adds" id="edit___cfg_face_adds" value="10" style="width:30%" type="text"></td>
       <td>cfg_face_adds</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">填写详细资料增加积分： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_moreinfo_adds" id="edit___cfg_moreinfo_adds" value="20" style="width:30%" type="text"></td>
       <td>cfg_moreinfo_adds</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">多少积分可以兑换一个金币： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_money_scores" id="edit___cfg_money_scores" value="50" style="width:30%" type="text"></td>
       <td>cfg_money_scores</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">登录会员中心获积分： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_login_adds" id="edit___cfg_login_adds" value="2" style="width:30%" type="text"></td>
       <td>cfg_login_adds</td>
      </tr>
            <tr align="center" bgcolor="#ffffff" height="25">
       <td width="300">会员推广获积分： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_userad_adds" id="edit___cfg_userad_adds" value="10" style="width:30%" type="text"></td>
       <td>cfg_userad_adds</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否允许匿名评论： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_feedback_guest" value="Y" type="radio">是 <input class="np" name="edit___cfg_feedback_guest" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_feedback_guest</td>
      </tr>
           </tbody></table>
          <table style="display:none" id="td6" cellpadding="1" cellspacing="1" border="0" width="100%">
      <tbody><tr align="center" bgcolor="#FBFCE2" height="25">
       <td width="300">参数说明</td>
       <td>参数值</td>
       <td width="220">变量名</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">(是/否)开启分页标题，开启会影响HTML生成速度： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_arcsptitle" value="Y" type="radio">是 <input class="np" name="edit___cfg_arcsptitle" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_arcsptitle</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">(是/否)开启长文章自动分页： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_arcautosp" value="Y" type="radio">是 <input class="np" name="edit___cfg_arcautosp" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_arcautosp</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">文章自动分页大小（单位: K）： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_arcautosp_size" id="edit___cfg_arcautosp_size" value="5" style="width:30%" type="text"></td>
       <td>cfg_arcautosp_size</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">上级列表是否包含子类内容： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_list_son" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_list_son" value="N" type="radio">否 </td>
       <td>cfg_list_son</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">使用关键词关连文章： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_keyword_like" value="Y" type="radio">是 <input class="np" name="edit___cfg_keyword_like" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_keyword_like</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">网站主页调用函数最大索引文档数<br>不适用于经常单栏目采集过多内容的网站<br>不启用本项此值设置为0即可： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_index_max" id="edit___cfg_index_max" value="10000" style="width:30%" type="text"></td>
       <td>cfg_index_max</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">arclist标签调用缓存<br>(0 不启用，大于0值为多少秒)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_index_cache" id="edit___cfg_index_cache" value="86400" style="width:30%" type="text"></td>
       <td>cfg_index_cache</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否启用模板缓存： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_tplcache" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_tplcache" value="N" type="radio">否 </td>
       <td>cfg_tplcache</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">模板缓存目录： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_tplcache_dir" id="edit___cfg_tplcache_dir" value="/data/tplcache" style="width:80%" type="text"></td>
       <td>cfg_tplcache_dir</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">发布/修改单个文档是否使用调用缓存： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_makesign_cache" value="Y" type="radio">是 <input class="np" name="edit___cfg_makesign_cache" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_makesign_cache</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">最大搜索检查文档数： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_search_max" id="edit___cfg_search_max" value="50000" style="width:30%" type="text"></td>
       <td>cfg_search_max</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">最大返回搜索结果数： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_search_maxrc" id="edit___cfg_search_maxrc" value="300" style="width:30%" type="text"></td>
       <td>cfg_search_maxrc</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">搜索间隔时间(秒/对网站所有用户)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_search_time" id="edit___cfg_search_time" value="3" style="width:30%" type="text"></td>
       <td>cfg_search_time</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否启用副栏目： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_need_typeid2" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_need_typeid2" value="N" type="radio">否 </td>
       <td>cfg_need_typeid2</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">id 文档ID，content 标签最终内容<br>(修改此变量后必须更新系统缓存)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_cache_type" id="edit___cfg_cache_type" value="id" style="width:80%" type="text"></td>
       <td>cfg_cache_type</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">发布文章后马上更新网站主页： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_makeindex" value="Y" type="radio">是 <input class="np" name="edit___cfg_makeindex" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_makeindex</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">发表文章后马上更新相关栏目： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_make_andcat" value="Y" type="radio">是 <input class="np" name="edit___cfg_make_andcat" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_make_andcat</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">发表文章后马上更新上下篇： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_make_prenext" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_make_prenext" value="N" type="radio">否 </td>
       <td>cfg_make_prenext</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">需缓存内容全局缓存时间(秒)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_puccache_time" id="edit___cfg_puccache_time" value="36000" style="width:30%" type="text"></td>
       <td>cfg_puccache_time</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否启用memcache缓存，如果为否(N)，默认使用文件缓存： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_memcache_enable" value="Y" type="radio">是 <input class="np" name="edit___cfg_memcache_enable" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_memcache_enable</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">默认memcache缓存服务器地址： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_memcache_mc_defa" id="edit___cfg_memcache_mc_defa" value="memcache://127.0.0.1:11211/default127" style="width:80%" type="text"></td>
       <td>cfg_memcache_mc_defa</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">附加memcache缓存服务器地址： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_memcache_mc_oth" id="edit___cfg_memcache_mc_oth" style="width:80%" type="text"></td>
       <td>cfg_memcache_mc_oth</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">顶踩缓存异步更新间隔（0为不缓存）： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_digg_update" id="edit___cfg_digg_update" value="0" style="width:30%" type="text"></td>
       <td>cfg_digg_update</td>
      </tr>
           </tbody></table>
          <table style="display:none" id="td7" cellpadding="1" cellspacing="1" border="0" width="100%">
      <tbody><tr align="center" bgcolor="#FBFCE2" height="25">
       <td width="300">参数说明</td>
       <td>参数值</td>
       <td width="220">变量名</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">模板引擎禁用PHP函数： </td>
       <td style="padding:3px;" align="left"><textarea name="edit___cfg_disable_funs" row="4" id="edit___cfg_disable_funs" class="textarea_info" style="width:98%;height:50px">phpinfo,eval,exec,passthru,shell_exec,system,proc_open,popen,curl_exec,curl_multi_exec,parse_ini_file,show_source,file_put_contents</textarea></td>
       <td>cfg_disable_funs</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">模板引擎禁用标签： </td>
       <td style="padding:3px;" align="left"><textarea name="edit___cfg_disable_tags" row="4" id="edit___cfg_disable_tags" class="textarea_info" style="width:98%;height:50px">php</textarea></td>
       <td>cfg_disable_tags</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">自动摘要长度（0-250，0表示不启用）： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_auot_description" id="edit___cfg_auot_description" value="240" style="width:30%" type="text"></td>
       <td>cfg_auot_description</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">远程图片本地化： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_rm_remote" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_rm_remote" value="N" type="radio">否 </td>
       <td>cfg_rm_remote</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">删除非站内链接： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_arc_dellink" value="Y" type="radio">是 <input class="np" name="edit___cfg_arc_dellink" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_arc_dellink</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">提取第一张图片作为缩略图： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_arc_autopic" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_arc_autopic" value="N" type="radio">否 </td>
       <td>cfg_arc_autopic</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">自动提取关键字： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_arc_autokeyword" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_arc_autokeyword" value="N" type="radio">否 </td>
       <td>cfg_arc_autokeyword</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">文档标题最大长度<br>改此参数后需要手工修改数据表： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_title_maxlen" id="edit___cfg_title_maxlen" value="60" style="width:30%" type="text"></td>
       <td>cfg_title_maxlen</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">发布文档时是否检测重复标题： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_check_title" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_check_title" value="N" type="radio">否 </td>
       <td>cfg_check_title</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">跳转网址是否直接跳转？（否则显示中转页）： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_jump_once" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_jump_once" value="N" type="radio">否 </td>
       <td>cfg_jump_once</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">系统计划任务客户端许可密码<br>(需要客户端，通常不会太重要)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_task_pwd" id="edit___cfg_task_pwd" style="width:80%" type="text"></td>
       <td>cfg_task_pwd</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">附件目录是否绑定为指定的二级域名： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_addon_domainbind" value="Y" type="radio">是 <input class="np" name="edit___cfg_addon_domainbind" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_addon_domainbind</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">附件目录的二级域名： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_addon_domain" id="edit___cfg_addon_domain" style="width:80%" type="text"></td>
       <td>cfg_addon_domain</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">默认责任编辑(dutyadmin)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_df_dutyadmin" id="edit___cfg_df_dutyadmin" value="admin" style="width:80%" type="text"></td>
       <td>cfg_df_dutyadmin</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">是否允许用目录作为文档文件名<br>文档命名规则需改为：{typedir}/{aid}/index.html： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_arc_dirname" value="Y" checked="checked" type="radio">是 <input class="np" name="edit___cfg_arc_dirname" value="N" type="radio">否 </td>
       <td>cfg_arc_dirname</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">文档默认点击数(-1表示随机50-200)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_arc_click" id="edit___cfg_arc_click" value="-1" style="width:30%" type="text"></td>
       <td>cfg_arc_click</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">文档内容同一关键词替换次数(0为全部替换)： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_replace_num" id="edit___cfg_replace_num" value="2" style="width:30%" type="text"></td>
       <td>cfg_replace_num</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">是否启用文章全文检索功能（需配置sphinx服务器）： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_sphinx_article" value="Y" type="radio">是 <input class="np" name="edit___cfg_sphinx_article" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_sphinx_article</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">Sphinx服务器主机地址： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_sphinx_host" id="edit___cfg_sphinx_host" value="localhost" style="width:80%" type="text"></td>
       <td>cfg_sphinx_host</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">Sphinx服务器端口号： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_sphinx_port" id="edit___cfg_sphinx_port" value="9312" style="width:30%" type="text"></td>
       <td>cfg_sphinx_port</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">支持交叉栏目显示副栏目内容： </td>
       <td style="padding:3px;" align="left"><input class="np" name="edit___cfg_cross_sectypeid" value="Y" type="radio">是 <input class="np" name="edit___cfg_cross_sectypeid" value="N" checked="checked" type="radio">否 </td>
       <td>cfg_cross_sectypeid</td>
      </tr>
           </tbody></table>
          <table style="display:none" id="td8" cellpadding="1" cellspacing="1" border="0" width="100%">
      <tbody><tr align="center" bgcolor="#FBFCE2" height="25">
       <td width="300">参数说明</td>
       <td>参数值</td>
       <td width="220">变量名</td>
      </tr>
            <tr class="alt-row" align="center" bgcolor="#ffffff" height="25">
       <td width="300">百度新闻xml更新新闻数量 最大100： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_baidunews_limit" id="edit___cfg_baidunews_limit" value="100" style="width:80%" type="text"></td>
       <td>cfg_baidunews_limit</td>
      </tr>
            <tr align="center" bgcolor="#F9FCEF" height="25">
       <td width="300">百度新闻xml更新时间 （单位：分钟）： </td>
       <td style="padding:3px;" align="left"><input name="edit___cfg_updateperi" id="edit___cfg_updateperi" value="15" style="width:80%" type="text"></td>
       <td>cfg_updateperi</td>
      </tr>
           </tbody></table>
     </div>
     <table style="border:1px solid #cfcfcf;border-top:none;" cellpadding="1" cellspacing="1" border="0" width="100%">
      <tbody><tr class="alt-row" bgcolor="#F9FCEF">
       <td colspan="3" height="50"><table cellpadding="1" cellspacing="1" border="0" width="98%">
         <tbody><tr>
          <td width="11%">&nbsp;</td>
          <td width="11%">
              <input class="button" name="imageField" value="确定" type="submit">
          </td>
          <td width="78%">
           <input class="button" name="imageField" value="重置" onclick="document.form1.reset()" type="button">
         </td></tr>
        </tbody></table></td>
      </tr>
     </tbody></table>
    </form></td>
  </tr>
 </tbody></table>
</div>
							<div class="clear"></div><!-- End .clear -->
							
						
						
					</div> <!-- End #tab1 -->

					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
           			<!-- End #footer -->			
		</div> <!-- End #main-content -->	
	

</body></html>