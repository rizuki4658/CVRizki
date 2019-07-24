					<table class="table-bordered">
						<thead style="text-align: center;">
							<tr>
								<td class="td-bordered">No.</td>
								<td class="td-bordered">Project Name</td>
								<td class="td-bordered">Project Link</td>
								<td class="td-bordered">Act</td>
							</tr>
						</thead>
						<tbody>


<?php
	$no 			=1; 
	$show_project	=data_project();
	$rows			=mysqli_num_rows($show_project);
	if ($rows >0) {
		while($rows = mysqli_fetch_assoc($show_project)){ 
?>
					
							<tr>
								<td class="td-bordered" style="text-align: center;"><?= $no; ?></td>
								<td class="td-bordered"><?= $rows['project_name']; ?></td>
								<td class="td-bordered"><a href="<?= $rows['project_link']; ?>"><?= $rows['project_name']; ?></a></td>
								<td class="td-bordered" style="text-align: center;">
									<?php if (isset($_SESSION['email'])) { ?>
									<a href="Del-Project.php?id=<?= $rows['id']; ?>" class="btn btn-default lebar" style="padding: 0px 0px;"><span class="ti-trash"></span> Delete</a>
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