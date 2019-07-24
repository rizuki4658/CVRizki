					<table class="table-bordered">
						<thead style="text-align: center;">
							<tr>
								<td class="td-bordered">No.</td>
								<td class="td-bordered">Title</td>
								<td class="td-bordered">Autority</td>
								<td class="td-bordered">Realesed</td>
								<td class="td-bordered">Act</td>
							</tr>
						</thead>
						<tbody>


<?php
	$no 				=1; 
	$show_certificate	=data_certificate();
	$rows				=mysqli_num_rows($show_certificate);
	if ($rows >0) {
		while($rows = mysqli_fetch_assoc($show_certificate)){ 
?>
					
							<tr>
								<td class="td-bordered" style="text-align: center;"><?= $no; ?></td>
								<td class="td-bordered"><?= $rows['title']; ?></td>
								<td class="td-bordered"><?= $rows['authority']; ?></td>
								<td class="td-bordered" style="text-align: center;"><?= $rows['month'].' '.$rows['year']; ?></td>
								<td class="td-bordered" style="text-align: center;">
									<?php if (isset($_SESSION['email'])) { ?>
									<a href="Upd-Certificate.php?id=<?= $rows['id']; ?>" class="btn btn-default lebar" style="padding: 0px 0px;"><span class="ti-pencil"></span></a>
									<a href="Del-Certificate.php?id=<?= $rows['id']; ?>" class="btn btn-default lebar" style="padding: 0px 0px;"><span class="ti-trash"></span></a>
									<?php } ?>
								</td>
							</tr>
		
<?php
			$no++;
		}
	}else{
		echo "";
	} 
?>

						</tbody>
					</table>