<?php
namespace Home\Controller;
use Think\Controller;
class CatalogsController extends Controller {
    public function index(){
    	C('IS_MOBILE',is_mobile()?1:0); 
        if(C('IS_MOBILE')){ 
            C('DEFAULT_V_LAYER','Mobile');
        }
		$this->lang = I('GET.lang');

		C('LANG',$this->lang);
		$id = I('GET.id');
		$this->topcatalogid = D('Catalogs')->getTopId($id);
	 
		$catalog =  D('Catalogs')->WHERE(array('id'=>$id))->find();
		$catalog['title'] = C('LANG')=='zh'?$catalog['title']:$catalog[C('LANG').'title'];
		$catalog['content'] = C('LANG')=='zh'?$catalog['content']:$catalog[C('LANG').'content'];
		$this->catalog = $catalog;
		//banner
		$banner =  $this->catalog['thumb'];
		if(!$banner&&$this->catalog['pid']){
			$pcatalog = D('Catalogs')->WHERE(array('id'=>$this->catalog['pid']))->find();
			$banner = $pcatalog['banner'];
		}
		$this->banner = $banner;
		$this->catalog_id = $id;
		$this->display("Catalogs/".$this->catalog['tpl']);
       // $this->show();
    }
}