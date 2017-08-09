<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$brandname= $_REQUEST["brandname"];
$dates = date("Y-m-d");
if($method=="save"){
	$str ="insert into brand(brandname) values('$brandname')";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='addbrand.php';";
	echo "</script>";

}else if($method=="delete"){
	$str ="delete from brand where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listbrand.php';";
	echo "</script>";

}else if($method=="update"){
	$str ="update brand set brandname='$brandname' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listbrand.php';";
	echo "</script>";
}?>
