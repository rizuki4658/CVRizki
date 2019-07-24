<?php require_once 'core/init.php'; ?>


<?php require_once 'views/header.php'; ?>

<?php
$show_foto	= data_foto();
$rows		= mysqli_fetch_assoc($show_foto);
?>
<div class="container">
	<center>
		<p class="text"> INTRODUCE </p>	
	
		<div class="biodatanya">
			<div class="konten_fade">			
				<img src="<?php echo $rows['file_location']; ?>" class="img" alt="My-Pict">
			
				<p>
					Hai! I'm Rizki, a person who is always interested in challenges, always ready to face new things and  I never stop learning
				</p>
				<p>
					<i style="cursor: pointer;" class="choose"> please choose below! </i>
				</p>
				<br>
				<p class="result" style="display: none;">
					<a href="CV.php" class="btn btn-default" title="CV"> CURICULUM VITAE </a>
					<br> OR <br>
					<a href="letter.php" class="btn btn-default" title="APPLICATION LETTER"> APPLICATION LETTER </a> 
				</p>
			</div>
		</div>

	</center>
	
</div>	

<?php require_once 'views/footer.php'; ?>

<?php require_once 'views/animate/for_index.php'; ?>