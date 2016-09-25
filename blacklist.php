<?php
session_start();
if(!isset($_SESSION['who']))
	header("Location:/");
$token=$_SESSION['who'];
?>
<!doctype>
<html>
<head>
<META NAME="Robots" CONTENT="none">
<meta charset="utf-8">
<noscript><meta http-equiv="refresh" content="3, url=../errors/badbrowser"></noscript>
<meta HTTP-EQUIV="pragma" CONTENT="no-cache">
    <meta HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
<link rel="shortcut icon" href="../favi.ico" type="image/x-icon">
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="javascript/throwerrors.js"></script>
<title>Черный список</title>
</head>
<body>
<?php
include("requests/curl.php");
include("requests/getInfo.php");
include("html/nav.php");
?>
<form id="add_blacklist">
<br>
<input type="text" placeholder="id" maxlength="10" size="10" id="idban"onfocus="maxsize();"onblur="minsize();"><br><br>
<input type="button" value="Заблокировать" id="banuser"class="form_button">
</form>
<table id="bannedusers">
<thead>
</thead>
<caption>Пользователи</caption>
<tbody>

</tbody>
</table>
<?php
echo "<p id=\"thisistoken\" style=\"display:none\">$token</p>";
?>
<script>
window.onload=refresh;
var request;
function refresh(){
	var token=document.getElementById("thisistoken").firstChild.nodeValue;
	request=new XMLHttpRequest();
	var urls="/requests/getBanned.php?token="+token;
	request.open("post",urls);
	request.onreadystatechange=addRefresh;
	request.send(null);
}
function addRefresh(){
	if(request.readyState==4){
	var text=request.responseText;
	var json=JSON.parse(text);
	users=json.response.users;
	if(json.error){
		var error=errors(json.error.error_code);

	}
	var tbody=document.createElement("tbody");

	for(var i=0;i<users.length;i++){
		var user=users[i];
		var id=user.id;
		var name=user.name;
		var surname=user.surname;
		var tr=document.createElement("tr");
		var td=document.createElement("td");
		td.setAttribute("class","userinblacklist");
		var a=document.createElement("a");
		a.appendChild(document.createTextNode(name+" "+surname))
		a.setAttribute("href","//vk.com/id"+user.id);
		a.setAttribute("target","_blank");
		td.appendChild(a);
		var tdrem=document.createElement("td");
		tdrem.appendChild(document.createTextNode("Delete from blacklist"));

		tdrem.setAttribute("class","usrRemovebl");
		tdrem.setAttribute("onclick","removeBl(this.previousElementSibling)");
		tr.appendChild(td);
		tr.appendChild(tdrem);
		tbody.appendChild(tr);
	}
	var table=document.getElementById("bannedusers");
	var oldbody=table.getElementsByTagName("tbody")[0];
	table.replaceChild(tbody,oldbody);
	}
	}
function removeBl(obj){
	/* var id=obj.firstChild.nodeValue;
	obj.parentNode.style.opacity="0";
	var requests=new XMLHttpRequest();
	var urli="/sql/remove.php?id="+id;
	requests.open("get",urli,true);
	requests.send(null) */;
}
setInterval(refresh,5000);
</script>
</body>
</html>
