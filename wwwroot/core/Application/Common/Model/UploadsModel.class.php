<?php
namespace Common\Model;
use Think\Model;
class UploadsModel extends ManagerModel {
	Protected $autoCheckFields = false;
	public function upload($p){

		 
		$type = $p['type'] ? $p['type'] : I('GET.type');
 
		if($type == 'imagebase64'){
			$val = $p['val'];
			$base64 = $val;
			$uploaddir = '/Uploads/';
			$md5file = md5($base64);
			$paths = array();
			$paths[0] = substr($md5file,0,8);
			$paths[1] = substr($md5file,8,8);
			$paths[2] = substr($md5file,16,8);
			$paths[3] = substr($md5file,24,8);
			$path =implode("/",$paths)."/";
			$filename = strlen($base64).".png";
			 
			if(!file_exists(ROOT_DIR.$uploaddir.$path.$filename)){
				 
				@mkdir(ROOT_DIR.$uploaddir.$path,'0777',true);
				$img = explode(',',$base64);
				
				file_put_contents(ROOT_DIR.$uploaddir.$path.$filename,base64_decode($img[1]));
			}
			return array('status'=>1,'img'=>$uploaddir.$path.$filename);
		}

		if($type == 'uploadfile'){
			$f = $_FILES;
 	 
			if($f[$type]['error']==0){
 			
				if (($_FILES[$type]["type"] == "image/gif") || ($_FILES[$type]["type"] == "image/jpeg") || ($_FILES[$type]["type"] == "image/pjpeg") || ($_FILES[$type]["type"] == "image/png")){
					 
					return uploadMd5File($type);
					 
				}
  
			}
		}
	}
}




















	












