<?php require_once 'core/init.php'; ?>
<?php
	if (isset($_GET['id'])) {
		if (delete_skill($_GET['id'])) header('Location: Skills.php'); else header('Location: Skills.php');
	}	
?>