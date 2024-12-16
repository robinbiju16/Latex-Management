<?php 
	session_start();
	if(isset($_POST["submit"]))
	{
	extract($_POST);
		require("db.php");
		$res=mysqli_query($con,"select * from login where mob='$mob1' and password='$psw1'");
if(mysqli_num_rows($res)>0)
{
$_SESSION['mobusr']=$mob1;
	header("location:admnedit1.php");
	}
	
else
{
	echo "<script>alert('invalid login');history.go(-1);</script>";
}
	}
	?>