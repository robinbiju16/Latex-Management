<?php 

	extract($_POST);
		require("db.php");
		$orid=$_GET['orid'];
		$sql="select * from ordr where ordr_id='$orid'";
		$res=mysqli_query($con,$sql);
		$r=mysqli_fetch_array($res);
		$mob=$r['mob'];

if($usrtype==0)
{
		$sql1="update ordr set status='0' where ordr_id='$orid'";
		$res1=mysqli_query($con,$sql1);
	$sql2="insert into msg (mob,mes,dat) values ('$mob','Successfully Register your order',now())";
	$res2=mysqli_query($con,$sql2);
	
}
elseif($usrtype==1)
{
	$sql1="update ordr set status='1' where ordr_id='$orid'";
		$res1=mysqli_query($con,$sql1);
	
	$sql2="insert into msg (mob,mes,dat) values ('$mob','Your order is in processing.. Deliver Shortly',now())";
	$res2=mysqli_query($con,$sql2);

}
else
{
	$sql1="update ordr set status='2' where ordr_id='$orid'";
		$res1=mysqli_query($con,$sql1);
	$sql2="insert into msg (mob,mes,dat) values ('$mob','Successfully Delivered your order',now())";
	$res2=mysqli_query($con,$sql2);
}
	
			header("location:admnorder.php");

?>