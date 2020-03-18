<?php
return array(
	/*数据库配置 */
	'TMPL_L_DELIM'=>'<{', //修改左定界符
	'TMPL_R_DELIM'=>'}>', //修改右定界符
	'DB_TYPE'=>'mysql',   //设置数据库类型
	'DB_HOST'=>'127.0.0.1',//设置主机
	'DB_NAME'=>'book',//设置数据库名
	'DB_USER'=>'root',    //设置用户名
	'DB_PWD'=>'',        //设置密码
	'DB_PORT'=>'3306',   //设置端口号
	'DB_PREFIX'=>'book_',  //设置表前缀

	/*模板配置*/
	'TMPL_SWITCH_ON'=>true,	// 启用多模版支持
	'TMPL_DETECT_THEME'=>true, // 自动侦测模板主题
	'DEFAULT_THEME'  => 'default', //默认模板主题
	'THEME_LIST'=>'default,other',//支持的模板主题项

	 //添加自己的模板变量规则
	'TMPL_PARSE_STRING'=>array(          
	'__CSS__'=>__ROOT__.'/Public/css',
	'__JS__' =>__ROOT__.'/Public/js', 
	'__IMG__' =>__ROOT__.'/Public/images', 
	'__BOOK__' =>__ROOT__.'/book',
	'__MEMBER__' =>__ROOT__.'/member',
	),

	/*调试配置*/
//	'SHOW_PAGE_TRACE'=>ture,//开启页面Trace

	/*URL配置*/
	'URL_MODEL'=>'1', //URL模式
	'URL_CASE_INSENSITIVE'=>true,//url不区分大小写

	/*默认时区配置*/
	'DEFAULT_TIMEZONE'=>'Asia/Shanghai', 

	//邮件配置
	'EMAIL_SET'=>array(
       'Host'=> "smtp.163.com",
       'Port'=>'25',
       'email_user'=>'gouguolei',
       'email_pwd'=>'gouguolei1990717',
       'email'=>'gouguolei@163.com',
       'email_name'=>'听雨轩在线书城',
    ),


);
?>