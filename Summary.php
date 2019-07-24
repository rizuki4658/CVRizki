<?php require_once 'core/init.php'; ?>


<?php require_once 'views/header.php'; ?>

<?php
	$show_summary		=info_summary();
	$rows				=mysqli_fetch_assoc($show_summary);

	if (isset($_POST['save_summary'])) {
		if (!empty(trim($_POST['summary'])) ){

			$array	=	$_POST['summary'];

			if (data_summary($array)) header('Location: Summary.php'); else $error='Failed To Update Summary';
		}else $error= "Failed to Add Summary!";
	}
?>

<div class="container">
	<center>
		<p class="text"> 
			 SUMMARY  
		</p>	
		
			<div class="form-cv">
				<center>
					<a href="#" class="btn btn-default"><span class="ti-comment-alt"></span> CV-SUMMARY</a>
				</center>
				<br>
				<hr>
				<div class="summary" style="width: 100%;">
					<center>
						<?php if (isset($_SESSION['email'])) { ?>
						<button class="btn btn-default" id="write_summary"><span class="ti-pencil"></span> Write</button>
						<?php } ?>
					</center>
					<form action="" method="post">
						<label class="label-control" for="summary"> Summary </label>
						<textarea name="summary" class="form-control address" id="summary" rows="10" disabled><?= $rows['summary']; ?></textarea>

						<div id="proses_summary" style="position: absolute; width: 100%; display: none;">
							<button type="submit" name="save_summary" id="save_summary" class="btn btn-default"><span class="ti-save"></span> SAVE </button>
								&nbsp;
							<button type="reset" name="cancel_summary" id="cancel_summary" class="btn btn-default"><span class="ti-close"></span> CANCEL </button>
						</div>
					</form>	
				</div>
			</div>
	</center>
	
</div>	

<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_input_cv.php'; ?>