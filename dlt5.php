<?php 
		   require("db.php");
		   extract($_POST);

		$sql="delete from ordr where ordr_id='$ord'";
		   $res=mysqli_query($con,$sql);

	   header("location:admnorder.php");
		
		
		?>
