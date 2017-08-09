<?php header("Content-Type:text/html;charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<link href="images/main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	margin: 0;
}

td {
	font-size: 14px;
	color: #ffffff;
	font-family: Helvetica, sans-serif, "宋体";
}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="8" cellspacing="0"
	align=center>
	<tr style="background-image: url(images/top_back.gif);">
		<td width="22%" valign="middle" style="font-size:30px;height:60px">
					后台管理
				</td>
		<td width="78%" valign="bottom" align="right">当前时间： <span id="time"> <script>
document.getElementById('time').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());
setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
</script> </span></td>
	</tr>
	<tr style="background-image: url(images/top_bg.gif); height: 16px">
		<td width="40%" style="color: #000000;">欢迎您 <b>管理员</b>!</td>
		<td width="60%" align="right" style="color: #000000;"><a
			href="exit.php" target="_top">退出系统</a></td>
	</tr>
</table>
</body>
</html>
