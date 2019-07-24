<?php
////////////////////////////// Upload File //////////////////////////////
	function cek_gambar($file){
		global $link;
		$query	= "SELECT * FROM foto_profil LIMIT 10";
		$result	= mysqli_query($link, $query);
		$rows	= mysqli_num_rows($result);
		if ($rows <= 0) {
			if ( insert_img($file) ) return true; else return false;
		}else{
			$array	= mysqli_fetch_assoc($result);
			$id		= $array['id'];
			if( update_img($file, $id) ) return true; else return false;
		}
	}

	function insert_img($file){
		global $link;

		$foto 		=$file;
		
		$unik		=time();
        $nama_f		=$foto['name'];
        $lokasi		=$foto['tmp_name'];
        $error		=$foto['error'];
        $ukuran		=$foto['size'];
        $format		=$foto['type'];
        $nama_tujuan='views/assets/upload/'.$nama_f;
        if ($error == 0) {
        	if ($format == "image/jpg" || $format == "image/jpeg") {
        		if (file_exists($nama_tujuan)) {
        			$nama_tujuan = str_replace(".jpg", "", $nama_tujuan);
        			$nama_tujuan = $nama_tujuan."_".$unik.".jpg";
        			if ($ukuran<=1000000) {
        				$query 	 = "INSERT INTO foto_profil(id, file_location) VALUES('','$nama_tujuan')";
        				$result= mysqli_query($link, $query);
        				if($result) {
        					move_uploaded_file($lokasi, $nama_tujuan);
        				}else{
			        		$pesan = "Sorry! Uploading Has Been Failed.";
			        		gagal_upload($pesan);        					
        				}
        			}else{
			        	$pesan = "Sorry! File Size is Not Valid.";
			        	gagal_upload($pesan);
        			}
        		}else{
        			if ($ukuran<=1000000) {
        				$query 	 = "INSERT INTO foto_profil(id, file_location) VALUES('','$nama_tujuan')";
        				$result= mysqli_query($link, $query);
        				if ($result) {
        					move_uploaded_file($lokasi, $nama_tujuan);
        				}else{
			        		$pesan = "Sorry! Uploading Has Been Failed.";
			        		gagal_upload($pesan);        					
        				}
        			}else{
			        	$pesan = "Sorry! File Size is Not Valid.";
			        	gagal_upload($pesan);
        			}
        		}
        	}else{
        		$pesan = "Sorry! Format File Is Not Valid(Must! 'jpg or jpeg')";
        		gagal_upload($pesan);
        	}
        }else{
        	$pesan = "OOps! There's Something Problem When Uploading";
        	gagal_upload($pesan);
        }
	}
        	
	function update_img($file, $id){
		global $link;

		$foto 		=$file;
		
		$unik		=time();
        $nama_f		=$foto['name'];
        $lokasi		=$foto['tmp_name'];
        $error		=$foto['error'];
        $ukuran		=$foto['size'];
        $format		=$foto['type'];
        $nama_tujuan='views/assets/upload/'.$nama_f;
        if ($error == 0) {
        	if ($format == "image/jpg" || $format == "image/jpeg") {
        		if (file_exists($nama_tujuan)) {
        			$nama_tujuan = str_replace(".jpg", "", $nama_tujuan);
        			$nama_tujuan = $nama_tujuan."_".$unik.".jpg";
        			if ($ukuran<=1000000) {
        				$query 	 = "UPDATE foto_profil SET file_location='$nama_tujuan' WHERE id='$id'";
        				if ($result= mysqli_query($link, $query)) {
        					move_uploaded_file($lokasi, $nama_tujuan);
        				}else{
			        		$pesan = "Sorry! Uploading Has Been Failed.";
			        		gagal_upload($pesan);        					
        				}
        			}else{
			        	$pesan = "Sorry! File Size is Not Valid.";
			        	gagal_upload($pesan);
        			}
        		}else{
        			if ($ukuran<=1000000) {
        				$query 	 = "UPDATE foto_profil SET file_location='$nama_tujuan' WHERE id='$id'";
        				if ($result= mysqli_query($link, $query)) {
        					move_uploaded_file($lokasi, $nama_tujuan);
        				}else{
			        		$pesan = "Sorry! Uploading Has Been Failed.";
			        		gagal_upload($pesan);        					
        				}
        			}else{
			        	$pesan = "Sorry! File Size is Not Valid.";
			        	gagal_upload($pesan);
        			}
        		}
        	}else{
        		$pesan = "Sorry! Format File Is Not Valid(Must! 'jpg or jpeg')";
        		gagal_upload($pesan);
        	}
        }else{
        	$pesan = "OOps! There's Something Problem When Uploading";
        	gagal_upload($pesan);
        }
	}

	function gagal_upload($pesan){
		echo "<p class='text'><center>".$pesan."</center></p>";
		return $pesan;
	}
	
	function data_foto(){
		global $link;
		$query	="SELECT * FROM foto_profil ORDER BY id DESC LIMIT 1";
		$result	=mysqli_query($link, $query);
		
		return $result;
	}
