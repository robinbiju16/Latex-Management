<?php 
session_start();
 require("db.php"); 
extract($_POST);
$res=mysqli_query($con,"select * from login where mob='$mob' and password='$psw'");
if(mysqli_num_rows($res)>0)
{
	$data=mysqli_fetch_array($res);
	$_SESSION["pala_user"]=$mob;
	$_SESSION["pala_utype"]=$data["usrtype"];
	if($data["usrtype"]==0)
	{
	header("location:admin.php");
	}
	else
	{
		header("location:planter.php");
	}
}
else
{
	echo "<script>alert('invalid login');history.go(-1);</script>";
}
?>