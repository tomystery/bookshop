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
		<form action="knowledgefunc.php?method=update" method="post"
			name="myform" onsubmit="return check()">
		<table width="80%" border="0" align="center" cellpadding="4"
			cellspacing="1" bgcolor="#aec3de">
			<tr align="center" bgcolor="#F2FDFF">
				<td align="left" colspan="2" class="optiontitle">编辑乐器知识</td>
			</tr>
			<?php
			require 'func.php';
			$id=$_REQUEST["id"];
			$str="select * from knowledge where id = '$id'";
			$result = check($str);
			while($rs=mysql_fetch_object($result)){
				?>
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">标题</td>
				<td align="left"><input type="text" name="title"
					style="width: 160px" value="<?php echo $rs->title ?>" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">类别</td>
				<td align="left">
					<select name="cate" style="width: 160px" id="cate" >
						<option value="乐器知识">乐器知识</option>
						<option value="知识分享">知识分享</option>
					</select>
				</td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">内容</td>
				<td align="left">
				<textarea cols="80" id="contents" name="contents" rows="10"><?php echo $rs->contents ?></textarea>
				<script type="text/javascript">
					CKEDITOR.replace( 'contents',{language : 'zh-cn' });
				</script>
				</td>
			</tr>
			<?php } ?>
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
