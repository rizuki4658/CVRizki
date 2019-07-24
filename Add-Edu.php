<?php require_once 'core/init.php'; ?>


<?php require_once 'views/header.php'; ?>

<?php
	$error='';
	if (isset($_POST['save_education'])) {
		if (!empty(trim($_POST['university'])) && !empty(trim($_POST['cluster'])) && !empty(trim($_POST['start_M'])) && !empty(trim($_POST['start_T'])) && !empty(trim($_POST['end_M'])) && !empty(trim($_POST['end_T'])) && !empty(trim($_POST['gpa'])) ){

			$array	=	[
							'university' 	=> $_POST['university'],
							'cluster' 		=> $_POST['cluster'],
							'start_m' 		=> $_POST['start_M'],
							'start_t' 		=> $_POST['start_T'],
							'end_m' 		=> $_POST['end_M'],
							'end_t' 		=> $_POST['end_T'],
							'gpa' 			=> $_POST['gpa']
						];
			if (insert_edu($array)) header('Location: Education.php'); else $error='Failed To Add Education';
		}else $error= "Failed to Add Education!";
	}
?>
<div class="container">
	<center>
		<p class="text"> 
			 EDUCATION  
		</p>


				<div class="form-cv">
					<center>
						<a href="Education.php" class="btn btn-default"><span class="ti-crown"></span> CV-EDUCATION</a>
					</center>
					<br>
					<hr>
					<div id="form_education" style="width: 100%;">
						<form action="" method="post">

						<div class="label-control"><label for="university"> University </label></div>
						<input type="text" name="university" class="form-control" id="university" minlength="7" required>

						<div class="label-control"><label for="cluster"> Course/Cluster/Degree </label></div>
						<input type="text" name="cluster" class="form-control" id="cluster" minlength="7" required>

						<div id="start_edu">
							<div class="label-control" style="width: 10%; margin-left: 5%; margin-top: 2%;"><label for="start_M"> Start Date </label></div>
							<select name="start_M" class="form-control start_edu" id="start_M" required style="display: inline-block; width: 15%;">
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
							<input type="number" name="start_T" class="form-control" id="start_T" required style="display: inline-block; width: 15%; text-align: center;" placeholder="year" min="1995" max="2019">

							<div class="label-control" style="width: 10%; margin-left: 5%; margin-top: 2%;"><label for="end_M"> End Date </label></div>
							<select name="end_M" class="form-control start_edu" id="end_M" required style="display: inline-block; width: 15%;">
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
							<input type="number" name="end_T" class="form-control" id="end_T" required style="display: inline-block; width: 15%; text-align: center;" placeholder="year" min="2009" max="2019">
						</div>
						<div class="label-control"><label for="gpa"> GPA </label></div>
						<input type="number" name="gpa" class="form-control" id="gpa" required placeholder="e.x 3.15" min="3" step="any">

						<button type="submit" name="save_education" class="btn btn-default"><span class="ti-save"></span> SAVE </button>
						&nbsp;
						<button type="reset" name="cancel_education" class="btn btn-default"><span class="ti-close"></span> CANCEL </button>

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