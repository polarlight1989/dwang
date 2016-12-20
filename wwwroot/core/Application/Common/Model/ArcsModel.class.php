<?php
namespace Common\Model;
use Think\Model;
class ArcsModel extends ManagerModel {
	public function rsave($p){
		$p['content'] = htmlspecialchars_decode($p['content']);
		return parent::rsave($p);
	}
	public function ajaxTable($p){ 
		#$p['searchparams']['find_in_set']['push_id'] = $p['searchparams']['find_in_set']['push_id'] ? $p['searchparams']['find_in_set']['push_id'] : $p['push_id'];
		#$p['searchparams']['find_in_set']['push_group'] = $p['searchparams']['find_in_set']['push_group'] ? $p['searchparams']['find_in_set']['push_id'] : $p['push_group']; 
		if($p['pushdata']) $this->WHERE(array('pushdate'=>array('GT',0)));
		if($p['catalog_id']){
			$this->WHERE(array('catalog_id'=>$p['catalog_id']));
		}  
		$result = parent::ajaxTable($p); 
		return $result;
	}
	public $_validate = array(
		array('title','require','请输入标题'),
	);
	public function getList($p){
		if($p['catalog_id']) $this->WHERE(array('catalog_id'=>$p['catalog_id']));
		if($p['ids']) $this->WHERE(array('id'=>array('IN',$p['ids'])));
		return $this->ajaxTable($p);
	}
 	 
}