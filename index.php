<!doctype>
<html>
<head>
<META NAME="Robots" CONTENT="none">
<meta charset="utf-8">
<noscript><meta http-equiv="refresh" content="3, url=/errors/badbrowser"></noscript>
<meta HTTP-EQUIV="pragma" CONTENT="no-cache">
    <meta HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
<link rel="shortcut icon" href="favi.ico" type="image/x-icon"> 
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<title>Accaunts</title>
<script type="text/javascript" src="javascript/addtoken.js"></script>
<script type="text/javascript" src="javascript/throwerrors.js"></script>
</head>
<body>
<form id="token_send">
<br>
<input name="token" type="text" placeholder="token" maxlength="150" size="30" id="tokeninput"onfocus="maxsize();"onblur="minsize();"><br><br>
<input type="button" value="Add token" id="submit_token"class="form_button"onclick="addtoken();checktwo=1;"onmouseout="changecheck(1)"onmouseover="changecheck(0)">
<input type="reset" value="Reset token" onclick="checktwo=1"id="reset_token" class="form_button"onmouseout="changecheck(1)"onmouseover="changecheck(0)">
</form>
<table id="accaunts">
<thead>
</thead>
<caption>Accaunts</caption>
<tbody>

</tbody>
</table>
<?php

?>
<script src="javascript/refresh.js"></script>
</body>
</html>
