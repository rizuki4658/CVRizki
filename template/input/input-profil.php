				<div class="personal-info" style="width: 68%; ">
					<table>
						<tr>
							<td colspan="3" style="text-align: center;">
								<form enctype="multipart/form-data" action="" method="post">
									<img src="<?= $show_img['file_location']; ?>" class="imgs" alt="My-Pict" id="preview"><br>
									<?php if (isset($_SESSION['email'])) { ?>
									<input type="file" name="picture" id="picture" class="btn " onchange="tampilkanPreview(this,'preview')">
									<input type="submit" name="UPLOAD" value="UPLOAD" class="btn btn-light">
									<?php } ?>
								</form>
							</td>
						</tr>

						<tr><td colspan="3"></td></tr>
					

					<form action="" method="post">
					<!--
						<input type="hidden" name="id" id="id">
					-->
						<tr>
							<td> <label for="name"> Name </label> </td>
							<td> : </td>
							<td> <input type="text" name="name" id="name" class="form-controls" required="" value="<?= $show_personal['name'];?>" <?php if (!isset($_SESSION['email'])) { ?> disabled <?php } ?>> </td>
						</tr>
					
						<tr><td colspan="3"><br></td></tr>
					
						<tr>
							<td> <label for="email"> Email </label> </td>
							<td> : </td>
							<td> <input type="email" name="email" id="email" class="form-controls" required="" value="<?= $show_personal['email'];?>" <?php if (!isset($_SESSION['email'])) { ?> disabled <?php } ?>> </td>
						</tr>
					
						<tr><td colspan="3"><br></td></tr>
					
						<tr>
							<td> <label for="address"> Address </label> </td>
							<td> : </td>
							<td> <textarea name="address" id="address" class="form-controls address" required="" <?php if (!isset($_SESSION['email'])) { ?> disabled <?php } ?>><?= $show_personal['address'];?></textarea> </td>
						</tr>
					
						<tr><td colspan="3"><br></td></tr>
					
						<tr>
							<td> <label for="birth"> Birthday </label> </td>
							<td> : </td>
							<td> <input type="date" name="birth" id="birth" class="form-controls" required="" value="<?= $show_personal['birthday'];?>" <?php if (!isset($_SESSION['email'])) { ?> disabled <?php } ?>> </td>
						</tr>
					
						<tr><td colspan="3"><br></td></tr>
					
						<tr>
							<td> <label for="gender"> Gender </label> </td>
							<td> : </td>
							<td> 
								<select name="gender" id="gender" class="form-controls selector" required="" <?php if (!isset($_SESSION['email'])) { ?> disabled <?php } ?>>
									<option><?= $show_personal['gender'];?></option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</td>
						</tr>

						<tr><td colspan="3"><br></td></tr>
						
						<tr>
							<td> <label for="phone"> Phone </label> </td>
							<td> : </td>
							<td> <input type="number" name="phone" id="phone" class="form-controls" required="" value="<?= $show_personal['phone'];?>" <?php if (!isset($_SESSION['email'])) { ?> disabled <?php } ?>> 
							</td>
						</tr>
						
						<tr>
							<td colspan="3" style="text-align: center;">
								<?php if (isset($_SESSION['email'])) { ?>
								<button type="submit" name="save_profil" id="save_profil" class="btn btn-default"><span class="ti-save"></span> SAVE </button>
								&nbsp;
								<button type="reset" name="cancel_profil" id="cancel_profil" class="btn btn-default"><span class="ti-close"></span> CANCEL </button>
								<?php } ?>
							</td>
						</tr>
					</form>
					
					</table>	
																
				</div>