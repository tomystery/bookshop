<?php header("Content-Type:text/html;charset=utf-8"); ?><?php
require "func.php";
$method=$_REQUEST["method"];
$id=$_REQUEST["id"];
$name= $_REQUEST["name"];
$image= $_REQUEST["image"];
$cateid= $_REQUEST["cateid"];
$marketprice= $_REQUEST["marketprice"];
$nowprice= $_REQUEST["nowprice"];
$special= $_REQUEST["special"];
$store= $_REQUEST["store"];
$sellnum= $_REQUEST["sellnum"];
$contents= $_REQUEST["contents"];
$dates = date("Y-m-d");
if($method=="save"){
    if($name){
        $str ="insert into goods(name,image2,cateid,marketprice,nowprice,special,store,sellnum,contents) values('$name','$image','$cateid','$marketprice','$nowprice','$special','$store','$sellnum','$contents')";
        $msg = init($str);echo "<script language='javascript'>";
        echo " location='addgoods.php';";
        echo "</script>";
    }else{
        echo "<script language='javascript'>alert('图书名称不能为空！') </script>";
    }


}else if($method=="delete"){
$str ="delete from goods where id ='$id'";
$msg = init($str);echo "<script language='javascript'>";
echo " location='listgoods.php';";
echo "</script>";

}else if($method=="update"){
$str ="update goods set name='$name',image2='$image',cateid='$cateid',marketprice='$marketprice',nowprice='$nowprice',special='$special',store='$store',sellnum='$sellnum',contents='$contents' where id ='$id'";
$msg = init($str);
echo "<script language='javascript'>";
echo " location='listgoods.php';";
echo "</script>";
}?>
