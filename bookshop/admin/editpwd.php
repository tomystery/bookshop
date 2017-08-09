<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php session_start() ?>
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
		<form action="adminfunc.php?method=update" method="post" name="myform" onsubmit="return check()">
		<table width="40%" border="0" align="center" cellpadding="4"
			cellspacing="1" bgcolor="#aec3de">
			<tr align="center" bgcolor="#F2FDFF">
				<td align="left" colspan="2" class="optiontitle">修改密码</td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">用户名</td>
				<td align="left"><?php echo $_SESSION["uname"] ?> <input type="hidden" name="uname" style="width: 160px" id="uname" value="<?php echo $_SESSION["uname"] ?>" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">旧密码</td>
				<td align="left"><input type="password" name="pwd" style="width: 160px" id="pwd" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">新密码</td>
				<td align="left"><input type="password" name="newpwd" style="width: 160px" id="newpwd" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">确认密码</td>
				<td align="left"><input type="password" name="repwd" style="width: 160px" id="repwd" /></td>
			</tr>
			<tr align="center" bgcolor="#ebf0f7">
				<td colspan="2"><input type="submit" name="Submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Submit2" value="重置" /></td>
			</tr>
		</table>
		</form>
		</td>
	</tr>
</table>
</body>
<script src="../js/jquery-1.7.2.js"></script>
<script type="application/javascript">
	var newPwd=document.getElementById('newpwd');
	var rePwd=document.getElementById('repwd');
	rePwd.onblur=function(){
		if(rePwd.value!=newPwd.value){
			alert("两次密码不一致")
		}
	}

</script>
</html>
