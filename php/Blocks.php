<?php 
session_start();
include 'select.php';
$colam = array("branshs_bransh_id", "branshs_companies_company_id", "categoriers_category_id", "maintenance_type_Maintenance_Type_id");
$outp = select_con("branches_tmc", $colam, "maintenance_type_Maintenance_Type_id = ".$_POST['country']);
$_SESSION["sarsh"][0] = json_encode($outp);

// echo("<br>");

$colam = array("bransh_id", "companies_company_id","bransh_name" );
for ($i=0; $i < count($outp); $i++) { 
    $outp1[$i] = select_con("branshs",$colam, "bransh_id =".$outp[$i]['branshs_bransh_id']." and companies_company_id =".$outp[$i]['branshs_companies_company_id']);
}
$_SESSION["sarsh"][1] = json_encode($outp1);
 
// echo("<br>");

$colam = array("company_id", "company_name");
$outp2 = array();
for ($i=0; $i < count($outp); $i++) {
$outp2[$i] = select_con("companies",$colam, "company_id =".$outp[0]['branshs_companies_company_id']);
}
$_SESSION["sarsh"][2] = json_encode($outp2);
echo json_encode($_SESSION["sarsh"]);
header("Location: tast.php");
 ?>