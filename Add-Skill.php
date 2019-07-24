<?php require_once 'core/init.php'; ?>

<?php require_once 'views/header.php'; ?>				


<?php
	$error='';
	if (isset($_POST['save_skill'])) {
		if (!empty(trim($_POST['skills_name'])) && !empty(trim($_POST['skills_level'])) ){

			$array	=	[
							'skill_name' 	=> $_POST['skills_name'],
							'skill_level' 	=> $_POST['skills_level']
						];
			if (insert_skill($array)) header('Location: Skills.php'); else $error='Failed To Add Skill';
		}else $error= "All input Must Be Fill!";
	}
?>

	<div class="container">
		<center>
			<p class="text"> 
				 ADD SKILL  
			</p>

			<div class="form-cv">
				<center>
					<a href="Skills.php" class="btn btn-default"><span class="ti-heart"></span> CV-SKILLS</a>
				</center>
				<br>
				<hr>

				<div class="skills" style="width: 100%;">
					<div id="form_skill" style="width: 100%;">
						<form action="" method="post">
							<div class="label-control"> <label for="skills"> Skill Name </label> </div>
							<input type="text" name="skills_name" class="form-control">	
							
							<div class="label-control"> <label for="skills"> Skill Level </label> </div>
								<select name="skills_level" class="form-control">
									<option>Novice</option>
									<option>Basic</option>
									<option>Intermediate</option>
									<option>Advanced</option>
									<option>Expert</option>
								</select>

							<button type="submit" name="save_skill" class="btn btn-default"><span class="ti-save"></span> SAVE </button>
							&nbsp;
							<button type="reset" name="cancel_skill" class="btn btn-default"><span class="ti-close"></span> CANCEL </button>

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