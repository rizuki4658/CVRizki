<?php
////////////////////////////////// Education
	function data_education(){
		global $link;
		$query	="SELECT * FROM education ORDER BY id DESC";
		$result	=mysqli_query($link, $query);
		
		return $result; 
	}

	function data_edu_id($id){
		global $link;
		$query	="SELECT * FROM education WHERE id='$id'";
		$result	=mysqli_query($link, $query);
		
		return $result; 
	}

	function insert_edu($fields){
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
		$query 	= "INSERT INTO education (id, $cols) VALUES ('', $values)";
		//die($query);
		$result	= mysqli_query($link, $query);

		return $result;
	}

	function update_edu($fields, $id){
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
		$query 	= "UPDATE education SET $values WHERE id = $id";
		//die($query);
		$result	= mysqli_query($link, $query);
		return $result;
	}

	function delete_edu($id){
		global $link;
		$id 	=escape($id);
		$query 	= "DELETE FROM education WHERE id = '$id'";
		//die($query);
		$result	= mysqli_query($link, $query);
		return $result;
	}
////////////////////////////////// End Education

//////////////////////////// Skill
	function data_skill(){
		global $link;
		$query	="SELECT * FROM skill ORDER BY id DESC";
		$result	=mysqli_query($link, $query);
		
		return $result; 
	}

	function insert_skill($fields){
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
		$query 	= "INSERT INTO skill (id, $cols) VALUES ('', $values)";
		//die($query);
		$result	= mysqli_query($link, $query);

		return $result;
	}

	function data_skill_id($id){
		global $link;
		$query	="SELECT * FROM skill WHERE id='$id'";
		$result	=mysqli_query($link, $query);
		
		return $result; 
	}

	function delete_skill($id){
		global $link;
		$id 	=escape($id);
		$query 	= "DELETE FROM skill WHERE id = '$id'";
		//die($query);
		$result	= mysqli_query($link, $query);
		return $result;
	}
////////////////////////// End Skill


//////////////////////////// Project
	function data_project(){
		global $link;
		$query	="SELECT * FROM project ORDER BY id DESC";
		$result	=mysqli_query($link, $query);
		
		return $result; 
	}

	function insert_project($fields){
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
		$query 	= "INSERT INTO project (id, $cols) VALUES ('', $values)";
		//die($query);
		$result	= mysqli_query($link, $query);

		return $result;
	}

	function delete_project($id){
		global $link;
		$id 	=escape($id);
		$query 	= "DELETE FROM project WHERE id = '$id'";
		//die($query);
		$result	= mysqli_query($link, $query);
		return $result;
	}
////////////////////////// End Project


//////////////////////////////// Certificate
	function data_certificate(){
		global $link;
		$query	="SELECT * FROM certificate ORDER BY year DESC";
		$result	=mysqli_query($link, $query);
		
		return $result; 
	}

	function data_certificate_id($id){
		global $link;
		$query	="SELECT * FROM certificate WHERE id='$id'";
		$result	=mysqli_query($link, $query);
		
		return $result; 
	}

	function insert_certificate($fields){
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
		$query 	= "INSERT INTO certificate (id, $cols) VALUES ('', $values)";
		//die($query);
		$result	= mysqli_query($link, $query);

		return $result;
	}

	function update_certificate($fields, $id){
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
		$query 	= "UPDATE certificate SET $values WHERE id = $id";
		//die($query);
		$result	= mysqli_query($link, $query);
		return $result;
	}

	function delete_certificate($id){
		global $link;
		$id 	=escape($id);
		$query 	= "DELETE FROM certificate WHERE id = '$id'";
		//die($query);
		$result	= mysqli_query($link, $query);
		return $result;
	}
//////////////////////////////// End Certificate



/////////////////////////////////// Summary
	function data_summary($fields){
		global $link;
		$query	= "SELECT * FROM summary LIMIT 1";
		$result	= mysqli_query($link, $query);
		$rows	= mysqli_num_rows($result);
		if ($rows <= 0) {
			if ( insert_summary($fields) ) return true; else return false;
		}else{
			$array	= mysqli_fetch_assoc($result);
			$id		= $array['id'];
			if( update_summary($fields, $id) ) return true; else return false;
		}
	}

	function insert_summary($fields){
		global $link;
		
		$query 	= "INSERT INTO summary (id, summary) VALUES ('', '$fields')";
		//die($query);
		$result	= mysqli_query($link, $query);

		return $result;
	}

	function update_summary($fields, $id){
		global $link;
		
		$query 	= "UPDATE summary SET summary='$fields' WHERE id='$id'";
		//die($query);
		$result	= mysqli_query($link, $query);

		return $result;
	}

	function info_summary(){
		global $link;
		$query	="SELECT * FROM summary LIMIT 1";
		$result	=mysqli_query($link, $query);
		
		return $result; 
	}
///////////////////////////// end summary



?>