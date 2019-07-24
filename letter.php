<?php require_once 'core/init.php'; ?>


<?php require_once 'views/header.php'; ?>

<?php 
$rows	= array();
$result	= tampilkan();
$rows = mysqli_fetch_assoc($result);
?>
<div class="container">
	<center>
		<p class="text"> 
			APPLICATION LETTER  
		</p>	
		
			<form action="letter-print.php" method="post">
				<div class="letter">
					<div class="konten_fade">
						<?php if(isset($_SESSION['email'])){ ?>
							<a href="input-letter.php" class="btn btn-light" title="NEW OR EDIT"><span class="ti-pencil"></span></a>
							<button type="submit" class="btn btn-light" title="PRINT"><span class="ti-printer"></span></button>
						<?php } ?>
						<textarea class="input-letters" rows="14" readonly="" name="description"><?= $rows['nama']."\r\n"; ?><?= $rows['present_address']."\r\n";?><?= $rows['phone']."\r\n";?><?= $rows['email']."\r\n";?><?= "\r\n"."\r\n"."\r\n";?><?= date('M d, Y', strtotime($rows['day']))."\r\n";?><?= $rows['company_name']."\r\n"; ?><?= $rows['company_address']."\r\n"."\r\n"; ?><?= "Dear, Mr. ".$rows['hr_name']."\r\n"."\r\n"; ?><?= $rows['description']."\r\n"; ?><?= "\r\n"."\r\n"."\r\n"."\r\n";?><?= "Sincerely,"."\r\n"."\r\n"."\r\n";?><?= $rows['nama'];?></textarea>
					</div>
				</div>
			</form>
	</center>
	
</div>	

<?php require_once 'views/footer.php'; ?>


<?php require_once 'views/animate/for_letter.php'; ?>

