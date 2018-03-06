<?php session_start();
include 'select.php';

function c($a, $z){
return ;
}

$co = array('branshs_bransh_id', 'branshs_companies_company_id', 'categoriers_category_id', 'maintenance_type_Maintenance_Type_id');
$bra_tmc = select_all("branches_tmc", $co);
// print_r($bra_tmc);


// print_r($cat);


// print_r($Main);


// print_r($comm);

for ($i=0; $i < count($bra_tmc) ; $i++) { 

	$co = array('company_id', 'company_name');
$cam = select_con("companies", $co, " company_id = ".$bra_tmc[$i]['branshs_companies_company_id']);
// print_r($cam);

$co = array('bransh_id', 'bransh_name', 'companies_company_id');
$bra = select_con("branshs", $co, " companies_company_id = ".$bra_tmc[$i]['branshs_companies_company_id']." and bransh_id =".$bra_tmc[$i]['branshs_bransh_id']);
// print_r($bra);
$co = array('category_name');
$cat = select_con("categoriers", $co, "category_id = ".$bra_tmc[$i]['categoriers_category_id']);

$co = array('Maintenance_Type_name');
$Main = select_con("maintenance_type", $co, "Maintenance_Type_id = ".$bra_tmc[$i]['maintenance_type_Maintenance_Type_id']);

$co = array('mean_number', 'mean', 'branshs_bransh_id', 'branshs_companies_company_id', 'communication_means_id');

$b_co =array('block_name','state_name','neighborhood_name','city_name',);
$blo_d = select_fall("Select block.block_name,
  neighborhood.neighborhood_name,
  city.city_name,
  state.state_name
From branshs
  Inner Join block On branshs.block_neighborhood_city_city_id =
    block.neighborhood_city_city_id And
    branshs.block_neighborhood_city_state_state_id =
    block.neighborhood_city_state_state_id And
    branshs.block_neighborhood_neighborhood_id =
    block.neighborhood_neighborhood_id And branshs.block_block_id =
    block.block_id
  Inner Join neighborhood On block.neighborhood_city_state_state_id =
    neighborhood.city_state_state_id And block.neighborhood_city_city_id =
    neighborhood.city_city_id And block.neighborhood_neighborhood_id =
    neighborhood.neighborhood_id
  Inner Join city On neighborhood.city_state_state_id = city.state_state_id And
    neighborhood.city_city_id = city.city_id
  Inner Join state On city.state_state_id = state.state_id
  where companies_company_id = ".$bra_tmc[$i]['branshs_companies_company_id']." and bransh_id = ".$bra_tmc[$i]['branshs_bransh_id'], $b_co);

$html =' 
	<div id = "card" class="w3-card-12 w3-white w3-round-large" style="width:850px;height:270px;margin-right:260px;margin-top:15px">
  
     <div class="w3-container">
       <div style="width:100%;margin-right:-14px;margin-top:4px">
       <img src="php\uploads\user-256.png" style="width:18%">
       </div>
       <div style="width:100%;margin-top:-146px;">
       <form>
          <table class="table" style="margin-right:137px;width:78%">
            <tr>
            <th> <label for="lname">اسم الشركة </label> </th> 
            <td> 
           <label name = "cname" id = "cname">'.$cam[0]['company_name'].'</label>
            </td> 
            </tr>

            <tr>
            <th> <label for="lname"> اسم الفرع </label> </th> 
            <td> 
            <label>'.$bra[0]['bransh_name'].'</label>
            </td> 
            </tr>

            <tr>
            <th><label for="lname">التخصصات </label> </th> 
            <td><label>'.$cat[0]['category_name'].'</label>
            </td> 
            </tr>

            <tr>
            <th> <label for="lname">العنوان</label> </th> 
            <td> 
            <label>'.$blo_d[0]['state_name'].'/'.$blo_d[0]['city_name'].'/'.$blo_d[0]['neighborhood_name'].'/'.$blo_d[0]['block_name'].'</label>
            </td> 
            </tr>
            <th> <label for="lname">انواع الصيانة </label> </th> 
            <td> 
     ';
     for ($j=0; $j < count($Main); $j++) { 
     	$html = $html.'<label>'.$Main[$j]['Maintenance_Type_name'].'</label>';
      if(isset($_SESSION["user_id"]))
$but = '<a href="ordermantainc.php?cname='.$cam[0]['company_name'].'&cid='.$cam[0]['company_id'].'&bid='.$bra_tmc[$i]['branshs_bransh_id'].'&mt='.$bra_tmc[$i]['maintenance_type_Maintenance_Type_id'].'&mn='.$Main[$j]['Maintenance_Type_name'].'"><button type="button" class="btn btn-send w3-round but" style="margin-top:-100px;margin-right:775px">طلب</button></a>';
else $but = '';
     }/* SELECT dimension_values.Dimension_VName, dimensions.Dimension_nmae, items.item_name FROM `items_dimensions` 


*/

     $html = $html.'</td> 
            </tr>
            <tr>
            <th> <label for="lname">وسائل الاتصال </label> </th> 
            <td>';

            $bra_com = select_con("branshes_communication", $co, "branshs_bransh_id = ".$bra_tmc[$i]['branshs_bransh_id']);
// print_r($bra_com);

$co = array('means_name');

     for ($j=0; $j < count($bra_com); $j++) { 
     	$comm = select_con("communication", $co, "	means_id = ".$bra_com[0]['communication_means_id']);
     	$html = $html.'<label>'.$bra_com[$j]['mean'].':'.$comm[0]['means_name'].'</label>';
     }
//<button type="submit" class="btn btn-send w3-round but" style="margin-top:-100px;margin-right:775px">طلب</button>

echo $html.' 
            </td> 
            </tr>
            </table>
            '.$but.'
            </form>
       </div>
       </div>

       </div>
       <br>
       <br>
        ';

	}
 ?>
