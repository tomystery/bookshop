<?php  header("Content-Type:text/html;charset=utf-8");
include "func.php";
$username=$_POST['val'];
$sql = "select * from users where uname='$username'";
$result = mysql_query($sql);
if(is_array(mysql_fetch_row($result)))
{
    echo "用户名已经存在！";
}
else
{
    echo "  ";
}
?>