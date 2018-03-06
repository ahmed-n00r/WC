<?php

 function includHad(){
	 include 'page\les.php';
 }

 function phpIn(){
	 include 'php\in.php';
	 include 'php\conn.php';
	 include 'php\select.php';
	 include 'php\user.php';
 }

 function js(){
 	echo '<script src="../js/jquery-2.2.3.min.js"></script>
    <script src="../js\dscountdown.min.js"></script>';
 }

function set($lin){ header('location:'.$lin);}
 ?>
