<?php header("Content-Type:text/html;charset=utf-8"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><style type="text/css">
<!--
body { margin-left: 0px; margin-top: 0px; background-color: #ecf4ff; }
.dtree { font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 12px; color: #0000ff; white-space: nowrap;}
.dtree img { border: 0px; vertical-align: middle; }
.dtree a { color: #333; text-decoration: none; }
.dtree a.node, .dtree a.nodeSel { white-space: nowrap; padding: 1px 2px 1px 2px; }
.dtree a.node:hover, .dtree a.nodeSel:hover { color: #0000ff; }
.dtree a.nodeSel { background-color: #AED0F4; }
.dtree .clip { overflow: hidden; }
-->
</style>
<link href="css/four.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="js/dtree.js"></script></head><body><table width="96%" border="0" cellpadding="10" cellspacing="0" align="center"><tr><td valign="top"><div class="menu"><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td><script type="text/javascript"><!--

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(1, 0, '管理员', '');
d.add(11, 1, '新增管理员', 'addadmin.php');
d.add(12, 1, '管理员列表', 'listadmin.php');
d.add(13, 1, '管理员查询', 'queryadmin.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(2, 0, '注册用户', '');
d.add(21, 2, '新增注册用户', 'addusers.php');
d.add(22, 2, '注册用户列表', 'listusers.php');
d.add(23, 2, '注册用户查询', 'queryusers.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(3, 0, '新闻公告', '');
d.add(31, 3, '新增新闻公告', 'addarticle.php');
d.add(32, 3, '新闻公告列表', 'listarticle.php');
d.add(33, 3, '新闻公告查询', 'queryarticle.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(4, 0, '乐器知识', '');
d.add(41, 4, '新增乐器知识', 'addknowledge.php');
d.add(42, 4, '乐器知识列表', 'listknowledge.php');
d.add(43, 4, '乐器知识查询', 'queryknowledge.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(5, 0, '音乐课程', '');
d.add(51, 5, '新增音乐课程', 'addcourse.php');
d.add(52, 5, '音乐课程列表', 'listcourse.php');
d.add(53, 5, '音乐课程查询', 'querycourse.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(6, 0, '课程预约', '');
d.add(61, 6, '新增课程预约', 'addasign.php');
d.add(62, 6, '课程预约列表', 'listasign.php');
d.add(63, 6, '课程预约查询', 'queryasign.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(7, 0, '乐器分类', '');
d.add(71, 7, '新增乐器分类', 'addcate.php');
d.add(72, 7, '乐器分类列表', 'listcate.php');
d.add(73, 7, '乐器分类查询', 'querycate.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(8, 0, '乐器品牌', '');
d.add(81, 8, '新增乐器品牌', 'addbrand.php');
d.add(82, 8, '乐器品牌列表', 'listbrand.php');
d.add(83, 8, '乐器品牌查询', 'querybrand.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(9, 0, '乐器', '');
d.add(91, 9, '新增乐器', 'addgoods.php');
d.add(92, 9, '乐器列表', 'listgoods.php');
d.add(93, 9, '乐器查询', 'querygoods.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(10, 0, '购物车', '');
d.add(101, 10, '新增购物车', 'addcart.php');
d.add(102, 10, '购物车列表', 'listcart.php');
d.add(103, 10, '购物车查询', 'querycart.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(11, 0, '订单', '');
d.add(111, 11, '新增订单', 'addorders.php');
d.add(112, 11, '订单列表', 'listorders.php');
d.add(113, 11, '订单查询', 'queryorders.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(12, 0, '订单明细', '');
d.add(121, 12, '新增订单明细', 'adddetails.php');
d.add(122, 12, '订单明细列表', 'listdetails.php');
d.add(123, 12, '订单明细查询', 'querydetails.php');
 document.write(d);

d = new dTree('d');
d.config.target="main";
d.add(0,-1,'管理菜单');
d.add(13, 0, '乐器评价', '');
d.add(131, 13, '新增乐器评价', 'addtopic.php');
d.add(132, 13, '乐器评价列表', 'listtopic.php');
d.add(133, 13, '乐器评价查询', 'querytopic.php');
 document.write(d);
//-->
 </script>
</td></tr></table></div></td></tr></table></body></html>