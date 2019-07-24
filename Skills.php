<?php require_once 'core/init.php'; ?>


<?php require_once 'views/header.php'; ?>


<div class="container">
	<center>
		<p class="text"> 
			 SKILLS  
		</p>	
		
			<div class="form-cv">
				<center>
					<a href="#" class="btn btn-default"><span class="ti-heart"></span> CV-SKILLS</a>
					<?php if (isset($_SESSION['email'])) { ?>
					<a href="Add-Skill.php" class="btn btn-default lebar" ><span class="ti-plus"></span></a>
					<?php } ?>
				</center>
				<br>
				<hr>
				<div class="skill" style="width: 100%;">
					<?php require_once 'template/input/Skills/table.php'; ?>
				</div>
			</div>
	</center>
	
</div>	

<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_input_cv.php'; ?>