<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$coursename= $_REQUEST["coursename"];
$contents= $_REQUEST["contents"];
$coursetime= $_REQUEST["coursetime"];
$money= $_REQUEST["money"];
$dates = date("Y-m-d");
if($method=="save"){
	$str ="insert into course(coursename,contents,coursetime,money) values('$coursename','$contents','$coursetime','$money')";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='addcourse.php';";
	echo "</script>";

}else if($method=="delete"){
	$str ="delete from course where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listcourse.php';";
	echo "</script>";

}else if($method=="update"){
	$str ="update course set coursename='$coursename',contents='$contents',coursetime='$coursetime',money='$money' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listcourse.php';";
	echo "</script>";
}?>
