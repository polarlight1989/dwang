<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dongtai`;");
E_C("CREATE TABLE `dongtai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `year` varchar(50) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `lang` varchar(255) NOT NULL DEFAULT 'zh',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk");
E_D("replace into `dongtai` values('7','���¼�','���¼Ǵ��¼Ǵ��¼�','1990','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998257','','zh');");
E_D("replace into `dongtai` values('8','���¼�','���¼Ǵ��¼Ǵ��¼�','1990','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998259','','zh');");
E_D("replace into `dongtai` values('9','���¼�','���¼Ǵ��¼Ǵ��¼�','1990','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998261','','zh');");
E_D("replace into `dongtai` values('10','���¼�','���¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼�','1990','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998265','','zh');");
E_D("replace into `dongtai` values('11','���¼�','���¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼�','1990','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998267','','zh');");
E_D("replace into `dongtai` values('12','���¼�','���¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼�','2000','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998277','','zh');");
E_D("replace into `dongtai` values('13','���¼�','���¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼�','1995','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998286','','zh');");
E_D("replace into `dongtai` values('14','���¼�','���¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼�','1995','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998289','','zh');");
E_D("replace into `dongtai` values('6','���¼�','���¼Ǵ��¼Ǵ��¼�','1990','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998242','','zh');");
E_D("replace into `dongtai` values('15','���¼�','���¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼�','1999','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998294','','zh');");
E_D("replace into `dongtai` values('16','���¼�','���¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼Ǵ��¼�','1999','','<p>���¼Ǵ��¼Ǵ��¼�</p>','1478998297','','zh');");

require("../../inc/footer.php");
?>