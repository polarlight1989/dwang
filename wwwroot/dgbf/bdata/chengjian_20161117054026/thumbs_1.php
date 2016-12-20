<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `thumbs`;");
E_C("CREATE TABLE `thumbs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(100) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `lang` varchar(50) NOT NULL DEFAULT 'zh',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `thumbs` values('18','/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg','1479328738','1479328751','荣誉资质2','50','zh');");
E_D("replace into `thumbs` values('16','/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg','1479328734','1479328754','荣誉资质5','50','zh');");
E_D("replace into `thumbs` values('17','/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg','1479328737','1479328753','荣誉资质4','50','zh');");
E_D("replace into `thumbs` values('12','/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg','1479328730','1479328762','荣誉资质9','50','zh');");
E_D("replace into `thumbs` values('13','/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg','1479328731','1479328760','荣誉资质8','50','zh');");
E_D("replace into `thumbs` values('14','/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg','1479328732','1479328758','荣誉资质7','50','zh');");
E_D("replace into `thumbs` values('15','/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg','1479328734','1479328756','荣誉资质6','50','zh');");
E_D("replace into `thumbs` values('19','/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg','1479328738','1479328752','荣誉资质3','50','zh');");
E_D("replace into `thumbs` values('20','/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg','1479328739','1479328750','荣誉资质1','50','zh');");

require("../../inc/footer.php");
?>