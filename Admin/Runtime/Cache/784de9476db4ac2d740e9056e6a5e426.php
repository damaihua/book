<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>广告管理</title>
  <link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">
</head>

<body>
  <div id="main-content">
    <script language="javascript">
      $("#plus").addClass("current"); $("#ad_main").addClass("current");</script>
    <div class="content-box">
      <div class="content-box-header">
        <h3 style="cursor: s-resize;">广告管理</h3>
      </div>

      <div class="content-box-content">
        <div style="display: block;" class="tab-content  default-tab" id="tab1">
          <table cellpadding="3" cellspacing="1" align="center" bgcolor="#D6D6D6" border="0" width="98%">
            <tbody>
              <tr class="alt-row">
                <td colspan="7" style="padding-left:10px;">
                  <a href="__APP__/other/ad_add"><u>增加新广告</u></a>
                </td>
              </tr>

              <tr "="" align=" center" bgcolor="#FBFCE2" height="24">
                <td width="8%">编号</td>
                <td width="11%">广告内容</td>
                <td width="20%">广告图片</td>
                <td width="12%">链接地址</td>
                <td width="18%">管理</td>
              </tr>
              <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                  <td>
                    <?php echo ($vo["id"]); ?>
                  </td>
                  <td>
                    <?php echo ($vo["name"]); ?>
                  </td>
                  <td>
                    <?php echo ($vo["image"]); ?>
                  </td>
                  <td>
                    <?php echo ($vo["url"]); ?>
                  </td>
                  <td>
                    <a href="__APP__/other/ad_edit?id=<?php echo ($vo["id"]); ?>">[更改]</a>
                    <a href="__APP__/other/ad_del?id=<?php echo ($vo["id"]); ?>">[删除]</a>
                  </td>
                </tr><?php endforeach; endif; ?>

              <tr>
                <td colspan="7">
                  <span>
                    <?php echo ($page); ?>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> 

    </div> 

    
  </div> 

</body>

</html>