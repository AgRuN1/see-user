<?php
include("dat.php");
$con=mysqli_connect($host,$user,$pass) or die("connect error");
mysqli_select_db($con,$db);
?>