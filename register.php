<?php require_once 'core/init.php'; ?>
<form action="" method="post">
	<input type="text" name="nama">
	<input type="email" name="email">
	<input type="password" name="password">

	<input type="submit" name="submit" value="submit">
	<input type="reset" name="reset" value="reset">
</form>

<?php
	/*
	if (isset($_POST['submit'])) {
		$nama		=mysqli_real_escape_string($link, $_POST['nama']);
		$email		=mysqli_real_escape_string($link, $_POST['email']);
		$password	=mysqli_real_escape_string($link, (password_hash($_POST['password'], PASSWORD_DEFAULT)) );
		
		$query		="INSERT INTO users (id, nama, email, password) VALUES ('', '$nama', '$email', '$password')";
		
		$execute	=mysqli_query($link, $query);

		if (!$execute) {
			echo "gagal mendaftarkan user";
		}else{
			echo "berhasil mendaftarkan user";
		}
	}
	*/
?>