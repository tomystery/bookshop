<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$usersid= $_REQUEST["usersid"];
$courseid= $_REQUEST["courseid"];
$addtime= $_REQUEST["addtime"];
$dates = date("Y-m-d");
if($method=="save"){
	$str ="insert into asign(usersid,courseid,addtime) values('$usersid','$courseid','$addtime')";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='addasign.php';";
	echo "</script>";

}else if($method=="delete"){
	$str ="delete from asign where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listasign.php';";
	echo "</script>";

}else if($method=="update"){
	$str ="update asign set usersid='$usersid',courseid='$courseid',addtime='$addtime' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listasign.php';";
	echo "</script>";
}?>
