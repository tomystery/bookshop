<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$uname= $_REQUEST["uname"];
$pwd= $_REQUEST["pwd"];
$realname= $_REQUEST["realname"];
$sex= $_REQUEST["sex"];
$birthday= $_REQUEST["birthday"];
$contact= $_REQUEST["contact"];
$address= $_REQUEST["address"];
$email= $_REQUEST["email"];
$dates = date("Y-m-d");
if($method=="save"){
	$str ="insert into users(uname,pwd,realname,sex,birthday,contact,address,email) values('$uname','$pwd','$realname','$sex','$birthday','$contact','$address','$email')";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='addusers.php';";
	echo "</script>";

}else if($method=="delete"){
	$str ="delete from users where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listusers.php';";
	echo "</script>";

}else if($method=="update"){
	$str ="update users set uname='$uname',pwd='$pwd',realname='$realname',sex='$sex',birthday='$birthday',contact='$contact',address='$address',email='$email' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listusers.php';";
	echo "</script>";
}?>
