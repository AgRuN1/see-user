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
<link href="font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css" media="screen" />
<link href="javascript/tipTip.css" rel="stylesheet" type="text/css" media="screen" />
<style media="screen">
  body{
    height: 100%;
    background:#384555;
  }
</style>
<title>Accaunts</title>
<script type="text/javascript" src="javascript/addtoken.js"></script>
<script type="text/javascript" src="javascript/throwerrors.js"></script>
</head>
<body>
<form id="token_send">
<br>
<div id="tokendiv">
<i style="padding-left:10px"class="fa fa-key fa-lg"></i><input name="token" type="text" placeholder="Токен" maxlength="150" size="30" id="tokeninput"onfocus="maxsize();"onblur="minsize();"><br><br>
</div>
<br>
<input type="button" value="Добавить токен" id="submit_token"class="form_button"onclick="addtoken();checktwo=1;"onmouseout="changecheck(1)"onmouseover="changecheck(0)">
<input type="reset" value="Очистить поле" onclick="checktwo=1"id="reset_token" class="form_button"onmouseout="changecheck(1)"onmouseover="changecheck(0)">
</form>
<table id="accaunts">
<thead>

</thead>
<caption>Аккаунты</caption>
<tbody>
<td style="text-align:center">
  <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
</td>
</tbody>
</table>

<?php

?>
<script type="text/javascript"src="javascript/query-min.js"></script>
<script type="text/javascript"src="javascript/jquery.tipTip.js"></script>
<script type="text/javascript">
$(function(){
  $("#token_send").on("submit",function(e){
    e.preventDefault();
  });
});
</script>
<script src="javascript/refresh.js"></script>
</body>
</html>
