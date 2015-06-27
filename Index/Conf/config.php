<?php
return array(
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'=>'bosheng',
	'DB_USER'=>'bosheng',
	'DB_PWD'=>'a123qwe',
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀 
	'TMPL_PARSE_STRING'  =>array(
     '__RESOURS__'=>__ROOT__.'/'.APP_PATH.'Public/resours', // 更改默认的__PUBLIC__ 替换规则
	),
	
	'SHOW_PAGE_TRACE'=>false,
	'TMPL_L_DELIM'=>'<{',
	'TMPL_R_DELIM'=>'}>', 
	'URL_CASE_INSENSITIVE'=>TRUE,
);
?>