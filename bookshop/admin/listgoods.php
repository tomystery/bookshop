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
				<td colspan="12" class="optiontitle">图书信息列表</td>
			</tr>
			<tr align="center">
				<td align="center" bgcolor="#ebf0f7">序号</td>
				<td align="center" bgcolor="#ebf0f7">图书名称</td>
				<td align="center" bgcolor="#ebf0f7">图片</td>
				<td align="center" bgcolor="#ebf0f7">类别</td>
				<td align="center" bgcolor="#ebf0f7">市场价</td>
				<td align="center" bgcolor="#ebf0f7">本站价</td>
				<td align="center" bgcolor="#ebf0f7">是否特价</td>
				<td align="center" bgcolor="#ebf0f7">库存数</td>
				<td align="center" bgcolor="#ebf0f7">销量</td>
				<td align="center" bgcolor="#ebf0f7">操作</td>
			</tr>
			<?php
			require "func.php";
			$pageSize=10;//每页显示的记录数
			if(isset($_GET['page'])){ $page=intval($_GET['page']); }else{ $page=1; }
			$offset=$pageSize*($page-1);//卷滚的记录条数
			$strAll = "select count(*) as num from goods;";
			$results = mysql_fetch_object(check($strAll));
			$rowNum=$results->num;//数据总条数
			$pages=ceil($rowNum/$pageSize);
			$first=1;
			$last=$pages;
			if($page==1){ $prev=1; }else{ $prev=$page-1; }
			if($page==$pages){ $next=$pages; }else{ $next=$page+1; }
			$str = "select  a.* , b.catename from goods a ,cate b where a.cateid = b.id order by id desc limit $offset,$pageSize ;";
			$result = check($str);
			$i=0;
			while($rs = mysql_fetch_object($result)){
				?>
			<tr align="center" bgcolor="#FFFFFF"
				onmouseover="this.style.background='#F2FDFF'"
				onmouseout="this.style.background='#FFFFFF'">
				<td align="center"><?php echo $i+1 ;?></td>
				<td align="center"><?php echo $rs->name ;?></td>
				<td align="center"><img src="../<?php echo $rs->image2 ;?>" width="50" height="50"/></td>
				<td align="center"><?php echo $rs->catename ;?></td>
				<td align="center"><?php echo $rs->marketprice ;?></td>
				<td align="center"><?php echo $rs->nowprice ;?></td>
				<td align="center"><?php echo $rs->special ;?></td>
				<td align="center"><?php echo $rs->store ;?></td>
				<td align="center"><?php echo $rs->sellnum ;?></td>
				<td align="center"><a href="editgoods.php?id=<?php echo $rs->id; ?>">【编辑】</a>|<a
					href="goodsfunc.php?id=<?php echo $rs->id; ?>&&method=delete"
					onclick="{if(confirm('确定要删除吗?')){return true;}return false;}">【删除】</a></td>
			</tr>
			<?php
			$i=$i+1;
			}
			?>


			<tr align="right" bgcolor="#F2FDFF">
				<td colspan="12">
				<form action="listgoods.php" method="get">共<?php echo $pages ?> 页 (<?php echo  $rowNum ?>
				条记录)&nbsp;&nbsp;&nbsp;<select name="page">
				<?php for($i=1;$i<$pages+1;$i++){ ?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
					<?php } ?>
				</select><input type="submit" value="GO" /><a
					href="listgoods.php?page=<?php echo $first ?>">第一页</a>&nbsp;&nbsp;&nbsp;<a
					href="listgoods.php?page=<?php echo $prev ?>">上一页</a>
				&nbsp;&nbsp;&nbsp;<a href="listgoods.php?page=<?php echo $next ?>">下一页</a>
				&nbsp;&nbsp;&nbsp;<a href="listgoods.php?page=<?php echo $last ?>">最后一页</a>&nbsp;&nbsp;&nbsp;</form>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</body>
</html>
