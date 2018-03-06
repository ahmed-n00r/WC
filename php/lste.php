<?php 

function lste($colam, $table_name){
  $link = mysqli_connect("localhost", "root", "", "maintenance");
             if($link === false)
             {
               die("ERROR: Could not connect. " . mysqli_connect_error());
             }
             else
             $sql = 'SELECT '.implode(",",$colam).' FROM `'.$table_name.'`';
         $sSQL= 'SET NAMES utf8';
         $i = 0;
           $link->query($sSQL);

              if(!$result=$link-> query($sql)){}
              while($row = $result ->  fetch_assoc())
             {
              for($j = 0; $j < count($colam); $j++)
                $outp[$i][$colam[$j]] = $row["$colam[$j]"];
               $i++;
             }

              $link -> close();
             return $outp;
}


function lste_con($colam, $table_name,$con){
  $link = mysqli_connect("localhost", "root", "", "maintenance");
             if($link === false)
             {
               die("ERROR: Could not connect. " . mysqli_connect_error());
             }
             else
             $sql = 'SELECT '.implode(",",$colam).' FROM `'.$table_name.'` WHERE '.$con;
         $sSQL= 'SET NAMES utf8';
         $i = 0;
           $link->query($sSQL);

              if(!$result=$link-> query($sql)){}
              while($row = $result ->  fetch_assoc())
             {
              for($j = 0; $j < count($colam); $j++)
                $outp[$i][$colam[$j]] = $row["$colam[$j]"];
               $i++;
             }

             $link -> close();
             return $outp;
}
         // $colam = array("city_id", "city_name"); 
         // $outp = lste_con($colam, "city", "neighborhood_city_state_state_id = 1");
 ?>