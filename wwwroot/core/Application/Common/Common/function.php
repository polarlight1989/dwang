<?php

function parseKV($arr,$k,$v){
	$a = array();
	
	if($arr) foreach($arr as $ks=>$vs){
		$a[$vs[$k]] = $vs[$v];
	}
	return $a;
}
function jError($msg){
	echo json_encode(array('status'=>0,'msg'=>$msg,'errormsg'=>$msg));
	exit;
}
function getMillisecond() {
list($t1, $t2) = explode(' ', microtime());
return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);
}
function jsonError($msg=''){
	$arr = array('errormsg'=>$msg,'status'=>0);
	if(C('DEBUG') == 1){
		print_r($arr);
		exit;
	}
	echo json_encode($arr);
	exit;
}
function apikey($arr){ 
	return strtoupper(md5($arr['TIMESTAMP'].C('API_KEY').$arr['ACTION'])); 
}
function format_ArrayKey($arr,$keyname){
	$result = array();
	foreach($arr as $v){
		$result[$v[$keyname]] = $v;
	}
	return $result;
}
function format_ArrayCallback(&$arr,$callback){
	 
	foreach($arr as $k=>$v){
		foreach($v as $kk=>$vv){
			 
			if($callback[$kk]){
				$fn = $callback[$kk];
				 
				$arr[$k][$kk] = $fn($vv);
				 
			}
		}
		
	}
	return $arr;
}
function errorMsg($msg){
 
	echo json_encode(array('errormsg'=>$msg,'status'=>0));
	exit;
}
function jsonSuccess($msg=''){
	jsonShow(array('status'=>1,'msg'=>$msg));
}
function jsonShow($json){
	echo json_encode($json);
	exit;
}
function GNT(){
	$time = time();
	if(APP_DEBUG){
		$move_day = D('Config')->find('move_day');
		$move_day = $move_day['value'];
		$time += ($move_day * 86400);
	}
	
 
	return $time;
}

function ajaxTableParseField($f,$val,$vp){
 
	if($f['title'] == 'checkbox'){
		$str = '<input type="checkbox" name="'.$f['fname'].'[]" value="'.$val.'">';
 
		return $str;
	}
	#operation
	if($f['html']){
		$html = $f['html'];
		$html = str_replace("{{val}}",$val,$html);
		#$html = '<a ></a>';
 
		return html_entity_decode($html);
	}
	return $val;
	exit;
}
function check_idcard($vStr){
	$vCity = array(
        '11','12','13','14','15','21','22',
        '23','31','32','33','34','35','36',
        '37','41','42','43','44','45','46',
        '50','51','52','53','54','61','62',
        '63','64','65','71','81','82','91'
    );
 
    if (!preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $vStr)) return false;
 
    if (!in_array(substr($vStr, 0, 2), $vCity)) return false;
 
    $vStr = preg_replace('/[xX]$/i', 'a', $vStr);
    $vLength = strlen($vStr);
 
    if ($vLength == 18)
    {
        $vBirthday = substr($vStr, 6, 4) . '-' . substr($vStr, 10, 2) . '-' . substr($vStr, 12, 2);
    } else {
        $vBirthday = '19' . substr($vStr, 6, 2) . '-' . substr($vStr, 8, 2) . '-' . substr($vStr, 10, 2);
    }
 
    if (date('Y-m-d', strtotime($vBirthday)) != $vBirthday) return false;
    if ($vLength == 18)
    {
        $vSum = 0;
 
        for ($i = 17 ; $i >= 0 ; $i--)
        {
            $vSubStr = substr($vStr, 17 - $i, 1);
            $vSum += (pow(2, $i) % 11) * (($vSubStr == 'a') ? 10 : intval($vSubStr , 11));
        }
 
        if($vSum % 11 != 1) return false;
    }
 
    return true;
}
function check_truename($name){
	if (preg_match('/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/', $name)) {
		return true;
	} else {
		return false;
	}
}
function check_mobile($phonenumber){
	if(preg_match("/^1[34578]{1}\d{9}$/",$phonenumber)){  
		return true;
	}else{  
		return false;
	}  
}
function _json_decode($data){
	$data = html_entity_decode($data);
	return json_decode($data,true);
}
function _serialize($data){
	return json_encode($data);
}
function _unserialize($data){
	return json_decode($data,true);
}
function is_mobile()  
{  
	if(IS_MOBILE == 1) return true;
 $_SERVER['ALL_HTTP'] = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';  
 $mobile_browser = '0';  
 if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))  
  $mobile_browser++;  
 if((isset($_SERVER['HTTP_ACCEPT'])) and (strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') !== false))  
  $mobile_browser++;  
 if(isset($_SERVER['HTTP_X_WAP_PROFILE']))  
  $mobile_browser++;  
 if(isset($_SERVER['HTTP_PROFILE']))  
  $mobile_browser++;  
 $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));  
 $mobile_agents = array(  
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',  
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',  
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',  
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',  
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',  
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',  
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',  
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',  
    'wapr','webc','winw','winw','xda','xda-'
    );  
 if(in_array($mobile_ua, $mobile_agents))  
  $mobile_browser++;  
 if(strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false)  
  $mobile_browser++;  
 // Pre-final check to reset everything if the user is on Windows  
 if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') !== false)  
  $mobile_browser=0;  
 // But WP7 is also Windows, with a slightly different characteristic  
 if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows phone') !== false)  
  $mobile_browser++;  
 if($mobile_browser>0)  
  return true;  
 else
  return false;
  }
  function getip()
{
  $ip=false;
  if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
  }
  if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
    if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
    for ($i = 0; $i < count($ips); $i++) {
      if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
        $ip = $ips[$i];
        break;
      }
    }
  }
  return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}
