<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->curuser = session('curuser');
		if(!$this->curuser){
			redirect('/admina/login/');
			exit;
		}
		$this->assign('TPL_URL',"?g=Admin&c=Index&a=tpl&tpl=");
		$this->ANGULAR_URL = '/core/Public/Angular/';
		$this->cmsname = '网站管理系统';
		$this->LANG = $this->ALANG = ALANG;
		$this->assign('PUBLIC_URL',C('PUBLIC_URL'));
        $this->show();
    }
	public function tpl(){
 
 
		$this->assign('PUBLIC_URL',C('PUBLIC_URL'));
		$tplname = I('GET.tpl');
 
		$tpl = explode(".",$tplname);
		$tpl = implode("/",$tpl);
 
		$this->display($tpl);
	}
	public function loginout(){
		session('curuser',null);
		redirect('/admina/login/');
			exit;
	}
	public function login(){
		$this->assign('PURL','/core/Public/Angular/');
		$this->sys_name = D('Config')->g('sys_name');
		$p = I('POST.');
		
		if($p){
 
			if($p['username'] == 'admin' && $p['password'] == '123123'){
				$u = array();
				$this->sys_name = D('Config')->g('sys_name');
				$u['rank_name'] = $this->sys_name;
				$u['name'] = $u['jobnumber'] = 'admin';
				$u['rank_id'] = 0;
				session('curuser',$u);
				redirect('/admina/#');
				exit;
			}
			/*
			$map = array();
			$map['_logic'] = 'OR';
			$map['jobnumber'] = $p['username'];
			$map['phone'] = $p['username'];
			$map['pwd'] = md5salt($p['password']);
			
			$u = D('Users')->WHERE($map)->find();
			if($u && $u['rank_id'] > 0){
				$rankName = D('Rank')->WHERE(array('id'=>$u['rank_id']))->getField('name');
 
				$u['rank_name'] = $rankName;
			 
				session('curuser',$u);
				redirect('/#');
				exit;
			}else{
 
				echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8"><script>alert("用户名/密码错误");location.href = "/login"</script>';
 
			}
			exit;
			*/
		}	
		session('curuser',null);
		$this->show();
	}
}