<?php 
function date_lase($date){

	return $_POST['bdate'] < date("Y-m-d") ;

}

function date_bag($date){

	return $_POST['bdate'] > date("Y-m-d") ;

}

function date_eco($date){

	return $_POST['bdate'] == date("Y-m-d") ;

}
function date_lase1($date, $date1){

	return $_POST['bdate'] < $date1 ;

}

function date_bag1($date, $date1){

	return $_POST['bdate'] > $date1 ;

}
function date_eco1($date, $date1){

	return $_POST['bdate'] == $date1 ;

}

// echo ;
 ?>