<?php
/* header('Content-Type: application/x-javascript; charset=utf8'); */
include("curl.php");
include("../sql/mysql_connect.php");
$select="select *";
$from="from tokens";
$result=mysqli_query($con,$select.$from);
$reply=array();
if(mysqli_num_rows($result)==0){
	$error=array("error_code"=>"0");
	$reply['response']['accaunt'][]=($error);
	echo json_encode($reply);
	mysqli_close($con);
	exit();
}
while($row=mysqli_fetch_array($result)){
		$bu=curl("https://api.vk.com/method/account.getProfileInfo?access_token=$row[token]&v=5.53");
		$id=$row['id'];
		$json=json_decode($bu,1);
		
		if(!empty($json['error'])){
			$error_code=$json['error']['error_code'];
			$error=array(
			"error_code"=>$error_code,
			"id"=>$id);
			$reply['response']['accaunt'][]=($error);
		}else{
		$name=$json['response']['first_name'];
		$surname=$json['response']['last_name'];
		$accaunt=array(
		"name"=>$name,
		"surname"=>$surname,
		"id"=>$id);
		$reply['response']['accaunt'][]=($accaunt);
		}
} 
$reply=json_encode($reply);
echo $reply;
mysqli_close($con);
?>