<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$ordercode= $_REQUEST["ordercode"];
$usersid= $_REQUEST["usersid"];
$total= $_REQUEST["total"];
$addtime= $_REQUEST["addtime"];
$status= $_REQUEST["status"];
$receiver= $_REQUEST["receiver"];
$contact= $_REQUEST["contact"];
$address= $_REQUEST["address"];
$dates = date("Y-m-d");
if($method=="save"){
	$str ="insert into orders(ordercode,usersid,total,addtime,status,receiver,contact,address) values('$ordercode','$usersid','$total','$addtime','$status','$receiver','$contact','$address')";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='addorders.php';";
	echo "</script>";

}else if($method=="delete"){
	$str ="delete from orders where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listorders.php';";
	echo "</script>";

}else if($method=="update"){
	$str ="update orders set ordercode='$ordercode',usersid='$usersid',total='$total',addtime='$addtime',status='$status',receiver='$receiver',contact='$contact',address='$address' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listorders.php';";
	echo "</script>";
}else if($method =="send"){
	$str = "update orders set status = '已发货' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listorders.php';";
	echo "</script>";
}?>
