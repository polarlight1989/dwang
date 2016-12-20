<?php
namespace Common\Model;
use Think\Model;
class LangsModel extends ManagerModel {
	public function g($p){ 
		$r = $this->WHERE(array('type'=>$p['type']))->select();
		$result = array();
		if($r) foreach($r as $k=>$v){
			$result['zh'][$v['id']] = $v['zh'];
			$result['en'][$v['id']] = $v['zh'];
		}
		//添加栏目语言
		$c = D('Catalogs')->field('id,title,entitle')->select();
		foreach($c as $v){
			$result['zh']["catalog_".$v['id']] = $v['title'];
			$result['en']["catalog_".$v['id']] = $v['entitle'];
		}
		return $result;
	}
}