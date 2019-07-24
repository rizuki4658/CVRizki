					<table class="table-bordered">
						<thead style="text-align: center;">
							<tr>
								<td class="td-bordered">No.</td>
								<td class="td-bordered">Job Title</td>
								<td class="td-bordered">Company</td>
								<td class="td-bordered">Date</td>
								<td class="td-bordered">Act</td>
							</tr>
						</thead>
						<tbody>


<?php
	$no 			=1; 
	$show_exp		=data_expe();
	$rows			=mysqli_num_rows($show_exp);
	if ($rows >0) {
		while($rows = mysqli_fetch_assoc($show_exp)){ 
?>
					
							<tr>
								<td class="td-bordered" style="text-align: center;"><?= $no; ?></td>
								<td class="td-bordered"><?= $rows['job_title']; ?></td>
								<td class="td-bordered"><?= $rows['company']; ?></td>
								<td class="td-bordered" style="text-align: center;"><?= $rows['start_m'].' '.$rows['start_t'].'-'.$rows['end_m'].' '.$rows['end_t']; ?></td>
								<td class="td-bordered" style="text-align: center;">
									<?php if (isset($_SESSION['email'])) { ?>
									<a href="Upd-Work.php?id=<?= $rows['id']; ?>" class="btn btn-default lebar" style="padding: 0px 0px;"><span class="ti-pencil"></span></a>
									<a href="Del-Work.php?id=<?= $rows['id']; ?>" class="btn btn-default lebar" style="padding: 0px 0px;"><span class="ti-trash"></span></a>
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