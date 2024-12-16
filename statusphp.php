
 <?php
session_start();
if(isset($_POST["submit"])){
	require("db.php");
extract($_POST);
	$_SESSION['tin']=$tin;
   $c="select * from latex where tinno='$tin'";
 $res=mysqli_query($con,$c) or die(mysqli_error($con));
	$c1="select * from purchase where tinno='$tin'";
 $res1=mysqli_query($con,$c1) or die(mysqli_error($con));
	if("$usrtype"==0)
	{
		if(mysqli_num_rows($res)>0)
		{
		echo "<script>alert('Tin already exist');history.go(-1);</script>";	
		}
		else
		{
		header("location:admnstatusissue.php");	
		}
	}
	else
	{
		
		if(mysqli_num_rows($res1)>0)
		{
		echo "<script>alert('already updated');history.go(-1);</script>";	
		}
		else
		{
		header("location:admnstatuspurchase.php");	
		}
	}
}
?>


