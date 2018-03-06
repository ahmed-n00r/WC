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
	<?php  ?>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Fascinate web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns  Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->

  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box}

  /* Full-width input fields */
  input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
  }

  input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
  }

  hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
  }

  /* Set a style for all buttons */
  button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
  }

  button:hover {
      opacity:1;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
  }

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    float: left;
    width: 50%;
  }

  /* Add padding to container elements */
  .container {
      padding: 16px;
  }

  /* Clear floats */
  .clearfix::after {
      content: "";
      clear: both;
      display: table;
  }

  .mydiv{
    background-color: #737373;
  }

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
      .cancelbtn, .signupbtn {
         width: 100%;
      }
  }
  </style>

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Keania+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
</head>

<body>
	<?php ?>

	<h1 class="agile-head text-center">fascinate</h1>
	<div class="container-w3">
		<h2>We're Coming soon!</h2>
		<!-- الدف -->
		<div class="mydiv">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
				 method="post" style="border:1px solid #ccc">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <!-- <label for="email"><b>Email</b></label> -->
        <input type="text" placeholder="Enter Email" name="email" required style="background-color:#999999; ">

        <!-- <label for="psw"><b>Password</b></label> -->
        <input type="password" placeholder="Enter Password" name="psw" required style="background-color:#999999; ">

				<!-- <label for="psw-repeat"><b>full name</b></label> -->
        <input type="text" placeholder="full name" name="fname" required style="background-color:#b3b3b3; ">

				<!-- <label for="psw-repeat"><b>address</b></label> -->
        <input type="text" placeholder="address" name="address" required style="background-color:#b3b3b3; ">

				<!-- <label for="psw-repeat"><b>phone number</b></label> -->
        <input type="text" placeholder="phone number" name="phone" required style="background-color:#b3b3b3; ">

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form></div>

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
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$co = array("email", "pass", "full_name", "address", "phone");
		$val = array("'".$_POST["email"]."'", "'".$_POST["psw"]."'", "'".$_POST["fname"]."'", "'".$_POST["address"]."'", "'".$_POST["phone"]."'");
		in('users', $co, $val);
	}
	 ?>
	<!-- //Counter required files -->
</body>

</html>
