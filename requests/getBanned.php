<?php
include("curl.php");
$token=$_GET['token'];
$reply=array();
$bu=curl("https://api.vk.com/method/account.getBanned?access_token=$token&v=5.53");
$json=json_decode($bu,1);
if(isset($json['error'])){
	$error=array(
	"error_code"=>$json['error']['error_code']
	);
	$reply['error']=$error;
	die(json_encode($reply));
}
$count=$json['response']['count'];
for($i=0;$i<$count;$i++){
	$id=$json['response']['items'][$i]['id'];
	$name=$json['response']['items'][$i]['first_name'];
	$surname=$json['response']['items'][$i]['last_name'];
	$user=array(
	"id"=>$id,
	"name"=>$name,
	"surname"=>$surname);
	$reply['response']['users'][]=$user;
}
echo json_encode($reply);

?>