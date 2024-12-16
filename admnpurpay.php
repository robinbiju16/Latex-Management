<!doctype html>
<?php 
session_start();?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- Page Title -->
	<title>Products</title>

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
 <script> onchange{ var i=getElementById(qt); var } </script>
</head>
<?php include("admn.php");?>

<!-- Slide 2 (#34) -->
<section class="slide fade-6 kenBurns" data-name="">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
  <?php
		  
		
		
 require("db.php"); 


$p=$_GET['tin'];
$res=mysqli_query($con,"select * from purchase where tinno='$p'") or die(mysqli_error($con));
	 $or=mysqli_query($con,"select mob from latex where tinno='$p'") or die(mysqli_error($con));
		  $a=mysqli_fetch_array($or);
		  $mob=$a['mob'];
		  $usr=mysqli_query($con,"select * from user where mob='$mob'") or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
{
	$r=mysqli_fetch_array($res);
	 $u=mysqli_fetch_array($usr);
	
	
	}
else
{
	 echo "<script>alert('cant pay');history.go(-1);</script>";
}?>
	
	<div style='margin-top:100px;'>
<form action='' class='form-container' method="post">
  
  <h1>Payment Slips</h1>
   
   <label for='date'><b>Date</b></label>
    <input type='text' value=<?php $d=date('Y-m-d'); echo"$d"; ?> name='date' disabled>
    
     <label for='mob'><b>Mobile Number of  Planter</b></label>
    <input type='text' value="<?php echo $mob?>" name='mob' required>
    

   <label for='from'><b>Account number of User</b></label>
    <input type='text' value="<?php echo $u['accno']?>" name='from' required>
	<label for='to'><b>Account number of Admin</b></label>
    <input type='text' value=<?php echo"00000000000000000000" ?> name="to" disabled>
    
    <label for='for'><b>Tin NUmber</b></label>
    <input type='text' value=<?php echo $p; ?> name="for" id='pcode' disabled>
     <label for='amnt'><b>Amount </b></label>
    <input type='text'name="amnt" value=<?php echo $r['totl']?> id="price" disabled>
    

    <button type="submit" name="submit" class="button blue gradient">Submit</button>
    <button type="submit" class="button red gradient">cancel</button>
  	</form>
   	<?php
	 if(isset($_POST["submit"])){
	extract($_POST);
	 require("db.php");
		  
		
	 // $sql3="insert into payment (to,from,payfor,paydate,amt) values ('$mob','Successfully credit amount for tin.$p.',now(),)"or die(mysqli_error($con));
	//$res2=mysqli_query($con,$sql3)or die(mysqli_error($con));
 
		  $sql2="insert into msg (mob,mes,dat,bid) values ('$mob','Successfully credit amount for tin.$p.',now(),'1')"or die(mysqli_error($con));
	$res2=mysqli_query($con,$sql2)or die(mysqli_error($con));
		 
		 $sql1="update purchase set status='1' where tinno='$p'";
	$res1=mysqli_query($con,$sql1) or die(mysqli_error($con));	 
		  
	 echo "<script>alert('successfully Transfer Money');history.go(-2);</script>";
}?>
  
  
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
