<?php

$conn = new mysqli("localhost","root","","maintenance");
 if ($conn->connect_error) {
 	die("Connection failed: " . $conn->connect_error);
 }
 echo "Connected successfully!!!<br>";

 $sql = "INSERT INTO `items`( `item_name`, `categoriers_category_id`) VALUES ('".$_POST['i_name']."',".$_POST['category_id'].")";

 // $sql = "SELECT * FROM `state`";
   $sSQL= 'SET NAMES utf8';
    $conn->query($sSQL);
//echo $sql;
   if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

$conn->close();

?>