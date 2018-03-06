<?php

// include 'select.php';
function cond($Tname,$colam){
  $id = select_all($Tname,$colam);
  $i = 0;
  if ($id != "0 results")
  for ($i=0; $i < count($id); $i++) { 
    # code...
  }
  return ++$i;
}

function cond_con($Tname,$colam,$con){
  $id = select_con($Tname,$colam,$con);
  $i = 0;
  if ($id != "0 results")
  for ($i=0; $i < count($id); $i++) { 
    # code...
  }
  return ++$i;
}

function serial_id($Tname,$colam,$con){
  $out = cond_con($Tname,$colam,$con);
  $out = date("ymd").$out;
  return $out;
}

function cont_array($num){
$cont = 0;
for ($i=0; $i < count($_SESSION['com_data'][0]); $i++) { 
	if ($num == $_SESSION['com_data'][0][$i]) {
		$cont++;
	}
	
}
return $cont;
}

?>