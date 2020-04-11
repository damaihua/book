<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>系统配置参数</title>

     <link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
     <link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
     <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">
     <script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>

     <script language="javascript">
          // var searchconfig = false;
          // function Nav() {
          //      if (window.navigator.userAgent.indexOf("MSIE") >= 1) return 'IE';
          //      else if (window.navigator.userAgent.indexOf("Firefox") >= 1) return 'FF';
          //      else return "OT";
          // }
          // function $Obj(objname) {
          //      return document.getElementById(objname);
          // }
          // function ShowConfig(em, allgr) {
          //      if (searchconfig) location.reload();
          //      for (var i = 1; i <= allgr; i++) {
          //           if (i == em) $Obj('td' + i).style.display = (Nav() == 'IE' ? 'block' : 'table');
          //           else $Obj('td' + i).style.display = 'none';
          //      }
          //      $Obj('addvar').style.display = 'none';
          // }

          // function ShowHide(objname) {
          //      var obj = $Obj(objname);
          //      if (obj.style.display != "none") obj.style.display = "none";
          //      else obj.style.display = (Nav() == 'IE' ? 'block' : 'table-row');
          // }

          // function backSearch() {
          //      location.reload();
          // }
          // function getSearch() {
          //      var searchKeywords = $Obj('keywds').value;
          //      var myajax = new DedeAjax($Obj('_search'));
          //      myajax.SendGet('sys_info.php?dopost=search&keywords=' + searchKeywords)
          //      $Obj('_searchback').innerHTML = '<input name="searchbackBtn" type="button" value="返回" id="searchbackBtn" onclick="backSearch()"/>'
          //      $Obj('_mainsearch').innerHTML = '';
          //      searchconfig = true;
          // }
     </script>
</head>

