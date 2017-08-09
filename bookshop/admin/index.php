<?php header("Content-Type:text/html;charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台管理</title>
<STYLE type=text/css>
body {
	FONt-SIZE: 12px;
	BACKGROUND: #E8F2FB;
	COLOR: #333;
	MARGIN: 80px;
}

.bt {
	font-size: 24px;
	color: #FFFFFF;
	text-align: center;
	font-weight: bold
}

.btn {
	BORDER-RIGHT: #0033cc 1px solid;
	BORDER-TOP: #00ccff 1px solid;
	FONT-SIZE: 12px;
	BORDER-LEFT: #00ccff 1px solid;
	CURSOR: hand;
	COLOR: #ffffff;
	BORDER-BOTTOM: #0033cc 1px solid;
	FONT-FAMILY: "宋体";
	BACKGROUND-COLOR: #0099ff
}
</STYLE>
<script type="text/javascript">
	function checkLogin(){
		if(document.myform.uname.value==''){
			alert("请输入用户名");
			document.myform.uname.focus();
			return false;
		}
		if(document.myform.pwd.value==''){
			alert("请输入密码");
			document.myform.pwd.focus();
			return false;
		}
	}
	function rst(){
		document.myform.reset();
	}
</script>
</head>
<body>
<form method="post" action="login.php" name="myform" onSubmit="return checkLogin()">
<table cellSpacing=1 cellPadding=5 width=460 align=center
	bgColor=#b9b0a9 border=0>
	<tbody>
		<tr>
			<td vAlign=top bgColor=#ffffff>
			<table cellSpacing=0 cellPadding=0 width="100%" border=0>
				<tbody>
					<tr>
						<td width=460 background=images/login_top.jpg height=54 class="bt">
						后台管理</td>
					</tr>
					<tr>
						<td bgColor=#FFFFFF height=150>
						<table height="100%" cellSpacing=0 cellPadding=0 width="100%"
							border=0>
							<tbody>
								<tr>
									<td align=middle width="40%"><IMG height=90
										src="images/login.gif" width=91></td>
									<td>
									<table cellSpacing=1 cellPadding=2 width="100%" align=center
										border=0>
										<tbody>
											<tr>
												<td align=right width=60 height=30>用户名：</td>
												<td height=30><input id="uname" name="uname"></td>
											</tr>
											<tr>
												<td align=right height=30>密&nbsp;&nbsp;码：</td>
												<td height=30><input id="pwd" type=password
													name="pwd"></td>
											</tr>
											<tr align="center">
												<td colSpan=2 height=40><input class="btn" type=submit
													value="提 交" name="Submit"> <input class="btn" type="reset"
													value="取 消" name="reset"></td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>
