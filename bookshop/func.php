<?php error_reporting(0);?>
<?php
require "lib.php";
$db = db_connect();
function init($str){
	global $db;
	$str = trim($str);
	$sql = $str;
	$result = mysql_query($sql,$db) or db_error();
	$msg = "success";
	return $msg;
}

function check($str){
	global $db;
	$str = trim($str);
	$sql = $str;
	$result = mysql_query($sql,$db) or db_error();
	return $result;
}
?>