<?php


function includCss(){
	// include 'page\name.php';
	echo '<link href="css/name.css" rel="stylesheet">';
 }

 function includHad(){
	 include 'page\les.php';
 }
 function js(){
 	echo '<script src="../js/jquery-2.2.3.min.js"></script>
    <script src="../js\dscountdown.min.js"></script>';
 }
function set($lin){ header('location:'.$lin);}
 ?>
