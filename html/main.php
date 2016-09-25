<!doctype>
<html>
<head>
<META NAME="Robots" CONTENT="none">
<meta charset="utf-8">
<noscript><meta http-equiv="refresh" content="3, url=/errors/badbrowser"></noscript>
<meta HTTP-EQUIV="pragma" CONTENT="no-cache">
<meta HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
<link rel="shortcut icon" href="favi.ico" type="image/x-icon">
<script type="text/javascript" src="javascript/throwerrors.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css" media="screen" />
<style>
#mainpageli{
	background-image:linear-gradient(-150deg,rgba(0,0,230,.7) 0,rgba(0,0,230,.7) 25% ,transparent 0);
}
</style>
<title><?=$_SESSION['title']?></title>
</head>
<body>
<?php
include("requests/getInfo.php");
include("nav.php");
$bu=curl("https://api.vk.com/method/users.get?access_token=".$_SESSION['who']."&fields=status,books,has_photo,photo_200,photo_50,home_town,online,site,country,education,%20universities,%20schools,about,activities,%20interests,%20music,%20movies,%20tv,has_mobile,nickname,relatives,career,exports,games,followers_count,last_seen,personal,domain,city,military,crop_photo,occupation,quotes,relation,screen_name,verified");
$response=$json['response'][0];
$json=json_decode($bu,1);
$id=$json['response'][0]['uid'];
$name=$json['response'][0]['first_name'];
$surname=$json['response'][0]['last_name'];
$nickname=$json['response'][0]['nickname'];
$country_num=$json['response'][0]['country'];
$city_num=$json['response'][0]['city'];
if($json['response'][0]['has_photo']==1)
    $photo=$json['response'][0]['photo_200'];
$mobile=$json['response'][0]['has_mobile'];
$online=$json['response'][0]['online'];
$site=$json['response'][0]['site'];
$status=$json['response'][0]['status'];
$interests=$json['response'][0]['interests'];
$music=$json['response'][0]['music'];
$books=$json['response'][0]['books'];
$about=$json['response'][0]['about'];
$home_town=$json['response'][0]['home_town'];
$tv=$json['response'][0]['tv'];
$movies=$json['response'][0]['movies'];
$exports=$json['response'][0]['exports'];
$games=$json['response'][0]['games'];
$followers_count=$json['response'][0]['followers_count'];
if(!empty($json['response'][0]['career'])){
    if(!empty($json['response'][0]['career'][0]['group_id'])){
        $work_id=$json['response'][0]['career'][0]['group_id'];
    }
    else if(!empty($json['response'][0]['career'][0]['company'])){
        $company=$json['response'][0]['career'][0]['company'];
    }
    
}
$domain=$json['response'][0]['domain'];

$last_seen=$json['response'][0]['last_seen'];
$time=$last_seen['time'];
$platform=$last_seen['platform'];
$langs=implode(", ",$json['response'][0]['personal']['langs']);
$political_num=$json['response'][0]['personal']['political'];
$occupation_name=$json['response'][0]['occupation']['name'];
$occupation_type=$json['response'][0]['occupation']['type'];
$quotes=$json['response'][0]['quotes'];
$relation=$json['response'][0]['relation'];
if(!empty($json['response'][0]['relation_partner'])){
    $partner_id=$json['response'][0]['relation_partner']['id'];
    $partner_name=$json['response'][0]['relation_partner']['first_name'];
    $partner_surname=$json['response'][0]['relation_partner']['last_name'];
}
$verified=$json['response'][0]['verified'];
$screen=$json['response'][0]['screen_name'];
echo "<div class=\"profile\">";
echo "<p class=\"name\">$name <br>$nickname <br>$surname</p>";
echo "<img src='".$photo."'alt=''>";
echo "</div>";
?>

</body>
</html>
