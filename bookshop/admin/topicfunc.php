<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$usersid= $_REQUEST["usersid"];
$goodsid= $_REQUEST["goodsid"];
$num= $_REQUEST["num"];
$contents= $_REQUEST["contents"];
$addtime= $_REQUEST["addtime"];
$dates = date("Y-m-d");
if($method=="save"){
	$str ="insert into topic(usersid,goodsid,num,contents,addtime) values('$usersid','$goodsid','$num','$contents','$addtime')";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='addtopic.php';";
	echo "</script>";

}else if($method=="delete"){
	$str ="delete from topic where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listtopic.php';";
	echo "</script>";

}else if($method=="update"){
	$str ="update topic set usersid='$usersid',goodsid='$goodsid',num='$num',contents='$contents',addtime='$addtime' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listtopic.php';";
	echo "</script>";
}?>
