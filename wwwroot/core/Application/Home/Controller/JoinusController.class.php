<?php
namespace Home\Controller;
use Think\Controller;
class JoinusController extends Controller {
    public function detail($id){
		$this->arc = D('Joinus')->WHERE(array('id'=>$id))->find();
		$this->catalog = D('Catalogs')->WHERE(array('id'=>$this->arc['id']))->find();
		 
		$this->display();
	}
	 
}