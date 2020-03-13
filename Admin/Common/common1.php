<?php
//公用显示登录状态栏方法
function showbar(){
        if(!session('user_name')){
        	$bar="<a href='__MEMBER__/reg'>我要注册</a>|<a href='__MEMBER__/login'>立即登录</a>";        	
        }else{
        	$user_name=session('user_name');
        	$bar="<strong>$user_name</strong> | <a href='/message.php?box=inbox'>短消息<b class='hottext'>(0)</b></a> <a href='/userdetail.php'><b class='hottext'>邮箱未验证</b></a> | <a href='/modules/article/bookcase.php'>我的书架</a> | <a href='/modules/obook/buylist.php'>订阅记录</a> | <a href='/userdetail.php'>用户面板</a> | <a href='__MEMBER__/loginout'>退出</a>";        	
        }
       return $bar;

    }

?>