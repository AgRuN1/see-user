<?php
session_start();
if(!isset($_SESSION['who'])){
header("Location:../");
}
$_SESSION['who']=array();
session_destroy();
header("Location:../");
?>