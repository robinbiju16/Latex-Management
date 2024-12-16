<?php
session_start();
if(isset($_SESSION["pala_user"]))
{session_destroy();}
header("location:index.php");
?>