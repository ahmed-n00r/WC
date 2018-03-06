<?php
// include 'conn.php';
function in($Tname,$colam,$in){
	$conn = con();
 if ($conn->connect_error) {
 	die("Connection failed: " . $conn->connect_error);
 }
 // echo "Connected successfully!!!<br>";

 $sql = "INSERT INTO ".$Tname."(".implode(",", $colam).") VALUES (".implode(",", $in).")";

   $sSQL= 'SET NAMES utf8';
    $conn->query($sSQL);

     // echo $sql;
if ($conn->query($sql) === TRUE) {
    // return 1;
     // echo "New record created successfully";
} else {
    // return 0;
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//return "noor";
$conn->close();

}

function update($Tname, $colam, $where){
		$conn = con();
		$sql = "UPDATE ".$Tname." SET ".implode(',', $colam)." WHERE ".$where;
		// echo "$sql";
		if ($conn->query($sql) === TRUE) {
			// echo "ok";
    // return 1;
} else {
	// echo "not";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		
}

?>