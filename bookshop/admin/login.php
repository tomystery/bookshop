<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
require "func.php";
$uname=$_REQUEST["uname"];
$pwd = $_REQUEST["pwd"];
$str = "select * from admin where uname = '$uname' and pwd = '$pwd';";
$result = check($str);
$result = mysql_fetch_object($result);
if($result){
	$userid=$result->id;
	$_SESSION["uname"]=$uname;
	$_SESSION["uid"]=$userid;
	echo "<script language='javascript'>";
	echo "alert('登录成功');";
	echo "location='main.php';";
	echo "</script>";
}
else{
	echo "<script language='javascript'>";
	echo "alert('登录失败');";
	echo "location='index.php';";
	echo "</script>";
}
?>