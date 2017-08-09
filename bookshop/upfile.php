<?php session_start(); ?>
<?php header("Content-Type:text/html;charset=utf8"); ?>
<script type="text/javascript">
<!--
	function upload(){
		var picPath="<?php echo $_SESSION["upfile"]; ?>";
	if(picPath==""){
		alert("您还未选择文件");
		window.close();
	}
	opener.document.getElementById("files").value=picPath;
	<?php $_SESSION["upfile"]=""; ?>
	window.close();
	}
//-->
</script>

<form action="upload.php" name="form" method="post"
	enctype="multipart/form-data">
<table style="BORDER-COLLAPSE: collapse" borderColor=#397fc7
	cellSpacing=1 cellPadding=5 width="40%" align=center border=1>
	<tr>
		<td align="center">图片：</td>
		<td align="center"><input type="file" name="upfile"
			style="width: 260px" /></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="上传">
		&nbsp;&nbsp;&nbsp;&nbsp; <input type="button" value="确定"
			onclick="upload();"></td>
	</tr>
</table>
</form>