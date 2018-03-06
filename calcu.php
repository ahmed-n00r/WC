<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html><?php session_start();
include 'lin.php';
includHad();
phpIn();
if (!isset($_SESSION["email"])) {
	set("log.php");
}
?>
<html>

<head>
	<title>Fascinate Flat Responsive Widget Template :: w3layouts</title>

	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Fascinate web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>

	<style>
	body {
	background-color:#fff;
	margin: 0px auto;

	}
	.calbody{
	 background: #097C9B;
	 border: 1px solid #ff0;
	 padding: 10px;
	 margin-left: 450px;
	 min-width: 27.4em;
	 max-width: 27.4em;

	}
	h1{
	 text-align: center;
	 font-size: 40px;
	 color: #003652;

	}

	#lcd{
	 text-align: right;
	 width: 23em;
	 height: 40px;
	 font-size: 18px;

	}

	#lcdu{
	 color: grey;
	 text-align: right;
	 width: 27.6em;
	 height: 35px;
	 font-size: 15px;

	}

	button{
	 background-color: #fff;
	 width: 80px;
	 height: 60px;
	 font-size: 20px;
	 border: 1px solid #097C9B;


	}

	button:hover{
	  background-color: #509CA9;

	 }

	</style>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Keania+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
</head>

<body>

	<h1 class="agile-head text-center">fascinate</h1>
	<center><div class="container-w3">
		<h2>We're Coming soon!</h2>
		<!-- الدف -->
		<div>
			<div class="calbody">
			<form name="lcdform">
			<input id="lcdu" name="lcdsu" type="text" value="" />
			<input id="lcd" name="lcds" type="text" value="0" />
			</form>
			<div id="calbutton">
			<button id="num1" onclick="numone();">1</button>
			<button id="num2" onclick="numtwo();">2</button>
			<button id="num3" onclick="numthree();">3</button>
			<button id="operationplus" onclick="operationplus();">+</button>
			<button id="operationraistop" onclick="operationraistop();">^</button>


			<button id="num4" onclick="numfour();">4</button>
			<button id="num5" onclick="numfive();">5</button>
			<button id="num6" onclick="numsix();">6</button>
			<button id="operationmult" onclick="operationmult();">*</button>
			<button id="operationsqrt" onclick="sqrots();">Sqrt()</button>


			<button id="num7" onclick="numseven();">7</button>
			<button id="num8" onclick="numeight();">8</button>
			<button id="num9" onclick="numnine();">9</button>
			<button id="operationminus" onclick="operationminus();">-</button>
			<button id="clr" onclick="clr();">C</button>


			<button id="operationperc" onclick="operationperc();">%</button>
			<button id="num0" onclick="numzero();">0</button>
			<button id="num00" onclick="numdobuzero();">00</button>
			<button id="operationdivid" onclick="operationdivid();">/</button>
			<button id="sumbit" onclick="equalsto();">=</button>
			</div>
			</div>
			<!-- Javascript code -->
			<script>

			var firstnumber;
			var secondnumber;
			var result;
			var operations;

			function numone(){
			 if (document.lcdform.lcds.value == "0" || document.lcdform.lcds.value == result){

			  document.lcdform.lcds.value = "1";

			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "1";
			 }

			}
			function numtwo(){

			 if (document.lcdform.lcds.value == "0" || document.lcdform.lcds.value == result){

			  document.lcdform.lcds.value = "2";

			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "2";
			 }

			}
			function numthree(){

			  if (document.lcdform.lcds.value == "0" || document.lcdform.lcds.value == result){

			  document.lcdform.lcds.value = "3";

			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "3";
			 }

			}
			function numfour(){

			 if (document.lcdform.lcds.value == "0" || document.lcdform.lcds.value == result){

			  document.lcdform.lcds.value = "4";

			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "4";
			 }

			}
			function numfive(){

			 if (document.lcdform.lcds.value == "0" || document.lcdform.lcds.value == result){

			  document.lcdform.lcds.value = "5";

			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "5";
			 }

			}
			function numsix(){

			 if (document.lcdform.lcds.value == "0" || document.lcdform.lcds.value == result){

			  document.lcdform.lcds.value = "6";

			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "6";
			 }

			}
			function numseven(){

			 if (document.lcdform.lcds.value == "0" || document.lcdform.lcds.value == result){

			  document.lcdform.lcds.value = "7";

			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "7";
			 }
			}
			function numeight(){

			 if (document.lcdform.lcds.value == "0"){

			  document.lcdform.lcds.value = "8";

			 }
			 else if (document.lcdform.lcds.value == result)
			 {
			  document.lcdform.lcds.value = "8";
			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "8";
			 }

			}
			function numnine(){

			 if (document.lcdform.lcds.value == "0" || document.lcdform.lcds.value == result){

			  document.lcdform.lcds.value = "9";

			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "9";
			 }

			}
			function numzero(){

			 if (document.lcdform.lcds.value == "0"){

			  document.lcdform.lcds.value = "0";

			 }
			 else if (document.lcdform.lcds.value == result)
			 {
			  document.lcdform.lcds.value = "0";
			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "0";
			 }

			}
			function numdobuzero(){

			 if (document.lcdform.lcds.value == "0" || document.lcdform.lcds.value == result){

			  return;

			 }
			 else //if(document.lcdform.lcds.value != "0")
			 {
			  documentdocument.lcdform.lcds.value = document.lcdform.lcds.value + "00";
			 }

			}
			function clr(){
			 document.lcdform.lcds.value = "0";
			 document.lcdform.lcdsu.value = "";
			 return;
			}

			function operationplus(){

			 operation = "+";
			 firstnumber = parseInt(document.lcdform.lcds.value);
			 document.lcdform.lcds.value = "0";
			 document.lcdform.lcdsu.value = firstnumber + operation;
			 //alert(firstnumber);

			}
			function operationmult(){

			 operation = "*";
			 firstnumber = parseInt(document.lcdform.lcds.value);
			 document.lcdform.lcds.value = "0";
			 document.lcdform.lcdsu.value = firstnumber + operation;

			}
			function operationminus(){

			 operation = "-";
			 firstnumber = parseInt(document.lcdform.lcds.value);
			 document.lcdform.lcds.value = "0";
			 document.lcdform.lcdsu.value = firstnumber + operation;

			}
			function operationdivid(){

			 operation = "/";
			 firstnumber = parseInt(document.lcdform.lcds.value);
			 document.lcdform.lcds.value = "0";
			 document.lcdform.lcdsu.value = firstnumber + operation;

			}
			function operationperc(){

			 operation = "%";
			 firstnumber = parseInt(document.lcdform.lcds.value);
			 document.lcdform.lcds.value = "0";
			 document.lcdform.lcdsu.value = firstnumber + operation;

			}
			function equalsto(){

			 secondnumber = parseInt(document.lcdform.lcds.value);

			 if (operation == "+")
			 {
			  result = firstnumber + secondnumber;
			 }
			 else if (operation == "*"){

			  result = firstnumber * secondnumber;

			 }
			 else if (operation == "-"){

			  result = firstnumber - secondnumber;

			 }
			    else if (operation == "/"){

			  result = firstnumber / secondnumber;

			 }
			 else if (operation == "%"){

			  if (document.lcdform.lcds.value == "0"){

			  result = firstnumber / 100;
			  document.lcdform.lcdsu.value = firstnumber + operation + "100";
			  }
			  else if (document.lcdform.lcds.value != "0")  {
			   result = firstnumber / secondnumber * 100;
			   document.lcdform.lcdsu.value = firstnumber + operation + secondnumber + "*100 = " + result;
			  }
			 }
			 else if (operation == "^"){

			  for (var i = 0; i < secondnumber; i++){

			   result = firstnumber * i;
			  }


			 }
			 document.lcdform.lcds.value ="";
			 document.lcdform.lcds.value = result.toString();
			 document.lcdform.lcdsu.value = firstnumber + operation + secondnumber + " = " + result.toString();
			 return;

			}

			function sqrots(){
			 firstnumber = document.lcdform.lcds.value;
			 result = Math.sqrt(parseInt(document.lcdform.lcds.value));
			 document.lcdform.lcds.value = result;
			 document.lcdform.lcdsu.value = "sqrt(" + firstnumber + ") = " + result;

			}

			function operationraistop(){

			 operation = "^";
			 firstnumber = parseInt(document.lcdform.lcds.value);
			 document.lcdform.lcds.value = "0";

			}

			</script>
		</div>


		<!-- <div class="agileits-w3layouts-copyright text-center">
			<p>© 2017 &nbsp;Fascinate. All rights reserved | Design by
				<a href="//w3layouts.com/">W3layouts</a>
			</p>
		</div> -->
	</div></center>
	<!-- Counter required files -->
	<link rel="stylesheet" href='css/dscountdown.css' type='text/css' media='all' />
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Counter required files -->
	<script src="js/dscountdown.min.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$('.demo2').dsCountDown({
				endDate: new Date("March 26, 2019 23:59:00"),
				theme: 'black'
			});
		});
	</script>
	<!-- //Counter required files -->
</body>

</html>
