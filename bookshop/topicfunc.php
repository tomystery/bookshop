<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$usersid= $_REQUEST["usersid"];
$goodsid= $_REQUEST["goodsid"];
$num= $_REQUEST["num"];
$contents= $_REQUEST["contents"];
$addtime= $_REQUEST["addtime"];
$dates = date("Y-m-d H:i:s");
if($method=="save"){
	$str ="insert into topic(usersid,goodsid,num,contents,addtime) values('$usersid','$goodsid','$num','$contents','$dates')";
	$msg = init($str);
	echo "<script language='javascript'>";;
	echo " location='listorders.php';";
	echo "</script>";
}?>
