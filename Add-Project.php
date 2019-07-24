<?php require_once 'core/init.php'; ?>

<?php require_once 'views/header.php'; ?>				


<?php
	$error='';
	if (isset($_POST['save_project'])) {
		if (!empty(trim($_POST['project_name'])) && !empty(trim($_POST['project_link'])) ){

			$array	=	[
							'project_name' 	=> $_POST['project_name'],
							'project_link' 	=> $_POST['project_link']
						];
			if (insert_project($array)) header('Location: Project.php'); else $error='Failed To Add Project';
		}else $error= "All input Must Be Fill!";
	}
?>

	<div class="container">
		<center>
			<p class="text"> 
				 ADD PROJECT  
			</p>

			<div class="form-cv">
				<center>
					<a href="Project.php" class="btn btn-default"><span class="ti-rule-pencil"></span> CV-PROJECT</a>
				</center>
				<br>
				<hr>

				<div class="project" style="width: 100%;">
					
					<div id="form_project" style="width: 100%;">
						<form action="" method="post">
							<div class="label-control"> <label for="project_name"> Project Name </label> </div>
							<input type="text" name="project_name" id="project_name" class="form-control" required="">

							<div class="label-control"> <label for="project_name"> Add Link to Project </label> </div>
							<input type="text" name="project_link" id="project_link" class="form-control" required="">

							<button type="submit" name="save_project" class="btn btn-default"><span class="ti-save"></span> SAVE </button>
							&nbsp;
							<button type="reset" name="cancel_project" class="btn btn-default"><span class="ti-close"></span> CANCEL </button>
						</form>
					</div>						
				
				</div>
			</div>
		</center>
	</div>



<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_input_cv.php'; ?>