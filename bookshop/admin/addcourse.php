<?php header("Content-Type:text/html;charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link href="css/four.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td bgcolor="#FFFFFF">
		<form action="coursefunc.php?method=save" method="post" name="myform"
			onsubmit="return check()">
		<table width="80%" border="0" align="center" cellpadding="4"
			cellspacing="1" bgcolor="#aec3de">
			<tr align="center" bgcolor="#F2FDFF">
				<td align="left" colspan="2" class="optiontitle">添加音乐课程</td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">课程名称</td>
				<td align="left"><input type="text" name="coursename"
					style="width: 160px" id="coursename" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">课程内容</td>
				<td align="left">
				<textarea cols="80" id="contents" name="contents" rows="10">在此添加内容</textarea>
				<script type="text/javascript">
					CKEDITOR.replace( 'contents',{language : 'zh-cn' });
				</script>
				</td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">课时</td>
				<td align="left"><input type="text" name="coursetime"
					style="width: 160px" id="coursetime" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">学费</td>
				<td align="left"><input type="text" name="money"
					style="width: 160px" id="money" /></td>
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
