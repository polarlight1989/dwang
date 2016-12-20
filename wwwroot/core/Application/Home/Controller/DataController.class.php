<?php
namespace Home\Controller;
use Think\Controller;
class DataController extends Controller {
	public function mod(){
		$p = I('GET.');
		if(!$p['_m'] || $p['_a']) jsonError();
		$mod = D($p['_m']);
		$params = $p;
		unset($params['m']);
		unset($params['_m']);
		unset($params['_a']);
		$json = $mod->$p['_a']($params);
		jsonShow($json);
	}
	public function s(){
		$p = I('GET.');
		if(!$p['_m'] || $p['_a']) jsonError();
		$mod = D($p['_m']);
		$params = I('POST.',$p);
		unset($params['m']);
		unset($params['_m']);
		unset($params['_a']);
		$json = $mod->$p['_a']($params);
		 
		jsonShow($json);
	}
	public function g(){
		$p = I('GET.');
		 
		if(!$p['_m'] || $p['_a']) jsonError();
 
		$mod = D($p['_m']);
		
		$params = $p;
		unset($params['m']);
		unset($params['_m']);
		unset($params['_a']);
		 
		$json = $mod->$p['_a']($params);
		 
		jsonShow($json);
	}
	public function p(){
		$p = I('GET.');
		$r = file_get_contents("php://input");
		$params = json_decode($r,true);
		 
		if(!$p['_m'] || $p['_a']) jsonError();
 
		$mod = D($p['_m']);
 
		unset($params['m']);
		unset($params['_m']);
		unset($params['_a']);
		 
		$json = $mod->$p['_a']($params);
		 
		jsonShow($json);
	}
}
