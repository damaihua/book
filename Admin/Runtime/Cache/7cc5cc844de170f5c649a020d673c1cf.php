<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>网站会员管理</title>
  <link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css">
  <script language="javascript" src="__PUBLIC__/admin/js/jquery.js" type="text/javascript"></script>
</head>

<body>

  <div id="main-content">
    <div class="content-box">
      <div class="content-box-header">
        <h3>网站会员管理</h3>
      </div> 
      <div class="content-box-content">

        <div class="tab-content  default-tab" id="tab1">

          <form name="form2">
            <table cellpadding="0" cellspacing="1" align="center" border="1" width="100%">
              <tbody>
                <tr align="center" height="10">
                  <td width="6%"><strong>选择</strong></td>

                  <td width="10%"><strong>登录名</strong></td>
                  <td width="7%"><strong>昵称</strong></td>
                  <td width="21%"><strong>&nbsp;&nbsp;&nbsp;&nbsp;邮箱</strong></td>
                  <td width="10%"><strong>类型</strong></td>
                  <td><strong>状态</strong></td>

                  <td><strong>积分</strong></td>
                  <td width="10%"><strong>注册时间</strong></td>
                  <td width="8%"><strong>操作</strong></td>
                </tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr align="center" height="26">
                    <td><input name="mid" id="mid" value="1" class="np" type="checkbox"></td>

                    <td>
                      <?php echo ($user["user_name"]); ?>
                    </td>
                    <td>
                      <?php echo ($user["user_nicename"]); ?>
                    </td>
                    <td>
                      <?php echo ($user["user_email"]); ?>
                    </td>
                    <td>
                      <?php if($user["user_type"] == 1 ): ?>普通会员
                        <?php else: ?>
                        <font color="#FF0000">签约作者</font><?php endif; ?>
                    </td>
                    <td width="6%">
                      <?php if($user["user_status"] == 1 ): ?>正常
                        <?php else: ?>
                        <font color="#FF0000">禁止</font><?php endif; ?>

                    </td>

                    <td width="6%">1000</td>
                    <td>
                      <?php echo (date('Y-m-d',$user["reg_time"])); ?>
                    </td>
                    <td align="center">
                      <a href="http://localhost/dede/dede/member_view.php?id=1">修改</a> |
                      <a href="__APP__/member/member_del?user_id=<?php echo ($user["user_id"]); ?>"
                        onclick="return confirm('确定要删除?')">删除</a></td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                  <td colspan="11" height="36">
                    &nbsp;
                    <input class="button" name="imageField" value="全选" onclick="selAll()" type="button">
                    <input class="button" name="imageField" value="取消" onclick="noSelAll()" type="button">
                    <input class="button" name="imageField" value="删除" onclick="delArc()" type="button">

                    （如果已经整合了论坛的用户请不要使用批量删除功能）</td>
                </tr>
                <tr>
                  <td colspan="11" align="center" height="36">
                    <span>
                      <?php echo ($page); ?>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
            
          </form>
        </div>


      </div>
    </div>


  </div>
</body>

</html>