<?php
$mob=$_GET['mob'];
require("db.php");
 
$i=0;

$sql="select * from inform where mob='$mob'";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
$r=mysqli_fetch_array($res);
$tinw=$r['tinw'];
$tinp=$r['tinp'];
while($i<$tinw)
{
header("location:admnstatusissue.php");	
}
?>