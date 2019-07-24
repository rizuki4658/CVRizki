<?php
	function cek_user($email, $password)
	{
		global $link;
		$email			=mysqli_real_escape_string($link, $email);
		$password		=mysqli_real_escape_string($link, $password);

		$query			="SELECT password FROM users WHERE email='$email'";
		$result			=mysqli_query($link, $query);
		$password_hash	=mysqli_fetch_assoc($result);

		if (password_verify($password, $password_hash['password'])) return true; else return false;
	}

	function redirect_login($email){
		$_SESSION['email']=$email;
		header('Location: index.php');
	}
?>