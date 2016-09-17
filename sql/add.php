<?php
if(isset($_GET['token'])){
	$token=htmlspecialchars($_GET['token']);
	include("mysql_connect.php");
	$insert="insert into tokens(token) values('".$token."')";
	mysqli_query($con,$insert) or die("error query");
	mysqli_close($con);
}
?>