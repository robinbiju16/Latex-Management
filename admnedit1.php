<!doctype html>
<?php session_start()?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- Page Title -->
	<title>Admin</title>

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
		 require("db.php");
		  $s=$_SESSION['mobusr'];
		  $sql="select Name,mob,paddr from user where mob='$s'";
		  $res=mysqli_query($con,$sql);
		  
		  
			  if(mysqli_num_rows($res)>0)
			  {
				  echo"<script>alert('accessing');</script>";
				  $r=mysqli_fetch_array($res);
			  }
			  else{
				  echo"<script>alert('invalid login1');history.go(-1);</script>";
			  }
		  
		  
		  ?>
	   
	   <form action="" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Edit profile</h1>
    <p>Please fill in this form to recreate an account.</p>
    <hr>
<table>
<tr>
 <td width="137" height="35">   <label for="name"><b>Name</b></label></td>
 <td width="274">   <input type="text" value=<?php echo$r['Name'] ?> name="name"></td>

</tr>
<tr>
<td height="32">    <label for="mob"><b>Mob</b></label></td>
 <td>   <input type="text" value=<?php echo$r['mob'] ?> pattern="[0-9]{10}" name="mob" required></td>
 
</tr>


<tr>
 <td height="82">   <label for="perad"><b>Permanent Address</b></label></td>
 <td>   <textarea rows="3"  name="perad" ><?php echo$r['paddr']?></textarea></td>
</tr>


<tr><td><label for="psw"><b>Password</b></label></td>
    <td><input type="password" placeholder="Enter Password" name="psw" required></td>
    
</tr>

</table>
<br>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">ok</button>
    </div>
  </div>
</form>
   <?php if(isset($_POST["submit"])){
	extract($_POST);
	 require("db.php");
	 $s=$_SESSION['mobusr'];
	
	$sql="update login set mob='$mob',usrtype='1',password='$psw' where mob='$s'"; 
		 $res=mysqli_query($con,$sql) or die(mysqli_error($con));
	 
		  $sql="UPDATE user set Name='$name',mob='$mob',paddr='$perad' where mob='$s'"; 
		 $res=mysqli_query($con,$sql) or die(mysqli_error($con));
	 echo"<script>alert('sucessfully completed');history.go(-3);</script>";
		  
	 }
?>
	   
	   
	   
	   
	   
        
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
