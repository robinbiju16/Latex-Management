<?php 
		   require("db.php");
		   extract($_POST);

		$sql="delete from product where pdtcode='$pdt'";
		   $res=mysqli_query($con,$sql);

	   header("location:admnproducttable.php");
		
		
		?>
