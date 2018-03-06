<!DOCTYPE html>
<html  dir ="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bethany Bootstrap Theme</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="w3schools.css">
    <script src="stil/jquery.js"></script>
    <script src="stil/bootStrap_3.7.7_js.js"></script>


    <!-- =======================================================
        Theme Name: Bethany
        Theme URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style>
       
    select {
    width: 15%;
    padding: 5px 10px;
    border: 2px  solid #d9d9d9;
    border-radius: 5px;
    }

  input[type=text] {
    width: 15%;
    padding: 5px 10px;
    box-sizing: border-box;
    border: 2px solid #d9d9d9 ;
    border-radius: 5px;
    }

input[type=date] {
    width: 16%;
    padding: 5px 10px;
    box-sizing: border-box;
    border: 2px solid #d9d9d9 ;
    border-radius: 5px;
    }

    .center {
    margin-right:30%;
}


th, td {
    text-align: right;
    padding: 5px;
}


th {
    color:black;
    background-color:#ffe066 ;
}

  .modal-header, .h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 25px;
  }

  .modal-footer {
      background-color: #f9f9f9;
  }

}
    </style>
  </head>
  <body>
    <!--header-->
     <header class="main-header" id="header">
        <div class="bg-color">
            <!--nav-->
            <nav class="nav navbar-default navbar-fixed-top" style="background-color:black;">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
                            <a href="index.html" class="navbar-brand">Bethany</a>
                        </div>
                       <div>
                     <nav class="w3-sidenav w3-white" style="display:none;z-index:4;margin-right:-128px;margin-top:-40px">
                     <br>
                         <a href="javascript:void(0)" onclick="w3_close()" 
                           class="w3-closenav w3-large"> &times;</a>
                           <a href="companyaccount.html">المعلومات  الشخصية </a>        
                           <a href="reportBranch.html">الفروع </a>الفروع </a>        
                           <a href="tecinaccount.html">الفنيين</a>        
                           <a href="ordermantaincdetial.html">طلبات الصيانة </a>    
                           <a href="offercompany.html">العروض </a> 
                           <a href="#">الشكاوي </a>
                           <a href="#">التقارير </a>
                            <br>

                        </nav>
                <div class="w3-overlay" onclick="w3_close()" style="cursor:pointer;"></div>
                    <div class="w3-container" style="margin-right:-60px">
                    <span class= "w3-xlarge glyphicon glyphicon-list" style="color:white;"onclick="w3_open()">
                       </span>
                    </div>  
                     </div>
                    </div>
                </div>
            </nav>
            
          <script>
            function w3_open() {
            document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
            document.getElementsByClassName("w3-overlay")[0].style.display = "block";
           }
           function w3_close() {
           document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
            document.getElementsByClassName("w3-overlay")[0].style.display = "none";
           }
          </script>
    </header>
    <!--/ header-->
    
   <section dir ="rtl" class = "section">
         <br>
         <br>     
       <div class="w3-container">
       <form>
          <table class="table-bordered" style="margin-right:35px;width:85%">
          <h4 style="margin-right:40px;"> طلبات الصيانة التي تم تنفيذها :</h4>
             
             <label style="margin-right:40px;font-size:20px;">ادخل التاريخ </label> 
              <input type="date" name="date"></input> 
             
  
             <label style="font-size:20px;margin-right:40px">ادخل اي قيمة ذات علاقة بالتقرير </label> 
             <input type="text" name="text" style="margin-right:10px"></input>
             <a type="submit" class="btn btn-send w3-round" style="margin-right:10px">استعلام </a> 
            <br>
            <br>
            
            <tr>
            <th> <label for="lname">رقم العميل </label> </th> 
            <th> <label for="lname">اسم العميل </label> </th> 
            <th> <label for="lname">عنوان العميل </label> </th>
            <th> <label for="lname">العنوان </label> </th> 
            <th> <label for="lname">رقم الطلب </label> </th> 
            <th> <label for="fname">رقم الفئة </label> </th> 
            <th> <label for="fname">اسم الفئة </label> </th> 
            <th> <label for="fname">رقم الصنف </label> </th> 
            <th> <label for="fname">اسم الصنف </label> </th> 
            <th> <label for="fname">رقم الفني </label> </th> 
            <th> <label for="fname">اسم الفني </label> </th> 
            <th> <label for="fname">السعر النهائي </label> </th> 
            <th> <label for="fname">اسم العطل </label> </th>
            <th> <label for="fname">سبب العطل </label> </th>
            <th> <label for="fname">نوع الصيانة</label> </th>
            <th> <label for="fname">تقييم العميل </label> </th>
            <th> <label for="fname">تاريخ عملية الصيانة </label> </th>
            </tr>
           
           <tr>
           <td>1</td>
           <td>ابتهال محمد احمد محمد</td>
           <td> الخرطوم /جبرة /مربع 6/بالقرب من شارع الستين</td>
           <td>تلفون 0994433131</td>
           <td>ثلاجة</td>
           <td>ماركة lg </td>
           <td>علاجية</td>
           <td>فجاءة وقفت و فصت كهرباء و ماعراف الحصل شنو فجاءة </td>
           <td></td>
           <td>1/1/2016</td>
           <td>1:00 - 8:00</td>
           <td>2/2/2016</td>
           <td> </td>
           <td>  </td>
           <td> </td>
           <td> </td>
           <td> </td>
           </tr>

            </table>
          
            </form>
       </div>

       </div>
       <br>
       <br>
       
       <?php 

       $pra_co = array("branshs_companies_company_id", "branshs_bransh_id");
    $pra = select_con("branshes_communication", $pra_co, "mean = '".$_SESSION["user_email"]."'");

       $co = array('company_name','technician_name','img','dimand_tybe','initial_prise','damage_name','service_time','service_date','dimand_followup', 'note','bransh_id' ,'companies_company_id','date');

       $fd = select_fall("Select clients.client_name,
  clients.client_id As client_id1,
  state.state_name,
  city.city_name,
  neighborhood.neighborhood_name,
  block.block_name,
  executed_damands.acceptance_dimand_order_dimands_demands_Demand_id,
  items.items_id,
  items.item_name,
  categoriers.category_name,
  items.categoriers_category_id,
  technicians.technician_id,
  technicians.technician_name,
  executed_damands.final_price,
  ` damages`.damage_name,
  damages_reasons.reason_name,
  maintenance_type.Maintenance_Type_name,
  executed_damands.maintenance_ODate,
  executed_damands.client_evaluation
From executed_damands
  Inner Join acceptance_dimand
    On acceptance_dimand.order_dimands_demands_Demand_id =
    executed_damands.acceptance_dimand_order_dimands_demands_Demand_id
    And acceptance_dimand.order_dimands_demands_Demand_date =
    executed_damands.acceptance_dimand_order_dimands_demands_Demand_date And
    acceptance_dimand.order_dimands_damages_damage_id =
    executed_damands.acceptance_dimand_order_dimands_damages_damage_id
  Inner Join order_dimands On order_dimands.demands_Demand_id =
    acceptance_dimand.order_dimands_demands_Demand_id And
    order_dimands.demands_Demand_date =
    acceptance_dimand.order_dimands_demands_Demand_date
  Inner Join demands On demands.Demand_id = order_dimands.demands_Demand_id And
    demands.Demand_date = order_dimands.demands_Demand_date
  Inner Join branshs On branshs.bransh_id = demands.branshs_bransh_id And
    branshs.companies_company_id = demands.branshs_companies_company_id
  Inner Join companies On companies.company_id = branshs.companies_company_id
  Inner Join technicians On branshs.bransh_id = technicians.branshs_bransh_id
    And branshs.companies_company_id = technicians.branshs_companies_company_id
  Inner Join ` damages`
    On executed_damands.acceptance_dimand_order_dimands_damages_damage_id =
    ` damages`.damage_id
  Inner Join damages_reasons On executed_damands.damages_reasons_reason_id =
    damages_reasons.reason_id
  Inner Join maintenance_type On maintenance_type.Maintenance_Type_id =
    demands.maintenance_type_Maintenance_Type_id,
  clients
  Inner Join clients_items On clients_items.clients_client_id =
    clients.client_id
  Inner Join items On items.items_id = clients_items.items_items_id
  Inner Join block On clients.block_block_id = block.block_id And
    clients.block_neighborhood_neighborhood_id =
    block.neighborhood_neighborhood_id And
    clients.block_neighborhood_city_state_state_id =
    block.neighborhood_city_state_state_id And
    clients.block_neighborhood_city_city_id = block.neighborhood_city_city_id
  Inner Join neighborhood On neighborhood.neighborhood_id =
    block.neighborhood_neighborhood_id And neighborhood.city_city_id =
    block.neighborhood_city_city_id And neighborhood.city_state_state_id =
    block.neighborhood_city_state_state_id
  Inner Join city On city.city_id = neighborhood.city_city_id And
    city.state_state_id = neighborhood.city_state_state_id
  Inner Join state On state.state_id = city.state_state_id
  Inner Join categoriers On categoriers.category_id =
    items.categoriers_category_id 
    where  companies.company_id = ".$clino[0]['branshs_companies_company_id'],$co);
       print_r($fd);
        ?>
    <!---->

    <footer class="" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 footer-copyright">
                    © Bethany Theme - All rights reserved
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bethany
                        -->
                        Designed by <a href="https://bootstrapmade.com/">Bootstrap Themes</a>
                    </div>
                </div>
                <div class="col-sm-5 footer-social">
                    <div class="pull-right hidden-xs hidden-sm">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width:380px ">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header" style="padding:10px 10px;background-color:black;height:175px;">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 style="padding:50px 10px;"> LOGIN </h1>

        </div>

        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">

              <label for="usrname">Username</label>
              <input type="Email" class="form-control" id="usrname" placeholder="Enter email">

            </div>

            <div class="form-group">
              <label for="psw"> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">

            </div>
           
              <button type="submit" class="btn btn-success btn-block" style="background-color:black;border-color:black;">
               Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">Cancel</button>
          <p><a href="#">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
    <!---->
    <!--contact ends-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>