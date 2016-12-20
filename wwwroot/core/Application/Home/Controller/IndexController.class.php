<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        C('IS_MOBILE',is_mobile()?1:0); 
        if(C('IS_MOBILE')){ 
            C('DEFAULT_V_LAYER','Mobile');
        }

		$this->LANG = $lang = LANG;
		C('LANG',$lang);
		$this->topcatalogid = D('Catalogs')->getTopId($id);
        exit;
        $this->display();
    }
    public function view(){
    	$view = I('GET.view');
    	
    	$view = explode(".",$view); 
        
        $view = implode('/',$view);
    	$this->display($view);
    }
    public function api(){
        
        $p = I('POST.');
        #C('DEBUG',1);
        if(!$p) $p = I('GET.');
        $this->API_KEY = $apikey = C('API_KEY');
        if(I('GET.help')==1){ 
            $this->display('help');
            exit;
        }
		//$staticUrl = 'http://dwang.lrpimc.com';
        $timestamp = $p['TIMESTAMP'];
        if(strlen($timestamp)!=13) return; 
        $time = date("Ymd",substr($timestamp,0,10));
        $this->timestamp = getMillisecond();
        if(date("Ymd",substr($timestamp,0,10))!=date("Ymd",time())) jsonError('请求已过期');
        $check = apikey($p); 
        if($check != $p['KEY']) jsonError('验证错误');
        $key = $p['KEY']; 
        $action = $p['ACTION'];
        $page = $p['PAGE'] ? $p['PAGE'] : 1;
        $length = $p['LENGTH'] ? $p['LENGTH'] : 10;
        $field = $p['FIELD'] ? $p['FIELD'] : '';
        $field = str_replace("|",",",$field);
        //栏目列表
        if($action == 'CATALOG_LIST'){
            $result = D('Catalogs')->FIELD('id,title')->selectCount();
            $result['status'] = 1; 
        }
        //文章列表 
        if($action == 'ARC_LIST'){
            
            $catalog_id = $p['CATALOG_ID'] ? $p['CATALOG_ID'] : '';
            if(!$field) jsonError('字段为空');
            $map['catalog_id'] = $catalog_id;
            $result = D('Arcs')->WHERE($map)->field($field)->PAGE($page,$length)->selectCount(); 
            $result['status'] = 1; 
        }
        //文章详情
        if($action == 'ARC_DETAIL'){
            $id = $p['ID'] ? $p['ID'] : 0;
            if(!$id) jsonError('ID为空');
            $user_id = $p['USER_ID'];
            $u = D('Users')->WHERE(array('id'=>$user_id))->getField('id');
            if(!$u) jsonError('用户不存在,参数需要USER_ID');
            $result = D('Arcs')->WHERE($map)->field($field)->PAGE($page,$length)->find();
            if(!$result) jsonError('文档不存在');
            D('VisitLogs')->add(array('user_id'=>$user_id,'arc_id'=>$id));
            $result['status'] = 1; 
        }
 
        //用户
        if($action == 'USER_FIND'){
            $map['name'] = $p['NAME'];
            $map['pwd'] = $p['PWD'];
            $result = D('Users')->WHERE($map)->find();
            if(!$result) jsonError('用户名/密码错误');
            unset($result['pwd']);
            $result['status'] = 1;
        }
        //推送数据
        if($action == 'PUSH_DATA'){
           # C('DEBUG',1);
           
            $push_id = $p['PUSH_ID'];
            if(!$push_id) jsonError('无推荐位ID');
            $push_group = $p['PUSH_GROUP'];
            if(!$push_group) jsonError('无推荐用户组ID');
            $map[] = "(find_in_set('$push_id',push_id) OR push_id = 'all')";
            $map[] = "(find_in_set('$push_group',push_group) OR push_group = 'all')";
            $result = D('Arcs')->field($field)->WHERE(implode(" AND ",$map))->field($field)->PAGE($page,$length)->selectCount(); 
            $result['status'] = 1;
        }
        if(!$result['status']) jsonError('请求错误');
        echo json_encode($result);
    }

    public function main(){
        C('IS_MOBILE',IS_MOBILE?1:0); 
        if(C('IS_MOBILE')){ 
            C('DEFAULT_V_LAYER','Mobile');
        } 
        $this->LANG = $lang = LANG;
        C('LANG',$lang);
        $this->topcatalogid = D('Catalogs')->getTopId($id);
        $this->display();
    }
    public function test(){
    	
    }
}
