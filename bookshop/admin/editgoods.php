<?php header("Content-Type:text/html;charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<script type="text/javascript" src="js/goods.js" charset="utf-8"></script>
<script type="text/javascript" src="js/date.js" charset="utf-8"></script>
<link href="css/four.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	function selfile(){
		window.open("../upfile.php","","toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=yes,copyhistory=no,scrollbars=yes,width=400,height=240,top="+(screen.availHeight-240)/2+",left="+(screen.availWidth-400)/2+"");
	}
</script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td bgcolor="#FFFFFF">
		<form action="goodsfunc.php?method=update" method="post" name="myform"
			onsubmit="return check()">
		<table width="80%" border="0" align="center" cellpadding="4"
			cellspacing="1" bgcolor="#aec3de">
			<tr align="center" bgcolor="#F2FDFF">
				<td align="left" colspan="2" class="optiontitle">编辑图书信息</td>
			</tr>
			<?php
			require 'func.php';
			$id=$_REQUEST["id"];
			$str="select * from goods where id = '$id'";
			$result = check($str);
			while($rs=mysql_fetch_object($result)){
				?>
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">图书名称</td>
				<td align="left"><input type="text" name="name" style="width: 160px"
					value="<?php echo $rs->name ?>" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">图片</td>
				<td align="left"><input type="text" name="image" id="files"  readonly="readonly" onclick="selfile();"
					style="width: 160px" value="<?php echo $rs->image2 ?>" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">类别</td>
				<td align="left">
					<select name="cateid" style="width: 160px" id="cateid" >
						<?php
							$str1="select * from cate ";
							$result1 = check($str1);
							while($rs1=mysql_fetch_object($result1)){
						?>
							<option value="<?php echo $rs1->id ;?>"><?php echo $rs1->catename ;?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">市场价</td>
				<td align="left"><input type="text" name="marketprice"
					style="width: 160px" value="<?php echo $rs->marketprice ?>" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">本站价</td>
				<td align="left"><input type="text" name="nowprice"
					style="width: 160px" value="<?php echo $rs->nowprice ?>" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">是否特价</td>
				<td align="left">
					<input type="radio" name="special" id="special" value="否" checked/>否
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="special" id="special" value="是" />是
				</td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">库存数</td>
				<td align="left"><input type="text" name="store"
					style="width: 160px" value="<?php echo $rs->store ?>" /></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">销量</td>
				<td align="left"><input type="text" name="sellnum"
					style="width: 160px" value="<?php echo $rs->sellnum ?>" readonly="readonly"/></td>
			</tr>
			<tr align="center" bgcolor="#F2FDFF">
				<td width="20%" align="right">图书介绍</td>
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
