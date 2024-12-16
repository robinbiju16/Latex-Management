<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- Page Title -->
	<title>Product Details</title>

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
	   
	   <div class="progress-bar blue"></div>
<div class="" id="">
<div style="margin-top:100px;
">
  <form action="" method="post" class="form-container" >
    <h1>Enter Product Details</h1>

    <label for="pdtcd"><b>Product Code</b></label>
    <input type="text" placeholder="Product Code" name="pdtcd" required>

    <label for="pdtname"><b>Product Name</b></label>
    <input type="text" placeholder="Product Name" name="pdtname" >

	<label for="pdtmnf"><b>Manufacturer</b></label>
    <input type="text" placeholder="Manufacturer Name" name="pdtmnf" required>
    
	<label for="pdtrs"><b>Price</b></label>
    <input type="text" placeholder="Product Price" name="pdtrs" required>
	
	<label for="pdtst"><b>Stock</b></label>
    <input type="text" placeholder="Enter Number of stock" name="pdtst" required>
	
	<button type="submit" name="submit" class="btn">Submit</button>
  
  </form>
  <?php if(isset($_POST["submit"])){
	extract($_POST);
	require("db.php");
	$sql="insert into product (pdtcode,name,mfatur,price,stock) values ('$pdtcd','$pdtname','$pdtmnf','$pdtrs','$pdtst')"; 
		 $res=mysqli_query($con,$sql) or die(mysqli_error($con));
}
	?>
  </div>
</div>
   <h3>Warning message</h3>
   <h5>(Limited Stock)</h5>
   <?php 
	require("db.php");
	 $sql="select * from product where stock<'50'"; 
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
		echo"</td><td>";
		echo"<a href='admnproduct1.php?pcod=".$r['pdtcode']."' class='btn' name='sub1'>";
			
              echo"Update</a>";
		echo"</td></tr>";
		$i=$i+1;
	}
	echo"</table>"	 
	
	   
	   ?>
	   
	   
	   
	   </center>
	   
         <div class="right"><a class="button blue gradient" id="l" onclick="" href="admnproducttable.php">Show Product Table</a></div> 
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/img-95.jpg)"></div>
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
