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
?>
</body>
</html>
