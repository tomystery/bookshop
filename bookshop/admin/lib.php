<?php
header("Content-Type:text/html;charset=utf-8");
//lib.php
//根据自己的需要调整下面的主机名、用户名和密码
$host = "localhost";//定义主机名称
$user = "root";//数据库用户名
$password = "";//数据库密码
$db_name = "bookshop";//数据库名称

//建立与数据库的连接
function db_connect()
{
	global $host, $user, $password, $db_name;
	$db = mysql_connect($host, $user, $password);//使用mysql_connect函数连接数据库
	if (!$db)
	{
		echo "无法与数据库建立连接！";
		exit;
	}
	$db_default = mysql_select_db($db_name, $db);
	if (!$db_default)
	{
		echo "无法选定{$db_name}数据库";
		exit;
	}
	mysql_query('set names utf8');
	return $db;
}

//与数据库断开连接
function db_close()
{
	global $db;
	mysql_close($db);
}

//执行SQL语句失败时，中断程序的执行，显示错误的代码和错误原因
function db_error()
{
	echo "数据库错误：";
	echo mysql_errno();
	//返回错误信息代码
	echo mysql_error()."<br>";
	//返回错误信息
	echo "请联系系统管理员";
	echo "<a href=mailto:931892155@qq.com>发信给系统管理员</a>";
	exit;
}
?>
