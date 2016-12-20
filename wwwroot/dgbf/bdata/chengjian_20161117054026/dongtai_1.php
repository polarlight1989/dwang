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
E_D("replace into `dongtai` values('7','大事记','大事记大事记大事记','1990','','<p>大事记大事记大事记</p>','1478998257','','zh');");
E_D("replace into `dongtai` values('8','大事记','大事记大事记大事记','1990','','<p>大事记大事记大事记</p>','1478998259','','zh');");
E_D("replace into `dongtai` values('9','大事记','大事记大事记大事记','1990','','<p>大事记大事记大事记</p>','1478998261','','zh');");
E_D("replace into `dongtai` values('10','大事记','大事记大事记大事记大事记大事记大事记','1990','','<p>大事记大事记大事记</p>','1478998265','','zh');");
E_D("replace into `dongtai` values('11','大事记','大事记大事记大事记大事记大事记大事记大事记大事记大事记','1990','','<p>大事记大事记大事记</p>','1478998267','','zh');");
E_D("replace into `dongtai` values('12','大事记','大事记大事记大事记大事记大事记大事记大事记大事记大事记','2000','','<p>大事记大事记大事记</p>','1478998277','','zh');");
E_D("replace into `dongtai` values('13','大事记','大事记大事记大事记大事记大事记大事记大事记大事记大事记','1995','','<p>大事记大事记大事记</p>','1478998286','','zh');");
E_D("replace into `dongtai` values('14','大事记','大事记大事记大事记大事记大事记大事记大事记大事记大事记','1995','','<p>大事记大事记大事记</p>','1478998289','','zh');");
E_D("replace into `dongtai` values('6','大事记','大事记大事记大事记','1990','','<p>大事记大事记大事记</p>','1478998242','','zh');");
E_D("replace into `dongtai` values('15','大事记','大事记大事记大事记大事记大事记大事记大事记大事记大事记','1999','','<p>大事记大事记大事记</p>','1478998294','','zh');");
E_D("replace into `dongtai` values('16','大事记','大事记大事记大事记大事记大事记大事记大事记大事记大事记','1999','','<p>大事记大事记大事记</p>','1478998297','','zh');");

require("../../inc/footer.php");
?>