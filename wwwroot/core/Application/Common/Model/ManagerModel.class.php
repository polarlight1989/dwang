<?php
namespace Common\Model;
use Think\Model;
class ManagerModel extends Model {

	public function rsave($p){
 
		$pk = $this->pk;
		$c = $this->create($p);

		if(!$c){
			$error = $this->getError();
			return array('errormsg'=>$error);
		}
 
		if($p[$pk]){
 
			$this->data['mdate'] = GNT();
			if($this->data['content']){
				$this->data['content'] = html_entity_decode($this->data['content']);
				 
			}
		 
			return $this->save();
		}else{
            $this->data['cdate'] = GNT();
			if($this->data['content']){
				$this->data['content'] = html_entity_decode($this->data['content']);
				 
			}
			$p['cdate'] = GNT();
			return $this->add();
		}
 
	}
    public function makeSelect($params){
        if($params['kname'] && $params['vname']){
            $r = $this->SELECT();
            $result = array();
            if($r) foreach($r as $v){
                $result[$v[$params['kname']]] = $v[$params['vname']];
            }
            return $result;
        }
    }
	public function operAction($p){
		$operAction = $p['operAction'];
		$ids = $p['ids'];
		if($operAction && $ids){
			if($operAction == 'delete'){
				$r = $this->WHERE(array("id"=>array('IN',$ids)))->delete();
			}
			if($operAction == 'copy'){
				$r = $this->WHERE(array("id"=>array('IN',$ids)))->select();
 
				foreach($r as $v){
					unset($v[$this->fields['_pk']]);
					$this->add($v);
				}
 
				
			}

			if($operAction == 'unpush'){
				$r = $this->WHERE(array("id"=>array('IN',$ids)))->save(array("push_id"=>'','push_group'=>'','pushdate'=>'')); 
			}
		}
		return array('status'=>1);
		exit;
	}
    public function ajaxTableSearch($p=array()){
		if(!$p) $p = I('POST.searchparams');
		
		$map = array(); 
		if($p) foreach($p as $sk=>$s){
			$sk = strtolower($sk);
 
			foreach($s as $k=>$v){
				
				if($v == '*') continue;
				if($sk == 'like' && $v){
					$map[$k] = array('LIKE',"%{$v}%");
				}
				if($sk == 'equal' && $v){
					$map[$k] = $v;
				}
				if($sk == 'find_in_set'){

					if($v){
						$map[] = "(find_in_set('$v',$k) OR $k = 'all')"; 

					}
				}
				if($sk == 'between'){
					
					if(strpos($v,'年')) $v = YMDtotime($v);
	 
					if(strpos($k,'_min') && $v){
					 
						$karr = explode("_min",$k);
						$map[] = $karr[0] ." >= '{$v}'";
					}
					if(strpos($k,'_max') && $v){
			 
						$karr = explode("_max",$k);
						$map[] = $karr[0] ." <= '{$v}'";
					}
				}
			}
		}
		return $map;
	}
 
	public function ajaxTable($params=array()){
		//init 
		$p = $params; 
		$fields = $p['fields'];
 
		$fields = $fields  ? $fields : '*';
 		
		$customActionName = I("POST.customActionName");
		if($customActionName == 'del'){
			$options    =  $this->_parseOptions();
			$this->WHERE(" ID IN (".implode(",",I('POST.id')).")")->delete();
			$this->WHERE($options['where']);
		}
 
		#if(!$fields) return false;
		//搜索条件
 
		$searchparams = $params['searchparams'];
		
		if($searchparams){ 
			$map = $this->ajaxTableSearch($searchparams);
			$this->where($map);
		}
  
		if($params['map']){
			$this->where($params['map']);
		}
		$this->field($fields);

		#exit;
		#print_r($map);
		//limit

		$length = $p['length'];
		$start = I('POST.start',0);
		$page = $p['page'];
		$this->page($page,$length);
		$result = $this->selectCount();
		return $result;
		
	}
	public function selectCount($p=array()){
		$options = $this->options;
		$result = array();
 
		$result['data'] = $this->select(); 
		if($options['group']){
			unset($options['limit'],$options['page']);
			$options['field'] = $options['group'];
			$this->options = $options;
			$tableSql = $this->buildSql();
			unset($options['page'],$options['limit']);
			$count = $this->table($tableSql." t")->count();
		}else{
			unset($options['page'],$options['limit']);
			$this->options = $options;
			
			$count = $this->count();
			 
		}
		
		$result['count'] = $count;
		return $result;
	}
    public function selectOption($p){
        echo 123;
    }
    public function getOne($p){
        $pk = $this->pk;
		if($p['fields']){
			$this->field($p['fields']);
		}
        if($p[$pk]){
            $data = $this->find($p[$pk]);
			if($data['content']){
				$data['content'] =  html_entity_decode($data['content']);
			}
			return $data;
        }else{
			$a = $this->fields['_type'];
			foreach($a as $k=>$v){
				$a[$k] = '';
			}
			unset($a[$pk]);
			return $a;
		}
        return false;
    }
}

































