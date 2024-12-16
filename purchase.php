<?php 
session_start();
		   if(isset($_POST['submit3']))
	{
		 
		require("db.php");
		extract($_POST);   
	 $tin=$_SESSION['tin1'];
		
		   $re=mysqli_query($con,"select * from latex where tinno='$tin'") or die(mysqli_error($con));
		   $ree=mysqli_fetch_array($re) or die(mysqli_error($con));
		  $lawgt=$tinwgt-($ree['amowht']+$ree['tinwht']);
	
		   $drcofrbr=$lawgt*$ladrc/100;
			$r=mysqli_query($con,"select rss4 from rate");
		   $rate=mysqli_fetch_array($r);
		   $totl=$drcofrbr*$rate[0];
			
		  $sql="insert into purchase (tinno,tinttlwht,whtofltx,drcofltx,drcofrbr,rtepkg,totl,status,dteofprch)values('$tin','$tinwgt','$lawgt','$ladrc','$drcofrbr','$rate[0]','$totl','0','$tindate1')"; 
		   
		 $res=mysqli_query($con,$sql) or die(mysqli_error($con));
		$p=$ree['mob'];
		$sql2="select tinp from inform where mob='$p'"; 
		 $res2=mysqli_query($con,$sql2) or die(mysqli_error($con));
		$r2=mysqli_fetch_array($res2);
		$t=$r2[0]-1;
		$sql1="update inform set tinp='$t' where mob='$p'";
		  $res1=mysqli_query($con,$sql1);
		$lat=mysqli_query($con,"update latex set status='1' where tinno='$tin'") or die(mysqli_error($con));
	
		  
	
	echo "<script>alert('valid updation');window.location='admnnotification.php';</script>";
	}
?>
 