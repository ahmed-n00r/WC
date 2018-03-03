<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Fascinate Flat Responsive Widget Template :: w3layouts</title>
	<?php include 'lin.php' ?>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Fascinate web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
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

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Keania+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
</head>

<body>
	<?php includHad(); includCss(); ?>

	<h1 class="agile-head text-center">fascinate</h1>
	<div class="container-w3">
		<div id="myDIV" class="header">
		  <h2 style="margin:5px">My To Do List</h2>
		  <input type="text" id="myInput" placeholder="Title...">
		  <span onclick="newElement()" class="addBtn">Add</span>
		</div>

		<ul id="myUL">
		  <li>Hit the gym</li>
		  <li class="checked">Pay bills</li>
		  <li>Meet George</li>
		  <li>Buy eggs</li>
		  <li>Read a book</li>
		  <li>Organize office</li>
		</ul>

		<script>
		// Create a "close" button and append it to each list item
		var myNodelist = document.getElementsByTagName("LI");
		var i;
		for (i = 0; i < myNodelist.length; i++) {
		  var span = document.createElement("SPAN");
		  var txt = document.createTextNode("\u00D7");
		  span.className = "close";
		  span.appendChild(txt);
		  myNodelist[i].appendChild(span);
		}

		// Click on a close button to hide the current list item
		var close = document.getElementsByClassName("close");
		var i;
		for (i = 0; i < close.length; i++) {
		  close[i].onclick = function() {
		    var div = this.parentElement;
		    div.style.display = "none";
		  }
		}

		// Add a "checked" symbol when clicking on a list item
		var list = document.querySelector('ul');
		list.addEventListener('click', function(ev) {
		  if (ev.target.tagName === 'LI') {
		    ev.target.classList.toggle('checked');
		  }
		}, false);

		// Create a new list item when clicking on the "Add" button
		function newElement() {
		  var li = document.createElement("li");
		  var inputValue = document.getElementById("myInput").value;
		  var t = document.createTextNode(inputValue);
		  li.appendChild(t);
		  if (inputValue === '') {
		    alert("You must write something!");
		  } else {
		    document.getElementById("myUL").appendChild(li);
		  }
		  document.getElementById("myInput").value = "";

		  var span = document.createElement("SPAN");
		  var txt = document.createTextNode("\u00D7");
		  span.className = "close";
		  span.appendChild(txt);
		  li.appendChild(span);

		  for (i = 0; i < close.length; i++) {
		    close[i].onclick = function() {
		      var div = this.parentElement;
		      div.style.display = "none";
		    }
		  }
		}
		</script>
    
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
