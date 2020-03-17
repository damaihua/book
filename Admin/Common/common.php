<?php
//公用显示登录状态栏方法
function showbar(){
        $letter=D('Letter');
        $num=$letter->noReadNum();
        if(!session('user_name')){
        	$bar="<a href='__URL__/reg'>我要注册</a>|<a href='__URL__/login'>立即登录</a>";        	
        }else{
        	$user_name=session('user_name');
            if($num==0){
               $bar="<strong>$user_name</strong> | <a href='__APP__/letter/inbox'>短消息<b>(0)</b></a> <a href='__APP__/member/index'><b class='hottext'>邮箱未验证</b></a> | <a href='__APP__/book/collect'>收藏夹</a> | <a href='__APP__/member/index'>用户面板</a> | <a href='__URL__/loginout'>退出</a>";         
            }else{
                $bar="<strong>$user_name</strong> | <a href='__APP__/letter/inbox'>短消息<b class='hottext'>($num)</b></a> <a href='/userdetail.php'><b class='hottext'>邮箱未验证</b></a> | <a href='__APP__/book/collect'>收藏夹</a> |  <a href='__APP__/member/index'>用户面板</a> | <a href='__URL__/loginout'>退出</a>";        
            }
        		
        }
       return $bar;

    }
//公用显示分类方法
function showcats(){
        $cats=D('Cats');
        $data=$cats->where('type=0 and status=1')->order('ordernum asc')->select();
        foreach ($data as $value) {
        	$catlist.='<a href="#">'.$value['cat_name'].'</a>┊';
        }        
        return rtrim("$catlist",'|');
    }
//显示顶部菜单方法
function showHeadermenu(){
        $menu=D('Menu');
        $data=$menu->where("status=1 and position='header'")->order('ordernum asc')->limit(7)->select();
        $catlist='<ul><li><a href="__ROOT__">首页</a></li></ul>';
        foreach ($data as $value) {
        	$catlist.='<li><a href="__ROOT__'.$value['url'].'">'.$value['name'].'</a></li>';
        }        
        return rtrim($catlist,'|').'<li><a href="__ROOT__/bbs/">书友论坛</a></li>';
    }
//显示顶部菜单方法
function showFootermenu(){
        $menu=D('Menu');
        $data=$menu->where("status=1 and position='footer'")->order('ordernum asc')->limit(7)->select();
        foreach ($data as $value) {
          $catlist.='<a href="__ROOT__'.$value['url'].'" target="_blank">'.$value['name'].'</a>|';
          
        }        
        return rtrim($catlist,'|');
    }
/**********
 * 发送邮件 *
 **********/
function sendmail($tomail,$title,$content){

        /*邮件设置信息*/
        $email_set = C('EMAIL_SET');

        Vendor('phpmailer.class#phpmailer');       
        $mail = new PHPMailer(true); //实例化PHPMailer类,true表示出现错误时抛出异常
       
        $mail->IsSMTP(); // 使用SMTP

          $mail->CharSet ="UTF-8";//设定邮件编码
          $mail->Host       = $email_set['Host']; // SMTP server
          $mail->SMTPDebug  = 1;                     // 启用SMTP调试 1 = errors  2 =  messages
          $mail->SMTPAuth   = true;                  // 服务器需要验证
          $mail->Port       = $email_set['port'];                    // 设置端口
         // $mail->SMTPSecure = "ssl";    
            /*
            $mail->SMTPSecure = "ssl";                
            $mail->Host       = "smtp.gmail.com";    
            $mail->Port       = 465;                 
            */
       
          $mail->Username   = $email_set['email_user']; //SMTP服务器的用户帐号
          $mail->Password   = $email_set['email_pwd'];       //SMTP服务器的用户密码
          $mail->AddReplyTo($email_set['email'],$email_set['email_name']); //收件人回复时回复到此邮箱,可以多次执行该方法
          if (is_array($tomail)){
              foreach ($tomail as $m){
                   $mail->AddAddress($m, 'user');
              }
          }else{
              $mail->AddAddress($tomail, 'user');
          }
        
          $mail->SetFrom($email_set['email'],$email_set['email_name']);
          $mail->Subject = $title;
       
          //以下是邮件内容相关
          $mail->Body = $content;
          $mail->IsHTML(true);
       
          //$body = file_get_contents('tpl.html'); //获取html网页内容
         // $mail->MsgHTML(eregi_replace("[]",'',$body));
        return $mail->Send()? true:false;

}
//从系统配置表里读取数据并赋值给自定义常量
$siteset=M('Siteset');
$data=$siteset->find(1);
define('SITE_NAME', $data['site_name']);
define('SITE_LOGO', $data['site_logo']);
define('SITE_KEYWORDS', $data['site_keywords']);
define('SITE_DESCRIPT', $data['site_descript']);
define('SITE_COPYRIGHT', $data['site_copyright']);
define('SITE_BEIAN', $data['site_beian']);
define('ALLOW_REG', $data['allow_reg']);
define('REG_SEND_EMAIL', $data['reg_send_email']);

//自定义根据ID获取其他属性的方法,模板中使用方法<{:getData('User',$id,'user_name')}>
function getData($table,$id,$field){
        $table=M("$table");
        $data=$table->field($field)->find($id);
        return $data["$field"];
}
//获取广告位方法
function getAD($id,$width,$height){
        $AD=M('Ad');
        $data=$AD->find($id);
        $image=$data['image'];
        $url=$data['url'];
        return '<a href="$url" target="_blank"><img src="$image" border="0" width="$width" height="$height"></a>';
}
?>