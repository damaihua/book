<?php
header("Content-Type:text/html;charset=utf-8");
	//1.确定应用名称 App
	define('APP_NAME','index');
	//2.确定应用路径
	define('APP_PATH','./index/');
	//3.开启调试模式
	define('APP_DEBUG',true);
	//不生成缓存
	define('NO_CACHE_RUNTIME',True);
	//4.应用核心文件
	require './ThinkPHP/ThinkPHP.php';
?>
