					<table class="table-bordered">
						<thead style="text-align: center;">
							<tr>
								<td class="td-bordered">No.</td>
								<td class="td-bordered">University</td>
								<td class="td-bordered">Cluster</td>
								<td class="td-bordered">Date</td>
								<td class="td-bordered">GPA</td>
								<td class="td-bordered">Act</td>
							</tr>
						</thead>
						<tbody>


<?php
	$no 			=1; 
	$show_edu		=data_education();
	$rows			=mysqli_num_rows($show_edu);
	if ($rows >0) {
		while($rows = mysqli_fetch_assoc($show_edu)){ 
?>
					
							<tr>
								<td class="td-bordered" style="text-align: center;"><?= $no; ?></td>
								<td class="td-bordered"><?= $rows['university']; ?></td>
								<td class="td-bordered"><?= $rows['cluster']; ?></td>
								<td class="td-bordered" style="text-align: center;"><?= $rows['start_m'].' '.$rows['start_t'].'-'.$rows['end_m'].' '.$rows['end_t']; ?></td>
								<td class="td-bordered"><?= $rows['gpa']; ?></td>
								<td class="td-bordered" style="text-align: center;">
									<?php if (isset($_SESSION['email'])) { ?>
									<a href="Upd-Edu.php?id=<?= $rows['id']; ?>" class="btn btn-default lebar" style="padding: 0px 0px;"><span class="ti-pencil"></span></a>
									<a href="Del-Edu.php?id=<?= $rows['id']; ?>" class="btn btn-default lebar" style="padding: 0px 0px;"><span class="ti-trash"></span></a>
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