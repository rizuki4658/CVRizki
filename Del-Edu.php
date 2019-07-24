<?php require_once 'core/init.php'; ?>
<?php
	if (isset($_GET['id'])) {
		if (delete_edu($_GET['id'])) header('Location: Education.php'); else header('Location: Education.php');
	}	
?>