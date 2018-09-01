<?php session_start();
	$user=$_POST['user'];
	$pwd=$_POST['pwd'];
	
	if($user=="chirag" && $pwd=="c"){
		$_SESSION['user']=$user;
		header("location:practical17iii.php");
	}else{
		header("location:practical17i.php?error=invalid data");
	} 
?>