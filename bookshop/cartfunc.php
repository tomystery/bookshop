<?php  header("Content-Type:text/html;charset=utf-8");
session_start();
include "func.php";
$method=$_REQUEST["method"];
$price=$_POST['price'];
$image=$_POST['url'];
$id=$_REQUEST['id'];
$num=$_POST['val'];
$dates=date("Y-m-d");
if($method=="save") {
    if (empty($_SESSION["userid"])) {
        echo 'login.php&请先登陆';
    } else {
        $userid = $_SESSION["userid"];
        $str = "insert into cart(usersid,goodsid,num,price,addtime,image) values('$userid','$id','$num','$price','$dates','$image')";
        check($str);
        echo " shoppingcar.php";

    }
}else if($method=="delete"){
    $str ="delete from cart where id ='$id'";
    $msg = init($str);
    echo "<script language='javascript'>";
    echo " location='shoppingcar.php';";
    echo "</script>";

} else if($method=="myorder"){
    if (empty($_SESSION["userid"])) {
        echo 'login.php&请先登陆';
    }else{
        echo "listorders.php";
    }
}
else if($method=="usercenter"){
    if (empty($_SESSION["userid"])) {
        echo 'login.php&请先登陆';
    }else{
        echo "usercenter.php";
    }
}else if($method=="yjgm") {
    if (empty($_SESSION["userid"])) {
        echo 'login.php&请先登陆';
    } else {
        $userid = $_SESSION["userid"];
        $str = "insert into cart(usersid,goodsid,num,price,addtime,image) values('$userid','$id','$num','$price','$dates','$image')";
        check($str);
        $str1="select * from cart  ORDER BY id DESC LIMIT 1";
       $result=mysql_query($str1);
        $rs=mysql_fetch_assoc($result);

        $_SESSION['cartId']=$rs['id'];
//        echo "checkout_yjgm.php?id="+$rs['id']+"";
        echo 'checkout_yjgm.php';

    }
}

?>