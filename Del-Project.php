<?php require_once 'core/init.php'; ?>
<?php
	if (isset($_GET['id'])) {
		if (delete_project($_GET['id'])) header('Location: Project.php'); else header('Location: Project.php');
	}	
?>