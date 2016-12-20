<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `catalogs`;");
E_C("CREATE TABLE `catalogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `entitle` varchar(50) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `actionurl` varchar(50) NOT NULL,
  `ord` int(50) NOT NULL DEFAULT '100',
  `level` int(3) NOT NULL,
  `content` varchar(3000) CHARACTER SET utf8 NOT NULL,
  `encontent` varchar(3000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `thumb` varchar(300) NOT NULL,
  `tpl` varchar(100) NOT NULL,
  `arctpl` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `mark` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=gbk");
E_D("replace into `catalogs` values('3','0','','企业概况','Situation','','1478956580','','100','1','<div class=''txtConList''><p style=\"text-align: center;\"><img src=\"/public/images/zuzhi.jpg\"/></p></div>','','','','','','zh','');");
E_D("replace into `catalogs` values('4','3','','公司介绍','Company','','1478887011','catalogs','100','2','','','','/html/images/banner_zizhi.png','','','zh','');");
E_D("replace into `catalogs` values('36','4','','领导班子','Leaders','','','catalogs/single','100','0','','','','/public//images/banner_zizhi.png','leaders','leaders','','');");
E_D("replace into `catalogs` values('11','3','','企业文化','Culture','','','catalogs/arcs','100','2','','','arcs','','thumbarcs','','zh','');");
E_D("replace into `catalogs` values('43','42','','代表项目','Project','','','catalogs/arcs','100','0','','','arcs','','Project','arc','','');");
E_D("replace into `catalogs` values('33','3','','荣誉资质','Honor','','1479113225','catalogs/single','100','0','<ul class=\"zizhiList\">\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n</ul>','','','/public/images/banner_zizhi.png','single','','','');");
E_D("replace into `catalogs` values('34','3','','组织架构','Organization','','1478956684','catalogs/single','100','0','<div class=''txtConList''><p style=\"text-align: center;\"><img src=\"/public/images/zuzhi.jpg\"/></p></div>','','single','','single','','','');");
E_D("replace into `catalogs` values('35','4','','公司介绍','Information','','1479254197','catalogs/single','100','0','<div class=\"txtConList\">\n	<h2>\n		<img src=\"/public/images/icon_1.png\" />????公司情况\n	</h2>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		公司简介 ?整合优势\n	</p>\n	<p>\n		上海城建国际工程有限公司（以下简称“城建国际”）是一家以海外工程建设、设计和管理、投资、建筑设备销售为一体的国际公司。城建国际整合了上海城建集团原有的海\n外业务，认真总结和吸取集团近年来新加坡、印度、安哥拉、香港等海外市场所取得的经验，依托集团的整体优势并充分利用原有资源，发挥其在投资、设计、施工、机械制\n造等专业领域的技术优势和核心业务优势，高水平地投身于海外工程建设。\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		海外市场 ?厚积薄发\n	</p>\n	<p>\n		经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步形成了以新加坡、印度、香\n港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东北线C703标、C704标、C708标、C810标、地铁环\n线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688\n标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港\n落马洲支线上水—州头隧道工程LBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计\n划第二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。在印度：凭借丰富的地铁设计施工经验，以设计施工总承包的形式参与当地3条\n地铁与轨道交通建设，承接了新德里地铁高架Ⅱ期工程的BC-7、BC-34、BC-26标、新德里新机场地铁快线C5标、钦奈地铁项目一期UAA-04标、德里地铁三期工程CC05标、\n德里地铁三期工程CC27等工程项目。在非洲：以EPC总承包方式完成了在当地规模最大的标志性公共建筑——安哥拉罗安达国家体育场、繁荣二号、邮电大厦等多个办公楼项\n目，以及隆格水稻种植农工业农场项目土建分包工程，总计合同金额约为3.91亿美元。2010年作为非洲足球杯主赛场——安哥拉罗安达国家体育场荣获当地政府颁发的“最佳\n承包商”奖，承包商受到了总统的亲自接见，该工程成为安哥拉历史上唯一获此殊荣的工程。在海外市场拓展中，公司具有“对外国际经济技术合作经营”、“援外工程项\n目A级”以及新加坡“A1施工”资质，并多次被业主授予“最佳工程”、“安全金奖”、“优质高效”等荣誉，企业国际品牌逐步得到市场认可。\n	</p>\n	<p>\n		<br />\n	</p>\n</div>','<div class=\"txtConList\">\n	<h2>\n		<img src=\"/public/images/icon_1.png\" />Infomation\n	</h2>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		公司简介 整合优势\n	</p>\n	<p>\n		上海城建国际工程有限公司（以下简称“城建国际”）是一家以海外工程建设、设计和管理、投资、建筑设备销售为一体的国际公司。城建国际整合了上海城建集团原有的海\n外业务，认真总结和吸取集团近年来新加坡、印度、安哥拉、香港等海外市场所取得的经验，依托集团的整体优势并充分利用原有资源，发挥其在投资、设计、施工、机械制\n造等专业领域的技术优势和核心业务优势，高水平地投身于海外工程建设。\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		海外市场 ?厚积薄发\n	</p>\n	<p>\n		经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步形成了以新加坡、印度、香\n港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东北线C703标、C704标、C708标、C810标、地铁环\n线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688\n标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港\n落马洲支线上水—州头隧道工程LBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计\n划第二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。在印度：凭借丰富的地铁设计施工经验，以设计施工总承包的形式参与当地3条\n地铁与轨道交通建设，承接了新德里地铁高架Ⅱ期工程的BC-7、BC-34、BC-26标、新德里新机场地铁快线C5标、钦奈地铁项目一期UAA-04标、德里地铁三期工程CC05标、\n德里地铁三期工程CC27等工程项目。在非洲：以EPC总承包方式完成了在当地规模最大的标志性公共建筑——安哥拉罗安达国家体育场、繁荣二号、邮电大厦等多个办公楼项\n目，以及隆格水稻种植农工业农场项目土建分包工程，总计合同金额约为3.91亿美元。2010年作为非洲足球杯主赛场——安哥拉罗安达国家体育场荣获当地政府颁发的“最佳\n承包商”奖，承包商受到了总统的亲自接见，该工程成为安哥拉历史上唯一获此殊荣的工程。在海外市场拓展中，公司具有“对外国际经济技术合作经营”、“援外工程项\n目A级”以及新加坡“A1施工”资质，并多次被业主授予“最佳工程”、“安全金奖”、“优质高效”等荣誉，企业国际品牌逐步得到市场认可。\n	</p>\n	<p>\n		<br />\n	</p>\n</div>','','/public/images/banner_zizhi.png','single','','en','');");
E_D("replace into `catalogs` values('38','0','','媒体中心','Media','','','','100','0','','','','','','','','');");
E_D("replace into `catalogs` values('39','38','','公司动态','History','','','dongtai/arcs','100','0','','','','/public/images/banner_mtzx.jpg','dongtai','dongtai','','');");
E_D("replace into `catalogs` values('40','0','','加入我们','JoinUs','','','','100','0','','','','/public/images/banner_zxns.jpg','','','','');");
E_D("replace into `catalogs` values('41','40','','招贤纳士','Jobs','','','joinus/arcs','100','0','','','','','joinus','joinus','','');");
E_D("replace into `catalogs` values('42','0','','产品与服务','Product','','','','100','0','','','','/public//images/banner_dbxm.jpg','','','','');");
E_D("replace into `catalogs` values('46','42','','服务模式','Service Mode','','','catalogs/arcs','100','0','','','arcs','','thumbarcs','','','');");
E_D("replace into `catalogs` values('45','42','','区域市场','Market','','','catalogs/arcs','100','0','','','','','quyu','','','');");
E_D("replace into `catalogs` values('47','40','','发展与机会','Progress','','1479123350','catalogs/single','100','0','<div class=\"txtConList\">\n	<h2>\n		<img src=\"/public/images/icon_2.png\" />????发展与机会\n	</h2>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		<br />\n	</p>\n	<p>\n		人才是企业发展之本、竞争之本。城建国际视人才为企业第一资源，把依靠人才作为企业发展的根本前提，把尊重人才作为企业发展的根本准则，把推进企业和员工共同发展\n作为人才战略的根本任务。公司尊重员工的个性和追求，鼓励员工提升自身能力，认同员工所取得的成绩，并善于为各类人才提供充分施展才华的舞台，做到人尽其才，才尽\n其用，让员工分享企业发展成果，实现共同发展，共享成功。\n	</p>\n	<p>\n		城建国际为您提供多种职业发展方向：\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		职能管理方向\n	</p>\n	<p>\n		如果您对管理感兴趣，但愿意继续关注自己的职能领域专业技术。您可以选择职能管理发展方向，城建国际将会为您的成长提供支持，您将可以把您的知识运用到您的专业领\n域，同时发挥您的管理才能。（市场—采购—财务—人力资源—行政—法务）\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		专业技能方向\n	</p>\n	<p>\n		如果您想成为一名出色的工程师，想继续发展您的专业技能，并且能够保持自己在专业领域的领先地位。您可以选择专业技能职业发展方向，我们将为您提供广阔的专业领域\n发展空间，助您成长为技术类专家型人才！\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		项目管理方向\n	</p>\n	<p>\n		作为一家施工总承包企业，我们需要优秀的项目经理致力于工程项目管理。我们将为您提供专业的培训及海外学习机会，在通往优秀项目经理的职业道路上与您携手并进！\n	</p>\n</div>','','','','single','','zh','');");
E_D("replace into `catalogs` values('48','38','','企业宣传片','Videos','','','catalogs/arcs','100','0','','','','','videos','','','');");
E_D("replace into `catalogs` values('49','38','','媒体来访','Visit','','','catalogs/arcs','100','0','','','arcs','','thumbarcs','','','');");

require("../../inc/footer.php");
?>