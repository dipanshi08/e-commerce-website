<?php
   session_start();
   unset($_SESSION['userLogin']);
   //if(session_destroy()) {
	echo "<script>alert('Loggd Out');</script>";
	header('Location: login.php'); 
	die();

     	//header("Location: login.php");windows.location.href = login.php;
   //}
?>