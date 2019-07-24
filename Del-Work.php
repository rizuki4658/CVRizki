<?php require_once 'core/init.php'; ?>
<?php
	if (isset($_GET['id'])) {
		if (delete_work($_GET['id'])) header('Location: Work-Experience.php'); else header('Location: Work-Experience.php');
	}	
?>