<?php header("Content-Type:text/html;charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link href="css/four.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td bgcolor="#FFFFFF">
		<form action="brandfunc.php?method=save" method="post" name="myform"
			onsubmit="return check()">
		<table width="40%" border="0" align="center" cellpadding="4"
			cellspacing="1" bgcolor="#aec3de">
			<tr align="center" bgcolor="#F2FDFF">
				<td align="left" colspan="2" class="optiontitle">添加乐器品牌</td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">品牌名称</td>
				<td align="left"><input type="text" name="brandname"
					style="width: 160px" id="brandname" /></td>
			</tr>
			<tr align="center" bgcolor="#ebf0f7">
				<td colspan="2"><input type="submit" name="Submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;<input
					type="reset" name="Submit2" value="重置" /></td>
			</tr>
		</table>
		</form>
		</td>
	</tr>
</table>
</body>
</html>
