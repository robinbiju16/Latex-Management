<!doctype html>
<?php session_start();?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- Page Title -->
	<title>Tin purchase Status</title>

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
<?php include("admn.php")?><!-- Slide 2 (#34) -->
<section class="slide fade-6 kenBurns" data-name="">
  <div class="content">
    <div class="container">
      <div class="wrap">
          
       
	   
	   <center>
	   
	   <div class="progress-bar blue"></div>
<div class="" id="">
<div style="margin-top:100px;
">



<form action='' method='post'>
  <?php
	
	$mob=$_GET['mob'];
	require("db.php");
	$sql1="select * from latex where mob='$mob' and status=0";
	$res=mysqli_query($con,$sql1);
	if(mysqli_num_rows($res)<=0)
	{
		echo "<script>alert('donot exist tin');</script>";
	}
	
	?>
  <label for='tin2'><b>Tin Number</b></label>
  <select name="tin2" size="1">
   <option selected></option>
    <?php while($r=mysqli_fetch_array($res))
{
	echo"<option>";echo $r['tinno'];echo"</option>";
}?>
  </select>
  <input name='submit2' type="submit" value='submit'/>
</form>
<table><tr><td width='194'>
<?php
	if(isset($_POST['submit2']))
	{
		require("db.php");
		extract($_POST);
   $sql="select * from latex where tinno='$tin2'";
	 $res=mysqli_query($con,$sql) or die(mysqli_error($con));
	if(mysqli_num_rows($res)>0)
	{
		 $r=mysqli_fetch_array($res);
	}
	else
	{
		echo "<script>alert('donot exist tin');</script>";
	}
	
	$_SESSION["tin1"]=$r['tinno'];
	
		
		
		
		
		
		
		
		echo"<form  class='form-container' method='post' >
			<h1>Details of Tin</h1>

		   <label for='mob'><b>Mobile NO: of planter</b></label>
			<input type='text' value='"; $p=$r['mob']; echo $p;  echo"' name='mob' disabled>

			<label for='tin'><b>Tin Number</b></label>
			<input type='text' value="; echo $r['tinno']; echo" placeholder='Tin Number'disabled>


			<label for='tindate'><b>Date</b></label>
			<input type='text' value="; echo $r['date']; echo" name='tindate' disabled>

			 <label for='tinwgt'><b>Tin Weight</b></label>
			<input type='text' value='"; echo $r['tinwht']; echo"'name='tinwgt' disabled>

			 <label for='tinamwgt'><b>Ammonium Weight</b></label>
			<input type='text' value="; echo $r['amowht']; echo" name='tinamwgt' disabled>





		  </form>
</td>
 <td width='415'>
  <form class='form-container' action='purchase.php' method='post'>
    <h1>Enter the Tin Details</h1>

   
  
    <label for='tindate1'><b>Date</b></label>
	<input type='text' value='"; $d=date('Y-m-d'); echo $d; echo"' name='tindate1' required>
	
	 <label for='tinwgt'><b>Weight of tin</b></label>
	<input type='text' placeholder='Weight of Tin' name='tinwgt' required>
	
	 <label for='ladrc'><b>DRC of latex</b></label>
	<input type='text' placeholder='DRC of latex' name='ladrc' required>
   


    <button type='submit' name='submit3' value='submit' class='btn'>Submit</button>
  
  </form>";
  }	?>
  </td> </tr>
  </table>
  
  </div>
</div>
	   
	   
	   
	   </center>
	   
	   
	   <div class="right"><a class="button blue gradient" id="l" onclick="" href="admnstatus2.php">Show Table</a></div> 
	   
	   
        
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
	