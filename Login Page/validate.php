<?php
	$myemail = "jyotizannatul@gmail.com";
	$mypass = "12345";

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$rem = $_POST['remember'];
		if ($email == $myemail && $pass==$mypass){
			if(isset($_POST['remember'])){
				setcookie('email', $email, time()+60*60*7);				
				}
				session_start();
				$_SESSION['email']=$email;
				header("location: welcome.php");
			}
		else { echo "Email or Password is invalid.<br> click here to try again <a href='login.php'> try again </a>";}
	}else {
		header("location: login.php");
	}


?>