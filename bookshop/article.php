<?php session_start() ?>
<?php include "func.php" ?>


<div class="art_cat_box">
<table class="article_table" width="100%" border="0" cellpadding="5" cellspacing="0">
	<tr>
		<th style="background: #e5e5e5">文章标题</th>
		<th style="background: #e5e5e5">作者</th>
		<th style="background: #e5e5e5">发布日期</th>
	</tr>
	<?php

			$str = "select  a.id as id , a.title as title , a.contents as contents , a.addtime as addtime   from article a  order by id desc";
			$result = check($str);
		while($rs = mysql_fetch_object($result)){
	?>
	<tr>
		<td><a style="text-decoration: none" href="read.php?id=<?php echo $rs->id ;?>" title="<?php echo $rs->title ;?>" class="f6"><?php echo $rs->title ;?></a></td>
		<td align="center">系统管理员</td>
		<td align="center"><?php echo $rs->addtime ;?></td>
	</tr>
	<?php } ?>

</div>