<body>

     <div id="main-content">
          <script language="javascript">
               $("#sys").addClass("current"); $("#sys_info").addClass("current");</script>

          <div class="content-box">
               
               <div class="content-box-header">
                    <h3 style="cursor: s-resize;">系统配置参数</h3>
               </div> 

               <div class="content-box-content">

                    <div style="display: block;" class="tab-content  default-tab" id="tab1">
                         <div style="min-width:780px">
                              <table cellpadding="2" cellspacing="1" align="center" border="0" width="98%">

                                   <tbody>
                                        <tr class="alt-row">
                                             <td align="center">
                                                   <a href="javascript:ShowConfig(1,8)">站点设置</a> 
                                                  </td>
                                        </tr>

                                   </tbody>
                              </table>
                              <table style="margin-top:10px" cellpadding="0" cellspacing="0" align="center" border="0"
                                   width="98%">
                                   <tbody>
                                        <tr class="alt-row">
                                             <td width="100%">
                                                  <form action="__URL__/sys_edit" method="post"
                                                       enctype="multipart/form-data">

                                                       <div id="_mainsearch">
                                                            <table style="" id="td1" cellpadding="1" cellspacing="1"
                                                                 border="0" width="100%">
                                                                 <tbody>
                                                                      <tr align="center" bgcolor="#FBFCE2" height="25">
                                                                           <td width="300">参数说明</td>
                                                                           <td>参数值</td>
                                                                           <td width="220">变量名</td>
                                                                      </tr>
                                                                      <input name="id" id="id" value="<?php echo ($data['id']); ?>"
                                                                           type="hidden">
                                                                      <tr class="alt-row" align="center"
                                                                           bgcolor="#ffffff" height="25">
                                                                           <td width="300">网站名称： </td>
                                                                           <td style="padding:3px;" align="left"><input
                                                                                     name="site_name" type="text"
                                                                                     id="site_name" style="width:80%"
                                                                                     value="<?php echo ($data['site_name']); ?>">
                                                                           </td>
                                                                           <td>site_name</td>
                                                                      </tr>
                                                                      <tr align="center" bgcolor="#F9FCEF" height="25">
                                                                           <td width="300">网站logo： </td>
                                                                           <td style="padding:3px;" align="left"><input
                                                                                     name="site_logo" id="site_logo"
                                                                                     style="width:40%" type="file"></td>
                                                                           <td>site_logo</td>
                                                                      </tr>
                                                                      <tr class="alt-row" align="center"
                                                                           bgcolor="#ffffff" height="25">
                                                                           <td width="300">网站关键字： </td>
                                                                           <td style="padding:3px;" align="left"><input
                                                                                     name="site_keywords" type="text"
                                                                                     id="site_keywords"
                                                                                     style="width:80%"
                                                                                     value="<?php echo ($data['site_keywords']); ?>">
                                                                           </td>
                                                                           <td>site_keywords</td>
                                                                      </tr>
                                                                      <tr align="center" bgcolor="#F9FCEF" height="25">
                                                                           <td width="300">网站描述： </td>
                                                                           <td style="padding:3px;" align="left">
                                                                                <textarea name="site_descript" row="4"
                                                                                     id="site_descript"
                                                                                     class="textarea_info"
                                                                                     style="width:98%;height:50px"><?php echo ($data['site_descript']); ?></textarea>
                                                                           </td>
                                                                           <td>site_descript</td>
                                                                      </tr>
                                                                      <tr class="alt-row" align="center"
                                                                           bgcolor="#ffffff" height="25">
                                                                           <td width="300">网站风格： </td>
                                                                           <td style="padding:3px;" align="left"><input
                                                                                     name="site_style" type="text"
                                                                                     id="site_style" style="width:80%"
                                                                                     value="<?php echo ($data['site_style']); ?>">
                                                                           </td>
                                                                           <td>site_style</td>
                                                                      </tr>
                                                                      <tr align="center" bgcolor="#F9FCEF" height="25">
                                                                           <td width="300">网站版权： </td>
                                                                           <td style="padding:3px;" align="left"><input
                                                                                     name="site_copyright" type="text"
                                                                                     id="site_copyright"
                                                                                     style="width:80%"
                                                                                     value="<?php echo ($data['site_copyright']); ?>">
                                                                           </td>
                                                                           <td>site_copyright</td>
                                                                      </tr>
                                                                      <tr class="alt-row" align="center"
                                                                           bgcolor="#ffffff" height="25">
                                                                           <td width="300">备案号： </td>
                                                                           <td style="padding:3px;" align="left"><input
                                                                                     name="site_beian" type="text"
                                                                                     id="site_beian" style="width:80%"
                                                                                     value="<?php echo ($data['site_beian']); ?>">
                                                                           </td>
                                                                           <td>site_beian</td>
                                                                      </tr>
                                                                      <tr align="center" bgcolor="#F9FCEF" height="25">
                                                                           <td width="300">允许会员注册： </td>
                                                                           <td style="padding:3px;" align="left"><input
                                                                                     class="np" name="allow_reg"
                                                                                     value="1" type="radio" <?php if($data["allow_reg"] == 1): ?>checked
                                                                                <?php else: endif; ?>>是<input class="np"
                                                                                     name="allow_reg" value="0"
                                                                                     type="radio" <?php if($data["allow_reg"] == 0): ?>checked
                                                                                <?php else: endif; ?>>否</td>
                                                                           <td>site_status</td>
                                                                      </tr>
                                                                      <tr class="alt-row" align="center"
                                                                           bgcolor="#ffffff" height="25">
                                                                           <td width="300">注册成功发送邮件： </td>
                                                                           <td style="padding:3px;" align="left"><input
                                                                                     class="np" name="reg_send_email"
                                                                                     value="1" type="radio" <?php if($data["reg_send_email"] == 1): ?>checked
                                                                                <?php else: endif; ?>>是<input class="np"
                                                                                     name="reg_send_email" value="0"
                                                                                     type="radio" <?php if($data["reg_send_email"] == 0): ?>checked
                                                                                <?php else: endif; ?>>否</td>
                                                                           <td>site_status</td>
                                                                      </tr>
                                                                      <tr align="center" bgcolor="#F9FCEF" height="25">
                                                                           <td width="300">关闭网站： </td>
                                                                           <td style="padding:3px;" align="left"><input
                                                                                     class="np" name="site_status"
                                                                                     value="0" type="radio" <?php if($data["site_status"] == 0): ?>checked
                                                                                <?php else: endif; ?>>是<input class="np"
                                                                                     name="site_status" value="1"
                                                                                     type="radio" <?php if($data["site_status"] == 1): ?>checked
                                                                                <?php else: endif; ?>>否</td>
                                                                           <td>site_status</td>
                                                                      </tr>
                                                                      <tr class="alt-row" align="center"
                                                                           bgcolor="#ffffff" height="25">
                                                                           <td width="300">网站关闭提示信息： </td>
                                                                           <td style="padding:3px;" align="left">
                                                                                <textarea name="close_info" row="4"
                                                                                     id="close_info"
                                                                                     class="textarea_info"
                                                                                     style="width:98%;height:50px"><?php echo ($data['close_info']); ?></textarea>
                                                                           </td>
                                                                           <td>close_info</td>
                                                                      </tr>



                                                            </table>
                                                            
                                                           
                                                       </div>
                                                       <table style="border:1px solid #cfcfcf;border-top:none;"
                                                            cellpadding="1" cellspacing="1" border="0" width="100%">
                                                            <tbody>
                                                                 <tr class="alt-row" bgcolor="#F9FCEF">
                                                                      <td colspan="3" height="50">
                                                                           <table cellpadding="1" cellspacing="1"
                                                                                border="0" width="98%">
                                                                                <tbody>
                                                                                     <tr>
                                                                                          <td width="11%">&nbsp;</td>
                                                                                          <td width="11%">
                                                                                               <input class="button"
                                                                                                    name="imageField"
                                                                                                    value="确定"
                                                                                                    type="submit">
                                                                                          </td>
                                                                                          <td width="78%">
                                                                                               <input class="button"
                                                                                                    name="imageField"
                                                                                                    value="重置"
                                                                                                    onclick="document.form1.reset()"
                                                                                                    type="button">
                                                                                          </td>
                                                                                     </tr>
                                                                                </tbody>
                                                                           </table>
                                                                      </td>
                                                                 </tr>
                                                            </tbody>
                                                       </table>
                                                  </form>
                                             </td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                        
                    </div> 
               </div> 
          </div>     
     </div> 

</body>

</html>