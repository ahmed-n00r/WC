<?php
session_start();
include 'lin.php';
// includHad();
phpIn();
// echo("<script>alert('orce');</script>");
// array_push($_SESSION["name"][0],$_GET['name']);
// array_push($_SESSION["name"][1],$_GET['date']);
// print_r($_SESSION['data']);
$co = array("date", "name", "users_user_name");
in('numes', $co, array("'".date("Y/m/d")."'",
 "'".$_GET['name']."'", "'".$_SESSION["email"]."'"));
?>
