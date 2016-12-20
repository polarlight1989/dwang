<?php
namespace Common\Model;
use Think\Model;
class AreasModel extends ManagerModel {
	public function rsave($p){
		$p['content'] = htmlspecialchars_decode($p['content']);
		return parent::rsave($p);
	}
	public function ajaxTable($p){
	 
		return parent::ajaxTable($p);
	}
	public $_validate = array(
		array('title','require','请输入标题'),
	);
 
}