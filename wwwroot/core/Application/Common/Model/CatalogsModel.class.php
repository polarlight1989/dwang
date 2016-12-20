<?php
namespace Common\Model;
use Think\Model;
class CatalogsModel extends ManagerModel {
	public function rsave($p){
		
		$p['content'] = entity_decode($p['content']);
		$p['encontent'] = entity_decode($p['encontent']);
	 
		$a = parent::rsave($p);
		return $a;
	}
	public function selectOptions($p){
		$result = $this->field("id,title,pid,level")->select();
		foreach($result as $k=>$v){
			if(ALANG == 'en') $result[$k]['title'] = $v[ALANG.'title'];
		}
		return $result;
		exit;
	}
	public function getRelation($p){
		$r = $this->field('id,pid')->select();
		$result = array();
		foreach($r as $v){
			$result[$v['id']] = $v['pid'];
		}
		return $result;
	}
	public function tree($p){
		$result = $this->field("id,title,pid,level,actionurl")->select();

 
		$r = $this->makeTree($result,0);
		return $r;
	}
	public function getOne($p){
		
		$result = parent::getOne($p);
 		
		if(LANG != 'zh'){
			$result['title'] = $result[LANG."title"];
		}
		return $result;
	}
	private function makeTree($result,$pid=0){
		$data = array();
		//son
		foreach($result as $v){
			if($v['pid'] == $pid){
				$data[$v['id']] = $v;
			}
		}
		if($data){
			foreach($data as $k=>$v){
				$data[$k]['son'] = $this->makeTree($result,$v['id']);
			}
			
		}
		return $data;
	}
	public function getTopId($id){
		$a = $this->where(array('id'=>$id))->getField('pid');
		if($a == 0){
			return $id;
		}else{
			return $this->getTopId($a);
		}
	}
	
}