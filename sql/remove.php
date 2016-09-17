<?php
include("mysql_connect.php");
$id=(int)$_GET['id'];
$delete="delete from tokens where id=".$id;
mysqli_query($con,$delete) or die("query error");
mysqli_close($con);
?>