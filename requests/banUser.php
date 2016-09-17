<?php
if(isset($_GET['id'])&&isset($_SESSION['who']))){
$id=$_GET['id'];
$token==$_SESSION['who'];
include("curl");
$bu=curl("https://api.vk.com/method/account.banUser ?access_token=$row[token]$user_id=$id&v=5.53");
}
?>