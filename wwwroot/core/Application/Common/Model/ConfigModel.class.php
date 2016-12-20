<?php
namespace Common\Model;
use Think\Model;
class ConfigModel extends ManagerModel {
	public function g($name=''){
		$r = $this->find($name);
		return $r['value'];
	}
	public function gs($params){
		$map = array(); 
		$lang = C('ALANG');

		$r = $this->field("id,$lang as value")->WHERE($map)->select();
		 
		return parseKV($r,'id','value');
	}
	public function ss($params){ 
		$lang = $params['lang'];
	 
		unset($params['lang']);

		if($params) foreach($params as $k=>$v){
			$has = 0;
			$d = $this->where(array('id'=>$k))->find();
			if($d) $has = 1;
			$d[$lang] = $v;
 
			if($has){

				$this->save($d);
				 
			}else{
				$d['id'] = $k;
	 
				$this->add($d);
			}
		}
		jsonSuccess();
	}
	public function show($id){
		$lang = LANG;
		return D('Config')->WHERE(array('id'=>$id))->getField($lang);
	}
	public function changeLang($p){
		session('ALANG',$p['lang']);
 
		return array('status'=>1);
	}
	public function rsave($p){
		return parent::rsave($p);
	}
 
}