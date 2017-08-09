<?php header("Content-Type:text/html;charset=utf-8");
session_start();
unset($_SESSION["uname"]);
session_unset();
session_destroy();
header("location:index.php");
?>