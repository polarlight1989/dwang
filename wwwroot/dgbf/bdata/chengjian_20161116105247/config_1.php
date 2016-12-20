<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `config`;");
E_C("CREATE TABLE `config` (
  `id` varchar(100) NOT NULL,
  `value` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `config` values('tel','021-53599950','联系电话');");

require("../../inc/footer.php");
?>