<?php 
// include 'conn.php';
// $conn = con();
function select_all($Tname,$colam){

	$conn = con();
	if ($conn->connect_error) {
 	die("Connection failed: " . $conn->connect_error);
 }
 //

		$sql = "SELECT ".implode(",",$colam)." FROM $Tname";
		$sSQL= 'SET NAMES utf8';
    $conn->query($sSQL);
		 // echo $sql."<br>";
	    $result = $conn->query($sql);

		if ($result->num_rows > 0) {

			$outp;
			//$sr = "";
			$co = 0;

			while($row = $result->fetch_assoc()) {
				for($i = 0;$i < count($colam);$i++)
					$outp[$co][$colam[$i]] = $row["$colam[$i]"];
				//echo $i;
				//$outp[$co] = $sr;
				$co++;
			}

		}

		else {
			return "0 results";
		}

		return $outp;

	}


	function select_con($Tname, $colam, $where){

	$conn = con();

		$sql = "SELECT ".implode(",", $colam)." FROM $Tname where $where";
		   // echo $sql."<br>";
		$sSQL= 'SET NAMES utf8';
    $conn->query($sSQL);
	    $result = $conn->query($sql);

		if ( $result->num_rows > 0) {

			$outp;
			//$sr = "";
			$co = 0;

			while($row = $result->fetch_assoc()) {

				for($i = 0;$i < count($colam);$i++)
					$outp[$co][$colam[$i]] = $row["$colam[$i]"];

				$co++;
			}

		}

		else {
			return "0 results";
		}

		return $outp;

	}

	function select_fall($select,$colam){

	$conn = con();
	if ($conn->connect_error) {
 	die("Connection failed: " . $conn->connect_error);
 }
 //

		$sql = $select;
		$sSQL= 'SET NAMES utf8';
    $conn->query($sSQL);
		 // echo $sql."<br>";
	    $result = $conn->query($sql);

		if ($result->num_rows > 0) {

			$outp;
			//$sr = "";
			$co = 0;

			while($row = $result->fetch_assoc()) {
				for($i = 0;$i < count($colam);$i++)
					$outp[$co][$colam[$i]] = $row["$colam[$i]"];
				//echo $i;
				//$outp[$co] = $sr;
				$co++;
			}

		}

		else {
			return "0 results";
		}

		return $outp;

	}


	function select_join($Tname, $colam, $join, $where){


		$sql = "SELECT ".implode(",", $colam)." FROM $Tname ".implode(" ", $join)." where $where";
		 // echo($sql."<br>");
		$sSQL= 'SET NAMES utf8';
    $conn->query($sSQL);
	    $result = $conn->query($sql);

		if ( $result->num_rows > 0) {

			$outp;
			//$sr = "";
			$co = 0;

			while($row = $result->fetch_assoc()) {

				for($i = 0;$i < count($colam);$i++)
					$outp[$co][$colam[$i]] = $row["$colam[$i]"];

				$co++;
			}

		}

		else {
			return "0 results";
		}

		return $outp;

	}
	
 ?>