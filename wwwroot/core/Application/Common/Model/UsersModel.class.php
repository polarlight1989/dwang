<?php
namespace Common\Model;
use Think\Model;
class UsersModel extends ManagerModel {
	protected $_validate = array(
     array('name','require','请填写用户名',1), //默认情况下用正则进行验证
     array('pwd','require','请填写密码',1),
     array('name','','用户名已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一  
   );
 	 
}