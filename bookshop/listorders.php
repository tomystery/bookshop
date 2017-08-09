<?php include "top.php" ?>
			<li class="cus">
				<a class="myOrder" href="listorders.php">
					<img src="img/images/u3.gif"/>我的订单
				</a>
			</li>
			<li class="li_last clearfix">
				<a href="exit.php"><img src="img/images/bnt_sign.gif"/></a>

			</li>
		</ul>
	</div>
	<div class="areaR">
		<div class="R_box">
			<p class="table_p">我的订单</p>
			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
			<tr align="center">
				<td align="center" bgcolor="#ebf0f7">订单号</td>
				<td align="center" bgcolor="#ebf0f7">日期</td>
				<td align="center" bgcolor="#ebf0f7">总金额</td>
				<td align="center" bgcolor="#ebf0f7">收货人</td>
				<td align="center" bgcolor="#ebf0f7">送货地址</td>
				<td align="center" bgcolor="#ebf0f7">联系电话</td>
				<td align="center" bgcolor="#ebf0f7">订单状态</td>
				<td align="center" bgcolor="#ebf0f7">操作</td>
			</tr>
			<?php
			$userid = $_SESSION['userid'];
			$str = "select  a.* from orders a , users b where a.usersid = b.id and a.usersid = '$userid'  order by id desc ;";
			$result = mysql_query($str);
			$i=0;
			while($rs = mysql_fetch_assoc($result)){
				?>
				<tr align="center">
					<td bgcolor="#ffffff" align="center"><?php echo $rs['ordercode'] ?></td>
					<td bgcolor="#ffffff" align="center"><?php echo $rs['addtime'] ?></td>
					<td bgcolor="#ffffff" align="center">￥<?php echo $rs['total'] ?>元</td>
					<td bgcolor="#ffffff" align="center"><?php echo $rs['receiver'] ?></td>
					<td bgcolor="#ffffff" align="center"><?php echo $rs['address']?></td>
					<td bgcolor="#ffffff" align="center"><?php echo $rs['contact']?></td>
					<td bgcolor="#ffffff" align="center"><?php echo $rs['status']?></td>
					<td bgcolor="#ffffff"><?php
						if($rs['status']=="未发货"){
							?> <a href="ordersfunc.php?method=cancel&id=<?php echo $rs['id']?>">取消</a>|
						<?php } ?> <?php
						if($rs['status']=="已发货"){
							?> <a href="ordersfunc.php?method=over&id=<?php echo $rs['id']?>">完成</a>|
						<?php } ?>
						<a href="listorderdetail.php?ordercode=<?php echo $rs['ordercode'] ?>">详情</a>
					</td>
				</tr>
				<?php
				$i=$i+1;
			}
			?>
			</table>
		</div>

	</div>
</div>
<div class="footer_bar"></div>
<?php include "footer.php" ?>
</body>

<script>
	//向右的箭头
	(function(){
		$(' .areaL>ul>li').click(function(){
			$(this).addClass('cus').siblings().removeClass('cus');
		});
		//跳到listorder后不需要立即发送ajax请求
		//welcome
		$('.welcome').click(function(){
			$.ajax({
				url:"uwelcome.php",
				type:"post",
				data:"",
				success:function(data){
					$('.R_box').html(data)

				}
			});
		});

		//editPwd
		$('.editPwd').click(function(){
			$.ajax({
				url:"editpwd.php",
				type:"post",
				data:"",
				success:function(data){
					$('.R_box').html(data)

				}

			})
		});
		//userInfo
		$('.userInfo').click(function(){
			$.ajax({
				url:"userinfo.php",
				type:"post",
				data:"",
				success:function(data){
					$('.R_box').html(data)

				}

			})
		});

	})()



</script>
</html>
