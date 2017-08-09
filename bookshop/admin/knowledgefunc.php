<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$title= $_REQUEST["title"];
$cate= $_REQUEST["cate"];
$contents= $_REQUEST["contents"];
$dates = date("Y-m-d");
if($method=="save"){
$str ="insert into knowledge(title,cate,contents) values('$title','$cate','$contents')";
$msg = init($str);echo "<script language='javascript'>";
echo " location='addknowledge.php';";
echo "</script>";

}else if($method=="delete"){
$str ="delete from knowledge where id ='$id'";
$msg = init($str);echo "<script language='javascript'>";
echo " location='listknowledge.php';";
echo "</script>";

}else if($method=="update"){
$str ="update knowledge set title='$title',cate='$cate',contents='$contents' where id ='$id'";
$msg = init($str);
echo "<script language='javascript'>";
echo " location='listknowledge.php';";
echo "</script>";
}?>
