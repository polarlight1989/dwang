<?php
namespace Common\Model;
use Think\Model;
class PushsModel extends ManagerModel {
	protected $_validate = array(
     array('name','require','请填写推送位名称',1), //默认情况下用正则进行验证
     array('name','','推送位已存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一 
   );
	public function push($p){
		 
		$ids = $p['ids'];
		$ids = array_filter(explode(",",$ids));
		if(!count($ids)) jError('无推送内容');
		$push_id = $p['push_id'];
		if(!$push_id) jError('请选择推送位');
		$push_group = $p['push_group'];
		if(!$push_group) jError('请选择推送用户组');
		D('Arcs')->WHERE(array('id'=>array('IN',$ids)))->save(array('push_id'=>$push_id,'push_group'=>$push_group,'pushdate'=>GNT()));
	}
}