<?php
session_start();
if(isset($_SESSION['who'])){

$token=$_SESSION['who'];
$url="https://api.vk.com/method/users.get?access_token=$token&fields=online,sex&v=5.53";
$bu=curl($url);
$json=json_decode($bu,1);
$name=$json['response'][0]['first_name'];
$surname=$json['response'][0]['last_name'];
$id=$json['response'][0]['id'];
$sex=$json['response'][0]['sex'];
$online=$json['response'][0]['online'];
$link="<a href=\"//vk.com/id$id\" title=\"$name $surname\"id=\"linkonprofil\"target=\"_blank\">$name $surname</a>";
}else{
  exit();
}
 ?>
<div id="topinfo">
<?php if($online==1){
  echo "<a id=\"online\" href=\"javascript:setOnline('offline')\">Online</a>";
}else{
  echo "<a id=\"offline\" href=\"javascript:setOnline('online')\">Offline</a>";
}
echo $link;
?>
<span id="logoutli"><a href="requests/logout.php">Log out</a></span>
</div>
<script>
function setOnline(on){
  var request=new XMLHttpRequest();
  if(on=="online"){
    var url="requests/setOnline.php?online=1";
    var online=document.getElementById("offline");
    online.firstChild.nodeValue="Online";
    online.setAttribute("id","online");
    online.setAttribute("href","javascript:setOnline('offline')");
    console.log(online.firstChild.nodeValue);
  }else if(on=="offline"){
    var url="requests/setOnline.php?online=0";
    var online=document.getElementById("online");
    online.firstChild.nodeValue="Offline";
    online.setAttribute("id","offline");
    online.setAttribute("href","javascript:setOnline('online')");
    console.log(online.firstChild.nodeValue);
  }else
  return;
  request.open("post",url);
  request.send(null);
}
</script>
