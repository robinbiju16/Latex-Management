<!doctype html>
<?php session_start(); ?>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- Page Title -->
	<title>Tin Issue Status</title>

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
<?php include("admn.php")?>

<!-- Slide 2 (#34) -->
<section class="slide fade-6 kenBurns" data-name="">
  <div class="content">
    <div class="container">
      <div class="wrap">
          
       <?php
$mob=$_GET['mob'];
require("db.php");
 
$i=0;

$sql="select * from inform where mob='$mob'";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
$r=mysqli_fetch_array($res);
		  if($r['tinw']<=0)
		  {
			  echo "<script>alert('cant be update');history.go(-1);</script>";
		  }
		  else{


	   
	 echo"  <center>
	   
	   <div class='progress-bar blue'></div>
<div class='' id=''>
<div style='margin-top:100px';
><h1>Enter the Tin Details</h1>";
		 
	  echo " <form action='' class='form-container' method='post' >";
   echo"<label for='mob''><b>Mobile NO: of planter</b></label>
	<input type='text' value='";echo $mob; echo"' name='mob' required>
	
  
    <label for='tindate'><b>Date</b></label>
	<input type='text' value="; $d=date('Y-m-d'); echo $d; echo" name='tindate' required>
	
	<label for='tin'><b>Tin Number</b></label>
	<input type='text' name='tin' placeholder='Tin Number'required>
	
	 <label for='tinwgt'><b>Tin Weight</b></label>
	<input type='text' placeholder='Tin Weight' name='tinwgt' required>
	
	 <label for='tinamwgt'><b>Ammonium Weight</b></label>
	<input type='text' placeholder='Ammonium Weight' name='tinamwgt' required>
   


    <button type='submit' name='submit' class='btn'>Submit</button>
  
  </form>";
	   
	
	extract($_POST);
	
	if(isset($_POST["submit"]))
	{
	 
	
	
		  $sql3="insert into latex (tinno,date,tinwht,amowht,mob) values ('$tin','$tindate','$tinwgt','$tinamwgt','$mob')"; 
		 $res3=mysqli_query($con,$sql3) or die(mysqli_error($con));
		 $sql2="select tinw from inform where mob='$mob'"; 
		 $res2=mysqli_query($con,$sql2) or die(mysqli_error($con));
		$r2=mysqli_fetch_array($res2);
		$t=$r2[0]-1;
		$sql1="update inform set tinw='$t' where mob='$mob'";
		  $res1=mysqli_query($con,$sql1);
		if($r['tinw']==0)
		{
			echo "<script>alert('successfully update all tins');history.go(-2);</script>";
		}
		else
		{
			echo "<script>window.location='admnstatusissue.php?mob=".$r['mob']."'</script>";
		}
	
	
	}}
	   
?>
 
  </div>
</div>
	   
	   
	   
	   </center>
	   
	   
	   <div class="right"><a class="button blue gradient" id="l" onclick="" href="admnstatus1.php">Show Table</a></div> 
	   
	   
        
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/img-27.jpg)"></div>
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
