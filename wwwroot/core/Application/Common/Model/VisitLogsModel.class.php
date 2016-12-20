<?php
namespace Common\Model;
use Think\Model;
class VisitLogsModel extends ManagerModel {
	 
	public function ajaxTable($p){
		$tableName = $this->trueTableName;
		$this->ORDER("{$tableName}.cdate DESC");
		$p['fields'] = "{$tableName}.*,Users.name as user_name,arcs.title as arc_title";
		$this->join("Users ON Users.id = {$tableName}.user_id");
		$this->join("Arcs ON Arcs.id = {$tableName}.arc_id"); 
		$result = parent::ajaxTable($p); 
		return $result;
	}
	public function add($p){
		$this->create($p);
		$this->cdate = GNT();
		$this->year = date("Y",GNT());
		$this->month = date("m",GNT());
		$this->day = date("d",GNT());
		$this->ip = getip();
		return parent::add();
	}
 	 
}