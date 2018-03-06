<?php
session_start();
// echo("<script>alert('orce');</script>");
array_push($_SESSION["com_data"][0],$_GET['name']);
array_push($_SESSION["com_data"][1],$_GET['value']);
// print_r($_SESSION['data']);
?>
