<?php require_once 'core/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>MY RESUME</title>
    <link href="views/assets/img/android-mail.png" rel="shortcut icon">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="views/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/assets/css/themify-icons.css">
</head>
<body>

	<div class="bungkus">
		<header>	
			<nav class="navigation">
				<div id="link_fisrt">
					<a href="index.php"><span class="ti-home"></span> HOME</a>
					<a href="letter.php"><span class="ti-file"></span> LETTER</a>
					<a href="CV.php"><span class="ti-agenda"></span> CV</a>
				</div>

				<div id="link_last">
				<?php if (isset($_SESSION['email'])) { ?>
						<a href="logout.php" class="link_last">LOGOUT <span class="ti-shift-right"></span></a>
				<?php }else{ ?>
						<a href="login.php" class="link_last">LOGIN <span class="ti-shift-left"></span></a>
				<?php } ?>
				</div>
			</nav>
		</header>
	</div>