<?php require_once 'core/init.php'; ?>

<?php require_once 'views/header.php'; ?>				


<?php
	$error='';
	if (isset($_POST['save_certificate'])) {
		if (!empty(trim($_POST['certification_title'])) && !empty(trim($_POST['authority'])) && !empty(trim($_POST['month'])) && !empty(trim($_POST['year'])) ){

			$array	=	[
							'title' 	=> $_POST['certification_title'],
							'authority' => $_POST['authority'],
							'month'		=> $_POST['month'],
							'year'		=> $_POST['year']
						];
			if (insert_certificate($array)) header('Location: Certificate.php'); else $error='Failed To Add Certification';
		}else $error= "All Input Must Be Fill!";
	}
?>

	<div class="container">
		<center>
			<p class="text"> 
				 ADD CERTIFICATE  
			</p>

			<div class="form-cv">
				<center>
					<a href="Certificate.php" class="btn btn-default"><span class="ti-medall"></span> CV-CERTIFICATION & LICENCES</a>
				</center>
				<br>
				<hr>

				<div class="skills" style="width: 100%;">
					<div id="form_certificate" style="width: 100%;">
						<form action="" method="post">
							<div class="label-control"> <label for="certification_title"> Certification Title </label> </div>
							<input type="text" name="certification_title" id="certification_title" class="form-control" required="">

							<div class="label-control"> <label for="authority"> Certification Authority </label> </div>
							<input type="text" name="authority" id="authority" class="form-control" required="">

							<div class="label-control" style="display: block;"><label for="month"> Relased Date </label></div>
							<select name="month" class="form-control certification_month" id="month" required style="display: inline-block; width: 15%;">
								<option>Month</option>
								<option>Jan</option>
								<option>Feb</option>
								<option>Mar</option>
								<option>Apr</option>
								<option>May</option>
								<option>Jun</option>
								<option>Jul</option>
								<option>Aug</option>
								<option>Sept</option>
								<option>Oct</option>
								<option>Nov</option>
								<option>Dec</option>
							</select>
							<input type="number" name="year" class="form-control" id="year" required style="display: inline-block; width: 15%; text-align: center;" placeholder="year" min="1995" max="2019"><br>
							
							<button type="submit" name="save_certificate" class="btn btn-default"><span class="ti-save"></span> SAVE </button>
							&nbsp;
							<button type="reset" name="cancel_certificate" class="btn btn-default"><span class="ti-close"></span> CANCEL </button>

							<?php if($error !=''){ ?>
							<div id="error">
								<?= $error; ?>
							</div>
							<?php } ?>
						</form>
					</div>
				</div>
			</div>
		</center>
	</div>



<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_input_cv.php'; ?>