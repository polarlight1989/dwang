<?php
namespace Common\Model;
use Think\Model;
class UsersGroupModel extends ManagerModel {
	protected $_validate = array(
     array('name','require','请填写用户组名',1), //默认情况下用正则进行验证
     array('name','','用户组已存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一 
   );
 	 
}