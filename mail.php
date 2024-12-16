<?php 

	extract($_POST);
	$to="palakkaran005@gmail.com";
	if(mail($to,$email,$comment))
	{
		echo "<script>alert('Message sent');history.go(-1);</script>";
	}
else{
	echo "<script>alert('Message Not sent');history.go(-1);</script>";
}

?>