<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
require "func.php";
$uname=$_REQUEST["username"];
$pwd = $_REQUEST["password"];
$repwd = $_REQUEST["repassword"];
$str = "select * from admin where username = '$uname' and password = '$pwd';";
$result = check($str);
$result = mysql_fetch_object($result);
if($result){
	$str ="update admin set password='$repwd' where username ='$uname' and password = '$pwd'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo "alert('修改成功');";
	echo " location='editpwd.php';";
	echo "</script>";
}
else{
	echo "<script language='javascript'>";
	echo "alert('修改失败');";
	echo " location='editpwd.php';";
	echo "</script>";
}
?>