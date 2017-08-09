<?php header("Content-Type:text/html;charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/four.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td bgcolor="#FFFFFF">
		<table width="96%" border="0" align="center" cellpadding="4"
			cellspacing="1" bgcolor="#aec3de">
			<tr align="left" bgcolor="#F2FDFF">
				<td colspan="12" class="optiontitle">订单明细信息列表</td>
			</tr>
			<tr align="center">
				<td align="center" bgcolor="#ebf0f7">序号</td>
				<td align="center" bgcolor="#ebf0f7">订单号</td>
				<td align="center" bgcolor="#ebf0f7">用户</td>
				<td align="center" bgcolor="#ebf0f7">乐器</td>
				<td align="center" bgcolor="#ebf0f7">数量</td>
				<td align="center" bgcolor="#ebf0f7">单价</td>
				<td align="center" bgcolor="#ebf0f7">小计</td>
			</tr>
			<?php
			require "func.php";
			$id=$_REQUEST["id"];
			$str = "select  a.* ,b.uname , c.name  from details a , users b , goods c where a.usersid = b.id and a.goodsid = c.id and a.ordercode = '$id' order by id desc ;";
			$result = check($str);
			$i=0;
			while($rs = mysql_fetch_object($result)){
				?>
			<tr align="center" bgcolor="#FFFFFF"
				onmouseover="this.style.background='#F2FDFF'"
				onmouseout="this.style.background='#FFFFFF'">
				<td align="center"><?php echo $i+1 ;?></td>
				<td align="center"><?php echo $rs->ordercode ;?></td>
				<td align="center"><?php echo $rs->uname ;?></td>
				<td align="center"><?php echo $rs->name ;?></td>
				<td align="center"><?php echo $rs->num ;?></td>
				<td align="center">￥<?php echo $rs->price ;?>元</td>
				<td align="center">￥<?php echo floatval($rs->price)*floatval($rs->num)  ?>元</td>
			</tr>
			<?php
			
			}
			?>
		</table>
		</td>
	</tr>
</table>
</body>
</html>
