<?php
session_start();
?>
<style>
	.form{
		width:100%;
	}
	.form>p{
		background-color: #f6f6f6;
		font-weight:700;
		color:#8728f2;
		width:100%;
		margin-bottom:16px;
	}
	.td1{
		width:38%;
		text-align: right;
	}
	.subBtn{
		margin:0 auto;
		display:block;
	}
	td{
		height:37px;
	}
	.inputBg{
		height:23px;
		margin-left:9px;
	}

</style>
<div class="form">
	<p>个人资料修改</p>
	<form name="formEdit" action="usersfunc.php?method=update" method="post">

		<table  width="100%" border="1" bordercolor="#ccc" rules="all" cellpadding="5" align="center">
			<?php
			include "func.php";
			$id = $_SESSION["userid"];
			$str="select * from users where id = '$id' ";
			$result = mysql_query($str);
			$result = mysql_fetch_assoc($result);
			?>
			<tr>
				<td class="td1">用户名：</td>
				<td class="td2">
					<?php echo $_SESSION["username"] ?>
					<input name="uname" type="hidden"  value="<?php echo $_SESSION["username"] ?>" class="inputBg" />
					<input name="id" type="hidden" value="<?php echo $id; ?>" />
				</td>
			</tr>
			<tr>
				<td class="td1">姓名：</td>
				<td class="td2">
					<input name="realname" type="text"  class="inputBg" value="<?php echo $result['realname'] ?>" />
					<?php $_SESSION['realname']=$result['realname'] ?>
				</td>
			</tr>
			<tr>
				<td class="td1">性别：</td>
				<td class="td2"><input name="sex" type="radio" size="25" value="女" checked />女 &nbsp;&nbsp;&nbsp;&nbsp;
					<input name="sex" type="radio" size="25" value="男" />男</td>
			</tr>
			<tr>
				<td class="td1">地址：</td>
				<td class="td2">
					<input name="address" type="text"  class="inputBg" value="<?php echo $result['address']; ?>" />
				</td>
			</tr>
			<tr>
				<td class="td1">联系方式：</td>
				<td class="td2">
					<input name="contact" type="text" size="25" class="inputBg" value="<?php echo $result['contact']; ?>" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" value="确认修改" class="subBtn"/>
				</td>

			</tr>
		</table>
	</form>
</div>