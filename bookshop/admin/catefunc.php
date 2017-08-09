<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$catename= $_REQUEST["catename"];
$dates = date("Y-m-d");
if($method=="save"){
	$str ="insert into cate(catename) values('$catename')";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='addcate.php';";
	echo "</script>";

}else if($method=="update"){
	$str ="update cate set catename='$catename' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listcate.php';";
	echo "</script>";
}?>
