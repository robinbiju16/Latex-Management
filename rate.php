<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- Page Title -->
	<title>update rate</title>

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
<!-- Sidebar -->
<nav class="sidebar" data-sidebar-id="1">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <a href="#" class="logo"><svg width="37" height="30"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo-icon"></use></svg></a>
    <ul class="mainMenu margin-top-3">
     <li><a href="rate.php">Rate</a></li>
        
<li><a href="admnedit.php">Edit Profile</a></li>
        
<li><a href="admnstatus.php">Update Status</a></li>
<li><a href="admnproduct.php">Edit Products</a></li>
<li><a href="admnorder.php">orders</a></li>
 <li><a href="admnnotification.php">Notifications</a></li>
    </ul>
   
   
  </div>
</nav>

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
  <form action="rate.php" class="form-container" method="post" >
    <h1>Update Rate</h1>

    <?php 
	require("db.php");
	 $sql="select * from rate"; 
	 $res=mysqli_query($con,$sql) or die(mysqli_error($con));
		   
	$r=mysqli_fetch_array($res)
	?>

  
    <label for="r4"><b>RSS4 Rate</b></label>
	  <input type="text" placeholder=<?php echo $r['rss4']?> name="r4" required>

    <label for="r3"><b>RSS3 Rate</b></label>
    <input type="text" placeholder=<?php echo $r['rss3']?> name="r3" required>
    <label for="r2"><b>RSS2 Rate</b></label>
   <input type="text" placeholder=<?php echo $r['rss2']?> name="r2" required>
    <label for="lr"><b>Latex Rate</b></label>
    <input type="text" placeholder=<?php echo $r['latex']?> name="lr" required>



    <button type="submit" class="btn" name="submit">Submit</button>
  
  </form>
  
  
  
  
  <?php if(isset($_POST["submit"])){
	extract($_POST);
	 require("db.php");
		$_SESSION['rss4']=$r4;
	 
		  $sql="UPDATE rate set rss4='$r4',rss3='$r3',rss2='$r2',latex='$lr' where sino='1'"; 
		 $res=mysqli_query($con,$sql) or die(mysqli_error($con));
		 echo "<script>window.location='rate.php'</script>"; 
	 }
?>
  
  
  
  
  
  
  </div>
</div>

	   </center>
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
