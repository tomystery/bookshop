<?php header("Content-Type:text/html;charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	background-color: #ecf4ff;
}

.dtree {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #0000ff;
	white-space: nowrap;
}

.dtree img {
	border: 0px;
	vertical-align: middle;
}

.dtree a {
	color: #333;
	text-decoration: none;
}

.dtree a.node,.dtree a.nodeSel {
	white-space: nowrap;
	padding: 1px 2px 1px 2px;
}

.dtree a.node:hover,.dtree a.nodeSel:hover {
	color: #0000ff;
}

.dtree a.nodeSel {
	background-color: #AED0F4;
}

.dtree .clip {
	overflow: hidden;
}
-->
</style>
<link href="css/four.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/dtree.js"></script>
</head>
<body>
<table width="96%" border="0" cellpadding="10" cellspacing="0"
	align="center">
	<tr>
		<td valign="top">
		<div class="menu">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td><script type="text/javascript"><!--

					d = new dTree('d');
					d.config.target="main";
					d.add(0,-1,'管理菜单');
					d.add(1, 0, '管理员', '');
					d.add(11, 1, '新增管理员', 'addadmin.php');
					d.add(12, 1, '管理员列表', 'listadmin.php');
					d.add(13, 1, '修改密码', 'editpwd.php');
					d.add(2, 0, '注册用户', '');
					d.add(22, 2, '注册用户列表', 'listusers.php');
					d.add(3, 0, '新闻公告', '');
					d.add(31, 3, '新增新闻公告', 'addarticle.php');
					d.add(32, 3, '新闻公告列表', 'listarticle.php');
					d.add(7, 0, '图书分类', '');
					d.add(72, 7, '图分类列表', 'listcate.php');
					d.add(9, 0, '图书信息', '');
					d.add(91, 9, '新增图信息', 'addgoods.php');
					d.add(92, 9, '图信息列表', 'listgoods.php');
					d.add(19, 0, '订单管理', '');
					d.add(192, 19, '订单列表', 'listorders.php');
					d.add(183, 0, '图书评价', '');
					d.add(1832, 183, '图评价列表', 'listtopic.php');
					 document.write(d);
					//-->
					 </script></td>
			</tr>
		</table>
		</div>
		</td>
	</tr>
</table>
</body>
</html>
