<?php
 
// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('ROOT_DIR',dirname(dirname(__FILE__)));

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH',dirname(dirname(__FILE__)).'/core/Application/');
 
// 引入ThinkPHP入口文件
define('BIND_MODULE','Home');
define('BIND_CONTROLLER','Index');
define('BIND_ACTION','api');
require APP_PATH.'/../ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单