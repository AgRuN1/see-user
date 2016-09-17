<?php
session_start();
if(isset($_SESSION['who'])&&isset($_GET['online'])){
include("curl.php");
$token=$_SESSION['who'];
$online=$_GET['online'];
if($online==1){
  curl("https://api.vk.com/method/account.setOnline?access_token=$token&v=5.53");
}else if($online==0){
  curl("https://api.vk.com/method/account.setOffline?access_token=$token&v=5.53");
}
}
?>
