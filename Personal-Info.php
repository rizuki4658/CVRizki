<?php require_once 'core/init.php'; ?>


<?php require_once 'views/header.php'; ?>

<?php
	$show_img		=data_foto();
	$show_img		=mysqli_fetch_assoc($show_img);
	$show_personal	=data_info();
	$show_personal	=mysqli_fetch_assoc($show_personal);
	if (isset($_POST['UPLOAD'])) {
	 	$file 		= $_FILES['picture'];
	 	cek_gambar($file);
	 	$show_img		=data_foto();
	 	$show_img		=mysqli_fetch_assoc($show_img);
	}else if(isset($_POST['save_profil'])){
		$array	=	[
						'name' => $_POST['name'],
						'email' => $_POST['email'],
						'address' => $_POST['address'],
						'birthday' => $_POST['birth'],
						'gender' => $_POST['gender'],
						'phone' => $_POST['phone']
					];
		cek_personal($array);
		$show_personal	=data_info();
		$show_personal	=mysqli_fetch_assoc($show_personal);
	}else{

	}
?>
<div class="container">
	<center>
		<p class="text"> 
			 PROFIL  
		</p>	
		
			<div class="form-cv">
				<center>
					<a href="#" class="btn btn-default"><span class="ti-user"></span> CV-PERSONAL INFO</a>
				</center>
				<br>
				<hr>
				
				<?php require_once 'template/input/input-profil.php'; ?>
			</div>
	</center>
	
</div>	

<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_input_cv.php'; ?>

