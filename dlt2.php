<?php 
		   require("db.php");
		   extract($_POST);
		   $sql="delete from latex where tinno='$tin'";
		   $res=mysqli_query($con,$sql);
		

	   header("location:admnstatus1.php");
		
		
		?>
