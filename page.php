<?php
session_start();
$uri=$_SERVER['REQUEST_URI'];
$uri=preg_replace("/^\/*/","",$uri);
if(is_numeric($uri)){
include("sql/mysql_connect.php");
$select="select*from tokens where id=".$uri;
$result=mysqli_query($con,$select) or die ("error query");
mysqli_close($con);
if(mysqli_num_rows($result)==1){
	$row=mysqli_fetch_array($result);
	$token=$row['token'];
if(isset($_SESSION['who'])){
	if($_SESSION['who']!=$token){
		header("Location:/");
	}
}

	include("requests/curl.php");
	$bu=curl("https://api.vk.com/method/account.getProfileInfo?access_token=$token&v=5.53");
	$json=json_decode($bu,1);
	if(isset($json['error']))
		die("Error authenticate");
	$bu=curl("https://api.vk.com/method/status.get?access_token=$token&v=5.53");
	$name=$json['response']['first_name'];
	$surname=$json['response']['last_name'];
	$json=json_decode($bu,1);
	/* $statusc=$json['response']['text'];
	if($statusc!="")
		$status=$statusc; */
	$_SESSION['who']=$token;
	$_SESSION['title']=$name." ".$surname;
	$_SESSION['id']=$uri;
	include("html/main.php");

	echo $token;
	exit();
}
}
include("errors/error404.php");
?>
