<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'      =>  'mysql',     // 数据库类型
	'DB_HOST'      =>  '127.0.0.1',     // 服务器地址
	'DB_NAME'      =>  'sq_xianghongsch',     // 数据库名
	'DB_USER'      =>  'sq_xianghongsch',     // 用户名
	'DB_PWD'       =>  'xiang88168sch',     // 密码
	'DB_PORT'      =>  '3306',     // 端口
	'DB_PREFIX'    =>  '',     // 数据库表前缀
	'DB_DSN'       =>  '',     // 数据库连接DSN 用于PDO方式
	'DB_CHARSET'   =>  'utf8', // 数据库的编码 默认为utf8
	'SALT' => md5('8988665'),
	'URL_ROUTER_ON'=>true,
	'URL_ROUTE_RULES'=>array(
		':lang/catalog/:id'=>array('Home/Catalogs/index'),
		':lang/arc/:catalogid/:id'=>array('Home/Arcs/detail'),
		'video/:file/:img/:title'=>array('Home/Arcs/Video'),
		'zh'=>array('Home/Index/index',array('lang'=>'zh')),
		'en'=>array('Home/Index/index',array('lang'=>'en')),
	)
);