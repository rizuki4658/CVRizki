<?php require_once 'core/init.php'; ?>


<?php require_once 'views/header.php'; ?>

<?php
	$pesan		='';
	$value		=tampilkan();
	$id='';
	$ip1='';
	$ip2='';
	$ip3='';
	$ip4='';
	$ip5='';
	$ip6='';
	$ip7='';
	$ip8='';
	$ip9=''; 
	if (isset($_POST['save'])) {
		$array				=[
								'nama' 				=> $_POST['name'],
								'present_address'	=> $_POST['address'],
								'phone'				=> $_POST['phone'],
								'email'				=> $_POST['email'],
								'day'				=> $_POST['date'],
								'company_name'		=> $_POST['company_name'],
								'company_address'	=> $_POST['company_address'],
								'hr_name'			=> $_POST['hr_name'],
								'description'		=> $_POST['description']
							];
		cek_letter($array, $_POST['id']);
		header('Location: letter.php');
	}else{
		while ($rows = mysqli_fetch_assoc($value) ) {
			$id		=$rows['id'];
			$ip1	=$rows['nama'];
			$ip2	=$rows['present_address'];
			$ip3	=$rows['phone'];
			$ip4	=$rows['email'];
			$ip5	=$rows['day'];
			$ip6	=$rows['company_name'];
			$ip7	=$rows['company_address'];
			$ip8	=$rows['hr_name'];
			$ip9	=$rows['description'];
		}
	}
?>

<div class="container">
	<center>
		<p class="text"> 
			INPUT APPLICATION LETTER  
		</p>	
		
		<form action="" method="post">
			<div class="form-letter">
				<?php if ($pesan != '') { ?>
				<div id="error">
					<?= $pesan; ?>
				</div>
				<?php	} ?>
				<input type="hidden" name="id" value="<?= $id; ?>">
				<label class="label-control" for="name"> Name </label>
				<input type="text" name="name" class="form-control" id="name" minlength="4" maxlength="50" required value="<?= $ip1; ?>">
				
				<label class="label-control" for="address"> Present Address </label>
				<textarea name="address" class="form-control address" id="address" rows="2" minlength="5" maxlength="100"  required><?= $ip2; ?></textarea> 

				<label class="label-control" for="phone"> Phone </label>
				<input type="number" name="phone" class="form-control" id="phone" required value="<?= $ip3; ?>">

				<label class="label-control" for="email"> Email :</label>
				<input type="email" name="email" class="form-control" id="email" required value="<?= $ip4; ?>">

				<label class="label-control" for="name"> Date </label>
				<input type="Date" name="date" class="form-control" id="date" required value="<?= $ip5; ?>">

				<label class="label-control" for="company_name"> Company Name </label>
				<input type="text" name="company_name" class="form-control" id="company_name" required value="<?= $ip6; ?>">

				<label class="label-control" for="company_address"> Company Address </label>
				<textarea name="company_address" class="form-control address" id="company_address" rows="2" required><?= $ip7; ?></textarea>

				<label class="label-control" for="hr_name"> HR Name </label>
				<input type="text" name="hr_name" class="form-control" id="hr_name" value="<?= $ip8; ?>">
				
				<label class="label-control" for="description"> Description </label>
				<textarea name="description" class="form-control address" id="description" rows="30" required><?= $ip9; ?></textarea>

					<button type="submit" name="save" id="save" class="btn btn-default"><span class="ti-save"></span> SAVE </button>
					&nbsp;
					<button type="reset" name="cancel" id="cancel" class="btn btn-default"><span class="ti-close"></span> CANCEL </button> 
				
			</div>
		</form>
	</center>
	
</div>	

<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_input_letter.php'; ?>