<?php 
		   require("db.php");
		   extract($_POST);

		$sql="delete from Purchase where tinno='$tin'";
		   $res=mysqli_query($con,$sql);

	   header("location:admnstatus2.php");
		
		
		?>
