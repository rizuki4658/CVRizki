<?php
	function tampilkan()
	{
		global $link;
		$query	="SELECT * FROM letter ORDER BY id ASC LIMIT 100";
		$result	=mysqli_query($link, $query);
		
		return $result;

	}
	function cek_letter($fields, $id)
	{
		global $link;
		$query	="SELECT * FROM letter ORDER BY id ASC LIMIT 100";
		$result	=mysqli_query($link, $query);
		$rows	=mysqli_num_rows($result);
		$array  =mysqli_fetch_assoc($result);

		if ($rows <= 0) {
			if (insert_letter($fields)) return true; else return false;
		}else{
			if (update_letter($fields, $id)) return true; else return false;	
		}
		
	}

	function insert_letter($fields)
	{
		global $link;
		$column = implode(", ", array_keys($fields));

		//mengambil nilai
		$valuesArrays 	= array();
		$i 				= 0;

		foreach ($fields as $key=>$values) {
			if ( is_int($values) ) {
				$valuesArrays[$i] = escape($values);
			}else{
				$valuesArrays[$i] = "'" . escape($values) . "'";
			}
			$i++;
		}

		$values = implode(", ", $valuesArrays);

		$query 	= "INSERT INTO letter (id, $column) VALUES ('', $values)";
		//die($query);
		$result	= mysqli_query($link, $query);
	}

	function update_letter($fields, $id)
	{
		global $link;
		$valuesArrays 	= array();
		$i 				= 0;

		foreach ($fields as $key=>$values) {
			if ( is_int($values) ) {
				$valuesArrays[$i] = $key . "=". escape($values);
			}else{
				$valuesArrays[$i] = $key . "='" . escape($values) . "'";
			}
			$i++;
		}

		$values = implode(", ", $valuesArrays);

		$query = "UPDATE letter SET $values WHERE id = $id";
		
		$result	= mysqli_query($link, $query);
		return $result;	
	}

	function redirect_letter(){
		header('Location: letter.php');
	}

	function escape($name)
	{
		global $link;
		return mysqli_real_escape_string($link, $name);
	}
?>