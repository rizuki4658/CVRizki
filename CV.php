<?php require_once 'core/init.php'; ?>


<?php require_once 'views/header.php'; ?>


<div class="container">
	<center>
		<p class="text"> CURICULUM VITAE </p>	
	
		<div class="curiculum">
			<div class="konten_fade">
				
				<center>
					<a href="Personal-Info.php" class="btn btn-default" id="btn_info"><span class="ti-user"></span> PERSONAL INFO</a>
					<a href="Work-Experience.php" class="btn btn-default" id="btn_exp"><span class="ti-direction-alt"></span> WORK EXPERIENCE</a>
					<a href="Education.php" class="btn btn-default" id="btn_edu"><span class="ti-crown"></span> EDUCATION</a>
					<a href="Skills.php" class="btn btn-default" id="btn_skill"><span class="ti-heart"></span> SKILLS</a>
					<a href="Project.php" class="btn btn-default" id="btn_project"><span class="ti-ruler-pencil"></span> PROJECT</a>
					<a href="Certificate.php" class="btn btn-default" id="btn_certificate"><span class="ti-medall"></span> CERTIFICATION & LICENCES</a>
					<a href="Summary.php" class="btn btn-default" id="btn_summary"><span class="ti-comment-alt"></span> SUMMARY</a>
				</center>
				
				
				<iframe src="CV-pdf.php"></iframe>
			</div>
		</div>

	</center>
	
</div>	

<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_cv.php'; ?>

