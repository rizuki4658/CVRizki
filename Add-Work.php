<?php require_once 'core/init.php'; ?>

<?php require_once 'views/header.php'; ?>

<?php
	$error='';
	if (isset($_POST['save_work_ex'])) {
		if (!empty(trim($_POST['job_title'])) && !empty(trim($_POST['company'])) && !empty(trim($_POST['from_M'])) && !empty(trim($_POST['from_T'])) && !empty(trim($_POST['to_M'])) && !empty(trim($_POST['to_T'])) ){

			$array	=	[
							'job_title' 	=> $_POST['job_title'],
							'company' 		=> $_POST['company'],
							'start_m' 		=> $_POST['from_M'],
							'start_t' 		=> $_POST['from_T'],
							'end_m' 		=> $_POST['to_M'],
							'end_t' 		=> $_POST['to_T'],
							'description' 	=> $_POST['description']
						];
			if (insert_work($array)) header('Location: Work-Experience.php'); else $error='Failed To Add Work Experience';
		}else $error= "Except Description, Must Be Fill!";
	}
?>
	<div class="container">
		<center>
			<p class="text"> 
				 ADD WORK EXPERIENCE  
			</p>

			<div class="form-cv">
				<center>
					<a href="Work-Experience.php" class="btn btn-default"><span class="ti-direction-alt"></span> CV-EXPERIENCE</a>
				</center>
				<br>
				<hr>
				
				<div id="form_work_ex" style="width: 100%;">
						<form action="" method="post">
						<div class="label-control"><label for="job_title"> Job Title </label></div>
						<input type="text" name="job_title" class="form-control" id="job_title" minlength="7" required>

						<div class="label-control"><label for="company"> Company </label></div>
						<input type="text" name="company" class="form-control" id="company" minlength="3" required>

						<div class="label-control from_to" style="width: 4%; margin-left: 2%; margin-top: 2%;"><label for="from_M"> From </label></div>
						<select name="from_M" class="form-control from_to" id="from_M" required style="display: inline-block; width: 15%;">
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
						<input type="number" name="from_T" class="form-control from_to" id="from_T" required style="display: inline-block; width: 15%; text-align: center;" placeholder="year" min="1995" max="2019">

						<div class="label-control from_to" style="width: 3%; margin-left: 5%; margin-top: 2%;"><label for="to_M"> To </label></div>
						<select name="to_M" class="form-control from_to" id="to_M" style="display: inline-block; width: 15%;">
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
						<input type="number" name="to_T" class="form-control from_to" id="to_T" style="display: inline-block; width: 15%; text-align: center;" placeholder="year" min="2009" max="2019">

						<label class="label-control" for="description"> Description </label>
						<textarea name="description" class="form-control address" id="description" rows="3"></textarea>

						<button type="submit" name="save_work_ex" class="btn btn-default"><span class="ti-save"></span> SAVE </button>
						&nbsp;
						<button type="reset" name="cancel_work_ex" class="btn btn-default"><span class="ti-close"></span> CANCEL </button>

						<?php if($error !=''){ ?>
						<div id="error">
							<?= $error; ?>
						</div>
						<?php } ?>
					</form>
				</div>
			</div>
		</center>
	</div>


<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_input_cv.php'; ?>