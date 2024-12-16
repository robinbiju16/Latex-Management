<?php
require("db.php");
$p1=$_POST["pcode"];
$sql="select * from product where pdtcode='$p1'";
$res=mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
if($_POST["qty"]<=$r['stock'])
{
$am=$_POST["qty"]*$r['price'];
echo $am;
}
else
{
	
	 $am="out of stock";
	echo $am;
}
?>