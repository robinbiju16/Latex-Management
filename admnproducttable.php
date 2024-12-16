<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- Page Title -->
	<title>Admin Product Table</title>

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
          
       
	   
	   
	   <center>
<h1> 
Status
</h1>

<?php 
	require("db.php");
	 $sql="select * from product"; 
	 $res=mysqli_query($con,$sql) or die(mysqli_error($con));
	 
echo"<table border='3' bordercolor='#FCFBFB'>";

echo"<tr>
<th height='30'>Si No:</th>
<th>Product Code</th><th>Product Name</th><th>Manufacturer</th><th>Price</th><th>Stock</th></tr>";
		   $i=1;
	while($r=mysqli_fetch_array($res))
	{
		echo"<tr><td>";
		echo $i;
		echo"</td><td>";
		echo $r['pdtcode'];
		echo"</td><td>";
		echo $r['name'];
		echo"</td><td>";
		echo $r['mfatur'];
		echo"</td><td>";
		echo $r['price'];
		echo"</td><td>";
		echo $r['stock'];
		echo"</td></tr>";
		$i=$i+1;
	}
	echo"</table>"	 
	
	   
	   ?>
	   
<div class="right"><a class="button red gradient" id="" onclick="openForm()">Delete</a></div>        
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


<div class="progress-bar blue"></div>
<div class="form-popup" id="myForm">
<div style="margin-top:100px; background-color: white;">
  <form action="dlt4.php" method="post" class="form-container" >
    <h1>Delete Any Record</h1>

    <label for="pdt"><b>Product Code</b></label>
    <input type="text" placeholder="Enter Product Code" name="pdt" required>
    <button type="submit" name="submit" class="btn">Delete</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
	  </div>
</div>

<script>
function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


</body>
</html>
