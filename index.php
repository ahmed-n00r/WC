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
	<script type="text/javascript">
		function label() {
			var x
			// var y = document.getElementById('Two').checked;
			// document.getElementById('demo').innerHTML=y;

			if (document.getElementById('Cen').checked) {
				 x = "Centimeter:"+document.getElementById('in').value * 0.01
			}

			if (document.getElementById('meter').checked) {
				 x = "meter:"+document.getElementById('in').value / 0.01
			}

			document.getElementById('demo').innerHTML = x;

		}

		function label2() {
			var x
			// var y = document.getElementById('Two').checked;

			// document.getElementById('demo').innerHTML=y;

			if (document.getElementById('Kgs').checked) {
				 x = "Kgs:"+document.getElementById('in2').value * 2.2
			}

			if (document.getElementById('Lbs').checked) {
				 x = "Lbs:"+document.getElementById('in2').value / 2.2
			}

			document.getElementById('demo2').innerHTML = x;

		}
	</script>

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
	<div class="container-w3">
		<h2>We're Coming soon!</h2>
		<div class="demo2"></div>
		<div class="content2-w3-agileits">
			<p>Don't miss the launch of our new website.
				<br>sign up and stay updated.</p>
			<form action="#" method="post" class="agile-info-form">
				<input  id="in" class="email" placeholder="Enter your email address" required="">
				<input type="button" style="border: none; color: white; padding: 14px 28px; color: black; font-size: 16px; cursor: pointer;" value="sign up" onclick="label()">
				<div class="clear"> </div>
			</form><p id="demo" style="color: dodgerblue">*</p>
			<div class="wthree-social-icons">
				<label class="container" >Centimeter
  <input type="radio" checked="checked" name="radio" id="Cen" value="1">
  <span class="checkmark"></span>
</label>
<label class="container">meter
  <input type="radio" name="radio" id="meter" value="2">
  <span class="checkmark"></span>
</label><br><br>

<form action="#" method="post" class="agile-info-form">
	<input  id="in2" class="email" placeholder="Enter your email address" required="">
	<input type="button"
	style="border: none; color: white; padding: 14px 28px; color: black; font-size: 16px; cursor: pointer;"
	 value="sign up" onclick="label2()">
	<div class="clear"> </div>
</form><p id="demo2" style="color: dodgerblue">*</p>
<div class="wthree-social-icons">
	<label class="container" >Kgs
<input type="radio" checked="checked" name="radio" id="Kgs" value="1">
<span class="checkmark"></span>
</label>
<label class="container">Lbs
<input type="radio" name="radio" id="Lbs" value="2">
<span class="checkmark"></span>
</label>
<!-- <label class="container">Three
  <input type="radio" name="radio" id="Three" value="3">
  <span class="checkmark"></span>
</label>
<label class="container">Four
  <input type="radio" name="radio" id="Four" value="4">
  <span class="checkmark"></span> -->
</label>
			</div>
		</div>
		<!-- <div class="agileits-w3layouts-copyright text-center">
			<p>© 2017 &nbsp;Fascinate. All rights reserved | Design by
				<a href="//w3layouts.com/">W3layouts</a>
			</p>
		</div> -->
	</div>
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
