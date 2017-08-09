<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
require "func.php";
require 'code.php';
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
	if($_SESSION["userid"] == null){
		echo "<script language='javascript'>";
		echo "alert('请登录')";
		echo "location='login.php';";
		echo "</script>";
	}else{
		$userid = $_SESSION["userid"];
		$ordercode= generate_string();
		$totala = 0;
		$str="select a.*  from cart a where a.usersid = '$userid' ";
		$result = check($str);
		while($rs=mysql_fetch_object($result)){
			$num = $rs->num;
			$price = $rs->price;
			$goodsid = $rs->goodsid;
			$cartid = $rs->id;
			$str2 ="insert into details(ordercode,usersid,goodsid,num,price) values('$ordercode','$userid','$goodsid','$num','$price')";
			init($str2);
			$str3 = "select * from goods where id = '$goodsid'";
			$result1 = check($str3);
			$result1 = mysql_fetch_object($result1);
			$snum = floatval($result1->sellnum)+floatval($num);
			$tnum = floatval($result1->store)-floatval($num);
			$str4 ="update goods set store='$tnum',sellnum='$snum' where id ='$goodsid'";
			init($str4);
			$str1="delete from cart where id = '$cartid'";
			init($str1);
			$totala = $totala + floatval($rs->price)*floatval($rs->num);
		}
		$str = "insert into orders(ordercode,usersid,total,addtime,status,receiver,contact,address) ";
		$str .= "values('$ordercode','$userid','$totala','$dates','未发货','$receiver','$contact','$address')";
		$msg = init($str);
		echo "<script language='javascript'>";
		echo " location='usercenter.php';";
		echo "</script>";
	}
}else if($method == "cancel"){
	$str ="update orders set status = '取消' where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listorders.php';";
	echo "</script>";
}else if($method=="over"){
	$str ="update orders set status = '完成' where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listorders.php';";
	echo "</script>";
}else if($method=="yjgm"){
	if($_SESSION["userid"] == null){
		echo "<script language='javascript'>";
		echo "alert('请登录')";
		echo "location='login.php';";
		echo "</script>";
	}else {
		$userid = $_SESSION["userid"];
		$cartid=$_SESSION["cartId"];
		$ordercode = generate_string();
		$totala = 0;
		$str = "select a.*  from cart a where a.id = '$cartid' ";
		$result = check($str);
		$rs = mysql_fetch_object($result);
			$num = $rs->num;
			$price = $rs->price;
			$goodsid = $rs->goodsid;
			$cartid = $rs->id;
			$str2 = "insert into details(ordercode,usersid,goodsid,num,price) values('$ordercode','$userid','$goodsid','$num','$price')";
			init($str2);
			$str3 = "select * from goods where id = '$goodsid'";
			$result1 = check($str3);
			$result1 = mysql_fetch_object($result1);
			$snum = floatval($result1->sellnum) + floatval($num);
			$tnum = floatval($result1->store) - floatval($num);
			$str4 = "update goods set store='$tnum',sellnum='$snum' where id ='$goodsid'";
			init($str4);
			$str1 = "delete from cart where id = '$cartid'";
			init($str1);
			$totala = $totala + floatval($rs->price) * floatval($rs->num);

		$str = "insert into orders(ordercode,usersid,total,addtime,status,receiver,contact,address) ";
		$str .= "values('$ordercode','$userid','$totala','$dates','未发货','$receiver','$contact','$address')";
		$msg = init($str);
		echo "<script language='javascript'>";
		echo " location='usercenter.php';";
		echo "</script>";
	}
}
?>
