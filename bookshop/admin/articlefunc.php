<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
date_default_timezone_set('prc');
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$title= $_REQUEST["title"];
$contents= $_REQUEST["contents"];
$addtime= $_REQUEST["addtime"];
$dates = date("Y-m-d H:i:s");
if($method=="save"){
	if($title && $contents){
		$str ="insert into article(title,contents,addtime) values('$title','$contents','$dates')";
		$msg = init($str);echo "<script language='javascript'>";
		echo " location='addarticle.php';";
		echo "</script>";
	}else{
		echo "<script language='javascript'> alert('标题或内容不能为空！') </script>";
	}


}else if($method=="delete"){
	$str ="delete from article where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listarticle.php';";
	echo "</script>";

}else if($method=="update"){
	$str ="update article set title='$title',contents='$contents',addtime='$addtime' where id ='$id'";
	$msg = init($str);
	echo "<script language='javascript'>";
	echo " location='listarticle.php';";
	echo "</script>";
}?>