function addMonth($arr,$move){
	$result = array();
	if($move>0){
 
		$result['m'] = $arr['m'] + $move;
		$result['y'] = (int)($arr['m'] / 12) + $arr['y'];
		$result['m'] = $arr['m'] % 12;
		$result['d'] = D('Config')->g('account_day');
		print_r($arr);
		print_r($result);
		exit;
	}
	return $result;
}
//获得下次结算时间
function getBatchNextTime($arr){
	$result = array();
 
	$m = (int)$arr['m'] + 1;
	$result['y'] = (int)($m / 12) + $arr['y'];
	$result['m'] = $m % 12;
	$result['d'] = D('Config')->g('account_day');
 
	return $result;
}
//获得结算时间范围
function getBatchDate($move=0,$time=0){
	$time = $time ? $time : GNT();
	$d = D('Config')->g('account_day');
	$y = date("Y",$time);
	$m = date("m",$time);
	$move--;
	if($move){
		if($move < 0){
 
			for($move;$move<0;$move++){
				
				$m--;
				if($m==0){
					$m=12;
					$y--;
				}
			}
		}
		if($move > 0){
			for(;$move>0;$move--){
				$m++;
				if($m==13){
					$m=1;
					$y++;
				}
			}
		}
		 
	}
	return $y.$m.$d;
}
//0=本次
function getBatchZone($move=0){
	$result = array();
	$init = 0;
	if($move == 0){
		$min = array();
		$last = D('Batch')->WHERE(array('done'=>0))->ORDER("y DESC,m DESC")->find();
		//不存在未结算
		if(!$last){
			$init = 1;
			$last = D('Batch')->WHERE(array('done'=>1))->ORDER("y DESC,m DESC")->find();
			if(!$last){
				
				$startday = D('Config')->g('install_day'); 
				$last = explode("-",$startday);
			}
			$min['y'] = $last[0];
			$min['m'] = $last[1];
			$min['d'] = $last[2];
 
		}else{
			$min['y'] = $last['y'];
			$min['m'] = $last['m'];
			$min['d'] = $last['d'];
		}
		$max = getBatchNextTime($min);
		
		$result['min'] = strtotime(implode("-",$min));
		$result['max'] = strtotime(implode("-",$max));
		//初始化
		if($init == 1){
			$data = $min;
			 
			$data['batch_id'] = getBatchId($result);
			$data['fdate'] = $result['max'];
			$data['done'] = 0;
			$data['cdate'] = GNT();
			D('Batch')->add($data);
		}
		return $result;
	}
}

function getBatchId($zone=array()){
	if(!$zone) $zone = getBatchZone();
	return min($zone).max($zone);
}

