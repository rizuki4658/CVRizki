<?php require_once 'core/init.php'; ?>


<?php require_once 'views/header.php'; ?>

<?php
	$error='';
	if (isset($_POST['login'])) {
		$_SESSION['token']=$_POST['token'];
		if (isset($_POST['token'])) {
			if ($_POST['token']===$_SESSION['token']) {
				$email		=$_POST['email'];
				$password	=$_POST['password'];
				if (!empty(trim($email)) && !empty(trim($password)) ) {
					if(cek_user($email, $password)) redirect_login($email); else $error='Email and Password is not Valid !';
				}
			}	
		}
	}


	/*if (isset($_POST['login'])) {
		
	}*/

?>

<div class="container">
	<center>
		<div class="biodatanya">
			
			<form action="" method="POST">
				
				<p class="text"  style="font-size: 45px;"> <span class="ti-lock"></span></p><br>
				
				<p>
					<input type="hidden" name="token" class="form-control" value="<?= md5(uniqid(rand(), true) )?>">
					<input type="email" name="email" class="form-control" placeholder="email" required="">
					<br>
					<input type="password" name="password" class="form-control" placeholder="password" required="">
				</p>
				<?php if ($error !='') { ?>
				
					<div id="error" style="color: red;">
						<?php echo $error; ?>
					</div>

				<?php } ?>
				<br>
				
				<button type="submit" class="btn btn-light" title="LOGIN" name="login"><span class="ti-unlock"></span> LOGIN </button>

			</form>

		</div>

	</center>
	
</div>	

<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_index.php'; ?>