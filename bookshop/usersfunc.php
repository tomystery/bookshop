<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$uname= $_REQUEST["uname"];
$pwd= $_REQUEST["pwd"];
$realname= $_REQUEST["realname"];
$sex= $_REQUEST["sex"];
$contact= $_REQUEST["contact"];
$address= $_REQUEST["address"];
$dates = date("Y-m-d");
if($method=="save"){

    $str ="insert into users(uname,pwd) values('$uname','$pwd')";
    mysql_query($str);
    echo "<script language='javascript'>";
    echo " location='login.php';";
    echo "</script>";

}else if($method=="delete"){
    $str ="delete from users where id ='$id'";
    $msg = init($str);echo "<script language='javascript'>";
    echo " location='listusers.php';";
    echo "</script>";

}else if($method=="update"){
    $str ="update users set realname='$realname',sex='$sex',contact='$contact',address='$address' where id ='$id'";
    $result=mysql_query($str);

    if($result){
        echo "<script language='javascript'>";
        echo "alert('修改成功');";
        echo " location='usercenter.php';";
        echo "</script>";
    }

}else if($method=="login") {
    $str="select * from users where uname = '$uname' and pwd = '$pwd' ";
    $result =mysql_query($str);
    $result = mysql_fetch_object($result);
    if($result){
        $userid=$result->id;
        $_SESSION["username"]=$uname;
        $_SESSION["userid"]=$result->id;
        echo "<script language='javascript'>";
        echo "alert('登录成功');";
        echo "location='index.php';";
        echo "</script>";
    }
    else{
        echo "<script language='javascript'>";
        echo "alert('登录失败');";
        echo "location='login.php';";
        echo "</script>";
    }

}else if($method=="editpwd"){
    $repwd = $_REQUEST["repwd"];
    $str="select * from users where uname = '$uname' and pwd = '$pwd' ";
    $result = mysql_query($str);
    $result = mysql_fetch_object($result);
    if($result){
        $userid=$result->id;
        $str1="update users set pwd = '$repwd' where id = '$userid'";
        mysql_query($str1);
        echo "<script language='javascript'>";
        echo "alert('修改成功');";
        echo "location='usercenter.php';";
        echo "</script>";
    }
    else{
        echo "<script language='javascript'>";
        echo "alert('旧密码错误');";
        echo "location='usercenter.php';";
        echo "</script>";
    }
}?>