function datetotime($v){
	$v = str_replace('年','-',$v);
	$v = str_replace('月','-',$v);
	$v = str_replace('日','',$v);
 
	return strtotime("$v 0:0:0");
	return strtotime($v);
}
function getMonthTime($y,$m,$office="+1"){
	 
	$t1 = strtotime($y.$m."01");
	$t2 = strtotime(date('Y-m-d', strtotime("{$y}-{$m}-01" . $office.'  month -1 day'))) + 86400 -1;
	return array($t1,$t2);
	
	exit;
}

function getQuarter(){
	$season = ceil((date('n'))/3);//当月是第几季度
 
    $t1 = date('Y-m-d H:i:s', mktime(0, 0, 0,$season*3-3+1,1,date('Y')));
    $t2 = date('Y-m-d H:i:s', mktime(23,59,59,$season*3,date('t',mktime(0, 0 , 0,$season*3,1,date("Y"))),date('Y')));
	return array(strtotime($t1),strtotime($t2));
	exit;
	
}

//@ $t 格式： 2015年01月01日 
//@ $move 偏移天数
function ymdToTime($t,$move = 0){
	$t = str_replace("年","",$t);
	$t = str_replace("月","",$t);
	$t = str_replace("日","",$t);
	$t = strtotime($t);
	if($move) $t += ($move * 86400);
	return $t;
}

function getExtension($file)
{
 
	return end(explode('.', $file));
}

/*
 * @startAA : 如存在则从符合列名0的下一行开始读取
 * @keys : 匹配列表
 */
