<?php
namespace Home\Controller;
use Think\Controller;
class ArcsController extends Controller {
    public function detail(){
		$id = I('GET.id');
 		
		$this->id = $id;
		$catalogid = I('GET.catalogid');

		$lang = I('GET.lang');
		C('LANG',$lang);
		if($id && $catalogid){
			$this->catalog = D('Catalogs')->WHERE(array('id'=>$catalogid))->find();
			$this->banner = $this->catalog['thumb'];
 			$this->topcatalogid = D('Catalogs')->getTopId($this->catalog['id']);
			$tpl = $this->catalog['arctpl'];
 
			if($tpl) $this->display("Arcs/{$tpl}");
		}
		exit;
	}
	public function video(){
		$this->display();
	}
}