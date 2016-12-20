<?php
namespace Common\Model;
use Think\Model;
class ThumbsModel extends ManagerModel {
	public function adds($p){
		$thumbs = $p['thumbs'];
 
		if($thumbs) foreach($thumbs as $v){
			$data['lang'] = $p['lang'];
			$data['thumb'] = $v;
			$data['cdate'] = time();
			$data['catalog_id'] = $p['catalog_id'];
			$this->add($data);
		}
		return 1;
	}
	public function selectData($p){
		$map = array();
		if($p){
			$map['lang'] = $p['lang'];
			$map['catalog_id'] = $p['catalog_id'];
		}
		$data = $this->WHERE($map)->ORDER("CDATE desc")->select();
	 
		return $data;
	}
 
}