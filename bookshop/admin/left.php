<?php header("Content-Type:text/html;charset=utf-8"); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title></title><link rel="stylesheet" type="text/css" href="css/csstree.css"></head><meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>
<link href="css/csstree.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all">
<body><table><tr><td><script language='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>系统功能列表</b></DIV>','');
Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>管理员管理</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=addadmin.php target=main alt=新增管理员>新增管理员</a>', '', 'images/editinfo.gif'));
insDoc(Class1, gLnk(1, '<a href=listadmin.php target=main alt=管理员列表>管理员列表</a>', '', 'images/editinfo.gif'));
insDoc(Class1, gLnk(1, '<a href=queryadmin.php target=main alt=管理员查询>管理员查询</a>', '', 'images/editinfo.gif'));
Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>注册用户管理</DIV>', ''));
insDoc(Class2, gLnk(2, '<a href=addusers.php target=main alt=新增注册用户>新增注册用户</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(2, '<a href=listusers.php target=main alt=注册用户列表>注册用户列表</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(2, '<a href=queryusers.php target=main alt=注册用户查询>注册用户查询</a>', '', 'images/editinfo.gif'));
Class3 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>新闻公告管理</DIV>', ''));
insDoc(Class3, gLnk(3, '<a href=addarticle.php target=main alt=新增新闻公告>新增新闻公告</a>', '', 'images/editinfo.gif'));
insDoc(Class3, gLnk(3, '<a href=listarticle.php target=main alt=新闻公告列表>新闻公告列表</a>', '', 'images/editinfo.gif'));
insDoc(Class3, gLnk(3, '<a href=queryarticle.php target=main alt=新闻公告查询>新闻公告查询</a>', '', 'images/editinfo.gif'));
Class4 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>乐器知识管理</DIV>', ''));
insDoc(Class4, gLnk(4, '<a href=addknowledge.php target=main alt=新增乐器知识>新增乐器知识</a>', '', 'images/editinfo.gif'));
insDoc(Class4, gLnk(4, '<a href=listknowledge.php target=main alt=乐器知识列表>乐器知识列表</a>', '', 'images/editinfo.gif'));
insDoc(Class4, gLnk(4, '<a href=queryknowledge.php target=main alt=乐器知识查询>乐器知识查询</a>', '', 'images/editinfo.gif'));
Class5 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>音乐课程管理</DIV>', ''));
insDoc(Class5, gLnk(5, '<a href=addcourse.php target=main alt=新增音乐课程>新增音乐课程</a>', '', 'images/editinfo.gif'));
insDoc(Class5, gLnk(5, '<a href=listcourse.php target=main alt=音乐课程列表>音乐课程列表</a>', '', 'images/editinfo.gif'));
insDoc(Class5, gLnk(5, '<a href=querycourse.php target=main alt=音乐课程查询>音乐课程查询</a>', '', 'images/editinfo.gif'));
Class6 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>课程预约管理</DIV>', ''));
insDoc(Class6, gLnk(6, '<a href=addasign.php target=main alt=新增课程预约>新增课程预约</a>', '', 'images/editinfo.gif'));
insDoc(Class6, gLnk(6, '<a href=listasign.php target=main alt=课程预约列表>课程预约列表</a>', '', 'images/editinfo.gif'));
insDoc(Class6, gLnk(6, '<a href=queryasign.php target=main alt=课程预约查询>课程预约查询</a>', '', 'images/editinfo.gif'));
Class7 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>乐器分类管理</DIV>', ''));
insDoc(Class7, gLnk(7, '<a href=addcate.php target=main alt=新增乐器分类>新增乐器分类</a>', '', 'images/editinfo.gif'));
insDoc(Class7, gLnk(7, '<a href=listcate.php target=main alt=乐器分类列表>乐器分类列表</a>', '', 'images/editinfo.gif'));
insDoc(Class7, gLnk(7, '<a href=querycate.php target=main alt=乐器分类查询>乐器分类查询</a>', '', 'images/editinfo.gif'));
Class8 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>乐器品牌管理</DIV>', ''));
insDoc(Class8, gLnk(8, '<a href=addbrand.php target=main alt=新增乐器品牌>新增乐器品牌</a>', '', 'images/editinfo.gif'));
insDoc(Class8, gLnk(8, '<a href=listbrand.php target=main alt=乐器品牌列表>乐器品牌列表</a>', '', 'images/editinfo.gif'));
insDoc(Class8, gLnk(8, '<a href=querybrand.php target=main alt=乐器品牌查询>乐器品牌查询</a>', '', 'images/editinfo.gif'));
Class9 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>乐器管理</DIV>', ''));
insDoc(Class9, gLnk(9, '<a href=addgoods.php target=main alt=新增乐器>新增乐器</a>', '', 'images/editinfo.gif'));
insDoc(Class9, gLnk(9, '<a href=listgoods.php target=main alt=乐器列表>乐器列表</a>', '', 'images/editinfo.gif'));
insDoc(Class9, gLnk(9, '<a href=querygoods.php target=main alt=乐器查询>乐器查询</a>', '', 'images/editinfo.gif'));
Class10 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>购物车管理</DIV>', ''));
insDoc(Class10, gLnk(10, '<a href=addcart.php target=main alt=新增购物车>新增购物车</a>', '', 'images/editinfo.gif'));
insDoc(Class10, gLnk(10, '<a href=listcart.php target=main alt=购物车列表>购物车列表</a>', '', 'images/editinfo.gif'));
insDoc(Class10, gLnk(10, '<a href=querycart.php target=main alt=购物车查询>购物车查询</a>', '', 'images/editinfo.gif'));
Class11 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>订单管理</DIV>', ''));
insDoc(Class11, gLnk(11, '<a href=addorders.php target=main alt=新增订单>新增订单</a>', '', 'images/editinfo.gif'));
insDoc(Class11, gLnk(11, '<a href=listorders.php target=main alt=订单列表>订单列表</a>', '', 'images/editinfo.gif'));
insDoc(Class11, gLnk(11, '<a href=queryorders.php target=main alt=订单查询>订单查询</a>', '', 'images/editinfo.gif'));
Class12 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>订单明细管理</DIV>', ''));
insDoc(Class12, gLnk(12, '<a href=adddetails.php target=main alt=新增订单明细>新增订单明细</a>', '', 'images/editinfo.gif'));
insDoc(Class12, gLnk(12, '<a href=listdetails.php target=main alt=订单明细列表>订单明细列表</a>', '', 'images/editinfo.gif'));
insDoc(Class12, gLnk(12, '<a href=querydetails.php target=main alt=订单明细查询>订单明细查询</a>', '', 'images/editinfo.gif'));
Class13 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>乐器评价管理</DIV>', ''));
insDoc(Class13, gLnk(13, '<a href=addtopic.php target=main alt=新增乐器评价>新增乐器评价</a>', '', 'images/editinfo.gif'));
insDoc(Class13, gLnk(13, '<a href=listtopic.php target=main alt=乐器评价列表>乐器评价列表</a>', '', 'images/editinfo.gif'));
insDoc(Class13, gLnk(13, '<a href=querytopic.php target=main alt=乐器评价查询>乐器评价查询</a>', '', 'images/editinfo.gif'));
insDoc(foldersTree, gLnk(1,'退出系统','exit.php','images/exit.gif'));
initializeDocument(0);
</script>
</td></tr>