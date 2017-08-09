<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$uname= $_REQUEST["uname"];
$pwd= $_REQUEST["pwd"];
$newpwd=$_REQUEST["newpwd"];
$realname= $_REQUEST["realname"];
$contact= $_REQUEST["contact"];
$dates = date("Y-m-d");

//获取存入的用户名
$sql="select uname from admin where uname='$uname'";
$result=mysql_query($sql);
$rs=mysql_num_rows($result);

if($method=="save"){
	if(!$uname){
		echo "<script language='javascript'>";
		echo " alert('用户名不能为空！')";
		echo "</script>";
	}else{
		if($rs>0){
		echo "<script language='javascript'>";
		echo " alert('用户名已存在！')";
		echo "</script>";
	}
	else{
		$str ="insert into admin(uname,pwd,realname,contact) values('$uname','$pwd','$realname','$contact')";
		$msg = init($str);echo "<script language='javascript'>";
		echo " location='addadmin.php';";
		echo "</script>";
	}
	}


}else if($method=="delete"){
	$str ="delete from admin where id ='$id'";
	$msg = init($str);echo "<script language='javascript'>";
	echo " location='listadmin.php';";
	echo "</script>";

}else if($method=="update"){
	$str = "select * from admin where uname = '$uname'and pwd='$pwd'";
	$result =mysql_query($str);
	$rs=mysql_num_rows($result);
	if($rs<1){
		echo "<script language='javascript'>";
		echo "alert('旧密码错误');";
		echo " location='editpwd.php';";
		echo "</script>";
	}else{
		$str ="update admin set pwd='$newpwd' where uname ='$uname' and pwd = '$pwd'";
		$msg = init($str);
		echo "<script language='javascript'>";
		echo "alert('修改密码成功');";
		echo " location='editpwd.php';";
		echo "</script>";
	}


}
?>
