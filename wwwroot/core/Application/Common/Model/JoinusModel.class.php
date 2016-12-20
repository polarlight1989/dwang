<?php
namespace Common\Model;
use Think\Model;
class JoinusModel extends ManagerModel {
	public function rsave($p){
		$p['content'] = htmlspecialchars_decode($p['content']);
 
		return parent::rsave($p);
	}
	public $_validate = array(
		array('title','require','请输入标题'),
	);
 
}