function getExcelData($filePath,$params=array()){
	include_once PLUGIN_DIR."PHPExcel/IOFactory.php";
	$startAA = $params['startAA'];
	$keys = $params['keys'];
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
 
	try{
        $PHPReader = $objReader->load(UPLOAD_DIR.$filePath);
    }catch(Exception $e){}
	 
    if(!isset($PHPReader)) return array("error"=>0,'message'=>'read error!');
	
	$allWorksheets = $PHPReader->getAllSheets();
	$i = 0;
	
	foreach($allWorksheets as $objWorksheet){
		$in = 1;
		$header = array();
		if($startAA) $in = 0;
		$sheetname=$objWorksheet->getTitle();
		$allRow = $objWorksheet->getHighestRow();//how many rows
		$highestColumn = $objWorksheet->getHighestColumn();//how many columns
		$allColumn = PHPExcel_Cell::columnIndexFromString($highestColumn);
 
		
		$isMergeCell = array();
        foreach ($objWorksheet->getMergeCells() as $cells) {//merge cells
            foreach (PHPExcel_Cell::extractAllCellReferencesInRange($cells) as $cellReference) {
                $isMergeCell[$cellReference] = true;
            }
        }
		for($currentRow = 1 ;$currentRow<=$allRow;$currentRow++){ 
            $row = array(); 
            for($currentColumn=0;$currentColumn<$allColumn;$currentColumn++){          
                $cell =$objWorksheet->getCellByColumnAndRow($currentColumn, $currentRow);
                $afCol = PHPExcel_Cell::stringFromColumnIndex($currentColumn+1);
                $bfCol = PHPExcel_Cell::stringFromColumnIndex($currentColumn-1);
                $col = PHPExcel_Cell::stringFromColumnIndex($currentColumn);
                $address = $col.$currentRow;
                $value = $objWorksheet->getCell($address)->getValue();
					 
                if(substr($value,0,1)=='='){
                    return array("error"=>0,'message'=>'can not use the formula!');
                        exit;
                }
                if($cell->getDataType()==PHPExcel_Cell_DataType::TYPE_NUMERIC){
                   # $cellstyleformat=$cell->getParent()->getStyle( $cell->getCoordinate() )->getNumberFormat();
                    #$formatcode=$cellstyleformat->getFormatCode();
                    if (preg_match('/^([$[A-Z]*-[0-9A-F]*])*[hmsdy]/i', $formatcode)) {
                        $value=gmdate("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($value));
                    }else{
                        $value=PHPExcel_Style_NumberFormat::toFormattedString($value,$formatcode);
                    }                
                }
                if($isMergeCell[$col.$currentRow]&&$isMergeCell[$afCol.$currentRow]&&!empty($value)){
                    $temp = $value;
                }elseif($isMergeCell[$col.$currentRow]&&$isMergeCell[$col.($currentRow-1)]&&empty($value)){
                    $value=$arr[$currentRow-1][$currentColumn];
                }elseif($isMergeCell[$col.$currentRow]&&$isMergeCell[$bfCol.$currentRow]&&empty($value)){
                    $value=$temp;
                }
				if((string)$value){
					$row[$currentColumn] = (string)$value; 
				}
            } 
			 
			
			if($in == 1 && $row){
				$row2 = $row;
				if($header){
					$row2 = array();
					foreach($header as $k=>$v){
						foreach($keys as $kk=>$vv){
							if(trim($v) == trim($vv)) $row2[$kk] = $row[$k];
						}
					}
					if($params['mustkey'] && empty($row2[$params['mustkey']])) unset($row2);
				}else{
					$row2 = $row;
				}
				if($row2) $array[] = $row2; 
			}
			
			if($startAA && $row[0] == $startAA){
				$in = 1;
				$header = $row;
            }
			
        } 
 
        $i++;
	}
	 
	return $array;
}


function catalogA($id){
	$url = "Catalogs/index";
	
	
	$data = D("Catalogs")->field('id,title,entitle')->WHERE(array('id'=>$id))->find();
	$url = catalogHref($id);
	$data['title'] = C('LANG')=='zh'?$data['title']:$data[C('LANG').'title'];
 
	return "<a href='{$url}'>{$data[title]}</a>";
}
function catalogHref($id){
	$lang = C('lang');
	$url = "/index.php/{$lang}/catalog/{$id}";
	return $url;
}
function arcHref($id,$catalogid){
	$lang = C('lang');
	$url = "/index.php/{$lang}/arc/{$catalogid}/{$id}";
	return $url;
}


function getLang($k){
	$language = C('LANG'); 
	$langs = array();
	
	$langs['We Are In The World'] = '我们在全球';
	$langs['SELECTION REGION'] = '选择区域';
	
 
	
	$lang = $langs[$k];
	return $language == 'zh' ? $lang : $k;
}
function lang($id){
	$now = C('LANG');
	$langs = array();
	$langs['zh'] = array(
		'page_next' => '下一页',
		'page_prev' => '上一页',
		'page_last' => '最后',
		'page_first' => '第一页',
		'Upload time'=>'发布时间',
		'Click times'=>'点击数',
		'times'=>'次',
		'READ MORE'=>'阅读全文',
		'ABOUT US'=>'关于我们',
		'NEWS'=>'公司动态',
		'MORE VIDEOS'=>'更多视频',
		'indexname'=>'首页',
		'Select Country'=>'选择国家/地区'
	);
	$langs['en'] = array(
		'page_next' => 'NEXT',
		'page_prev' => 'PREV',
		'page_last' => 'END',
		'page_first' => 'FIRST',
		'Upload time'=>'Upload time',
		'Click times'=>'Click times',
		'times'=>'times',
		'READ MORE'=>'READ MORE',
		'ABOUT US'=>'ABOUT US',
		'NEWS'=>'NEWS',
		'MORE VIDEOS'=>'MORE VIDEOS',
		'indexname'=>'welcome'
	);
	return $langs[$now][$id];
}
function alang($id){
	$now = ALANG;
	$now = 'zh';
	$langs = array();
	$id = array_filter(explode(" ",$id));
	$langs['zh'] = array(
		'welcome' => '欢迎',
		'singlecatalog'=>'单页栏目',
		'contentedit'=>'内容编辑',
		'contentmanage'=>'内容管理',
		'save'=>'保存',
		'back'=>'返回',
		'articles'=>'文档',
		'selectcatalog'=>'请选择栏目',
		'title'=>'标题',
		'catalog'=>'栏目',
		'thumb'=>'图片',
		'publish'=>'发布',
		'date'=>'时间',
		'intro'=>'简介',
	);
	$langs['en'] = array(
		'welcome' => 'Welcome',
		'singlecatalog'=>'Single Catalog',
		'contentedit'=>'Content Edit',
		'contentmanage'=>'Content',
		'save'=>'Save',
		'back'=>'Back',
		'articles'=>'Articles',
		'selectcatalog'=>'Select Catalog',
		'title'=>'Title',
	);
	$str = "";
	$row=0;
	if($id) foreach($id as $v){
		$row++;
		$v2 = strtolower($v);
		$str .=  $langs[$now][$v2] ? $langs[$now][$v2] : ($row>0?' ':'').$v;
	}
	return $str;
}
function msubstr($str,  $length, $suffix=true)  
    {  
	$charset="utf-8";
	$start=0;
  if(function_exists("mb_substr")){  
              if($suffix)  
              return mb_substr($str, $start, $length, $charset)."...";  
              else
                   return mb_substr($str, $start, $length, $charset);  
         }  
         elseif(function_exists('iconv_substr')) {  
             if($suffix)  
                  return iconv_substr($str,$start,$length,$charset)."...";  
             else
                  return iconv_substr($str,$start,$length,$charset);  
         }  
         $re['utf-8']   = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef]
                  [x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";  
         $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";  
         $re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";  
         $re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";  
         preg_match_all($re[$charset], $str, $match);  
         $slice = join("",array_slice($match[0], $start, $length));  
         if($suffix) return $slice."…";  
         return $slice;
    }
function getArea(){
	return array(
		'新加坡',
		'香港',
		'印度',
		'波兰','非洲',
	);
}
function getAreaOptions(){
	$arr = getArea();
	$html = "";
	foreach($arr as $k=>$v){
		$html .= "<option value='{$k}'>{$v}</option>";
	}
	return $html;
}
function getPage($length,$count){
	$allCount = (int)($count/$length+($count%$length?1:0));

	if($allCount == 1) return;
	$page = I('GET.page',1);
	
	
	if($allCount <= 1) return;
	$REQUEST_URI = $_SERVER['REQUEST_URI'];
	$QUERY_STRING = $_SERVER['QUERY_STRING'];
	$req = str_replace("?".$QUERY_STRING,"",$REQUEST_URI);
	
	$firstpage = $req."?page=1";
	$prevpage = $req."?page=".$page-1;
	$lastpage = $req."?page={$allCount}";
	$nextpage = $req."?page=".$page+1;
	?>
	<div class="paged" style='padding-top:20px;'><?php
	
		if($page>1){
	?>
		<a href="<?=$firstpage?>" class="end"><?=lang('page_first')?></a>
		<a href="<?=$prevpage?>" class="next"><?=lang('page_prev')?></a>
<?php } ?>
		<?php
		for($i=1;$i<=$allCount;$i++){
			$href = $req."?page={$i}";
		?>
		<a href="<?=$href?>" class="<?=$i==$page?'cur':''?>"><?=$i?></a>
		<?php } if($page<$allCount){
	?>
		<a href="<?=$nextpage?>" class="next"><?=lang('page_next')?></a>
		<a href="<?=$lastpage?>" class="end"><?=lang('page_last')?></a>
		<?php } ?>
	</div>
	<?php
	
}

function url($u){
	return "/index.php/{$u}";;
}
function entity_decode($str){
 
	if(strpos($str,'lt;')){
 
		$str = html_entity_decode($str);
		return entity_decode($str,'lt;');
	}
	return $str;
}
session_start();
$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace("/index.php/","",$uri);
 
$_lang = substr($uri,0,2);
 
session_start();
C('LANG','zh');
if($_lang == 'en'){
	C('LANG','en');
}
 
define('LANG',C('LANG'));
$_alang = $_SESSION['ALANG']?$_SESSION['ALANG']:'zh';
C('ALANG',$_alang);
 define('ALANG',C('ALANG'));
 


function get_extension($file)
{
	$a = explode(".",$file);
	return $a[1];
}


function uploadMd5File($name){
	$uploaddir = '/Uploads/';
	
	$f = $_FILES[$name];
	$fileMd5 = md5_file($f['tmp_name']);
	$fileSize = filesize($f['tmp_name']);
	 
	$hz = get_extension($f['name']);
	 
	$paths = array();
	$paths[0] = substr($fileMd5,0,8);
	$paths[1] = substr($fileMd5,8,8);
	$paths[2] = substr($fileMd5,16,8);
	$paths[3] = substr($fileMd5,24,8);
	$path =implode("/",$paths)."/";
	$allFileName = ROOT_DIR.$uploaddir.$path.$fileSize.".".$hz;
	if(!file_exists($allFileName)){
		@mkdir(ROOT_DIR.$uploaddir.$path,'0777',true);
		move_uploaded_file($f['tmp_name'],ROOT_DIR.$uploaddir.$path.$fileSize.".".$hz);
	}
	return array('img'=>$uploaddir.$path.$fileSize.".".$hz,'size'=>$fileSize,'status'=>1);
}














