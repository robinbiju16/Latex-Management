<!doctype html>
<?php 
session_start();?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- Page Title -->
	<title>Admin Profile</title>

	<!-- Compressed Styles -->
	<link href="css/slides.min.css" rel="stylesheet" type="text/css">
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
	<!-- jQuery 3.3.1 -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
	<script src="js/jquery.min.js"></script>

	<!-- Compressed Scripts -->
	<script src="js/slides.min.js" type="text/javascript"></script>

	<!-- Fonts and Material Icons -->
	<link rel="stylesheet" as="font" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700|Material+Icons"/>

</head>
<?php include("admn.php");?>
<!-- Slide 2 (#34) -->
<section class="slide fade-6 kenBurns" data-name="">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
 
  <center>
	   
	   <div class="progress-bar blue"></div>
<div class="" id="">
<div style="margin-top:100px;
">
 <?php
	require("db.php");
	$sql="select * from admin";
	$res=mysqli_query($con,$sql);
	$r=mysqli_fetch_array($res);
	?>
  <form action="" method="post" class="form-container" >
    <h1>Enter the Moble Number Of Planter</h1>

   
  
    <label for="name"><b>Name of company</b></label>
	<input type="text" placeholder="name" name="name" required>
	
	 <label for="add"><b>Address</b></label>
	<input type="text" placeholder="Address" name="add" required>
	
	 <label for="add"><b>Post Office</b></label>
	<input type="text" placeholder="Post office" name="po" required>
	
	 <label for="add"><b>Place</b></label>
	<input type="text" placeholder="Place" name="place" required>
	
	 <label for="add"><b>District</b></label>
	<input type="text" placeholder="District" name="dis" required>
	
	 <label for="add"><b>Mobile Number</b></label>
	<input type="text" placeholder="Mobile Number" name="mob" required>
	
	 <label for="add"><b>Account Number</b></label>
	<input type="text" placeholder="Account Number" name="acc" required>
	
	 <label for="add"><b>address</b></label>
	<input type="text" placeholder="Address" name="add" required>
	
	 <label for="add"><b>address</b></label>
	<input type="text" placeholder="Address" name="add" required>
	
	 <label for="add"><b>address</b></label>
	<input type="text" placeholder="Address" name="add" required>
	
	 <label for="psw1"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw1" required>

   


    <button type="submit" name="submit" class="btn">Submit</button>
  
  </form>
  
  </div>
</div>
	   
	   
	   
	   </center>
	   
	   
	   
 
 
  
   
    	 </div>
		</div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/img-83.jpg)"></div>
</section>



<!-- Panel Bottom #01 -->
<nav class="panel bottom forceMobileView">
  <div class="sections desktop">
    <div class="center"><span class="nextSlide"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use></svg></span></div>
    <div class="right"><span data-dropdown-id="2" class="button actionButton dropdownTrigger"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#share"></use></svg></span></div>
  </div>
  <div class="sections compact hidden">
    <div class="right">
      <span data-dropdown-id="2" class="button actionButton dropdownTrigger"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#share"></use></svg></span>
    </div>
  </div>
</nav>

<!-- Share Window -->


<!-- Loading Progress Bar -->



</body>
</html>
