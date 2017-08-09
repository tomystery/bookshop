<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$ordercode= $_REQUEST["ordercode"];
$usersid= $_REQUEST["usersid"];
$goodsid= $_REQUEST["goodsid"];
$num= $_REQUEST["num"];
$price= $_REQUEST["price"];
$dates = date("Y-m-d");
if($method=="save"){
	$str ="insert into details(ordercode,usersid,goodsid,num,price) values('$ordercode','$usersid','$goodsid','$num','$price')";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='adddetails.php';";
	echo "</script>";

}else if($method=="delete"){
	$str ="delete from details where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listdetails.php';";
	echo "</script>";

}else if($method=="update"){
	$str ="update details set ordercode='$ordercode',usersid='$usersid',goodsid='$goodsid',num='$num',price='$price' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listdetails.php';";
	echo "</script>";
}?>
