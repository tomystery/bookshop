<?php
session_start();
$destination_folder="img/goods/"; //上传文件路径
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$file = $_FILES["upfile"];
	if(!file_exists($destination_folder))
	mkdir($destination_folder);
	$filename=$file["tmp_name"];
	$image_size = getimagesize($filename);
	$pinfo=pathinfo($file["name"]);
	$ftype=$pinfo[extension];
	$destination = $destination_folder.time().".".$ftype;
	if (file_exists($destination) && $overwrite != true)
	{
		echo "<script language=JavaScript>alert(同名文件已经存在);</script>"; 
		exit;
	}
	if(!move_uploaded_file ($filename, $destination))
	{
		echo "<script language=JavaScript>alert(移动文件出错);</script>"; 
		exit;
	}
	$pinfo=pathinfo($destination);
	$fname=$pinfo[basename];
	$_SESSION["upfile"]=$destination;
	//echo $_SESSION["upfile"];
}
header("Location:upfile.php");
?>