/////////////////////////////// End Upload //////////////////////////////



//////////////////////////////// Personal Info //////////////////////////
	function data_info(){
		global $link;
		$query	="SELECT * FROM personal_info ORDER BY id DESC LIMIT 1";
		$result	=mysqli_query($link, $query);
		
		return $result;
	}

	function cek_personal($fields){
		global $link;
		$query	= "SELECT * FROM personal_info LIMIT 10";
		$result	= mysqli_query($link, $query);
		$rows	= mysqli_num_rows($result);
		if ($rows <= 0) {
			if ( insert_personal($fields) ) return true; else return false;
		}else{
			$array	= mysqli_fetch_assoc($result);
			$id		= $array['id'];
			if( update_personal($fields, $id) ) return true; else return false;
		}
	}

	function insert_personal($fields){
		global $link;
		$cols			= implode(", ", array_keys($fields));
		$valuesArray	= array();
		$i 				= 0;

		foreach ($fields as $key => $values) {
			if ( is_int($values) ) {
				$valuesArrays[$i] = escape($values);
			}else{
				$valuesArrays[$i] = "'" . escape($values) . "'";
			}
			$i++;
		}

		$values = implode(", ", $valuesArrays);
		$query 	= "INSERT INTO personal_info (id, $cols) VALUES ('', $values)";
		$result	= mysqli_query($link, $query);

		return $result;
	}

	function update_personal($fields, $id){
		global $link;
		$cols			= implode(", ", array_keys($fields));
		$valuesArray	= array();
		$i 				= 0;

		foreach ($fields as $key => $values) {
			if ( is_int($values) ) {
				$valuesArrays[$i] = $key . "=". escape($values);
			}else{
				$valuesArrays[$i] = $key . "='" . escape($values) . "'";
			}
			$i++;
		}

		$values = implode(", ", $valuesArrays);
		$query 	= "UPDATE personal_info SET $values WHERE id = $id";
		$result	= mysqli_query($link, $query);
		return $result;
	}
//////////////////////////////// End Personal /////////////////////////


/////////////////////////////// Experience ///////////////////////////

	function data_expe(){
		global $link;
		$query	="SELECT * FROM experience ORDER BY id ASC";
		$result	=mysqli_query($link, $query);
		
		return $result;
	}

	function data_expe_id($id){
		global $link;
		$query	="SELECT * FROM experience WHERE id='$id'";
		$result	=mysqli_query($link, $query);
		
		return $result;
	}

	function insert_work($fields){
		global $link;
		$cols			= implode(", ", array_keys($fields));
		$valuesArray	= array();
		$i 				= 0;

		foreach ($fields as $key => $values) {
			if ( is_int($values) ) {
				$valuesArrays[$i] = escape($values);
			}else{
				$valuesArrays[$i] = "'" . escape($values) . "'";
			}
			$i++;
		}

		$values = implode(", ", $valuesArrays);
		$query 	= "INSERT INTO experience (id, $cols) VALUES ('', $values)";
		//die($query);
		$result	= mysqli_query($link, $query);

		return $result;
	}

	function update_work($fields, $id){
		global $link;
		$cols			= implode(", ", array_keys($fields));
		$valuesArray	= array();
		$i 				= 0;

		foreach ($fields as $key => $values) {
			if ( is_int($values) ) {
				$valuesArrays[$i] = $key . "=". escape($values);
			}else{
				$valuesArrays[$i] = $key . "='" . escape($values) . "'";
			}
			$i++;
		}

		$values = implode(", ", $valuesArrays);
		$query 	= "UPDATE experience SET $values WHERE id = $id";
		//die($query);
		$result	= mysqli_query($link, $query);
		return $result;
	}
	function delete_work($id){
		global $link;
		$id 	=escape($id);
		$query 	= "DELETE FROM experience WHERE id = '$id'";
		//die($query);
		$result	= mysqli_query($link, $query);
		return $result;
	}
//////////////////////////////////// End Experience ///////////////
?>