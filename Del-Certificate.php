<?php require_once 'core/init.php'; ?>
<?php
	if (isset($_GET['id'])) {
		if (delete_certificate($_GET['id'])) header('Location: Certificate.php'); else header('Location: Certificate.php');
	}	
?>