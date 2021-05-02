<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= bloginfo('title') ?></title>
	<link rel="stylesheet" type="text/css" href="<?= DIR ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<?php wp_head() ?>
</head>
<body>

	<div class="transition">
		<div class="a"></div>
		<div class="b"></div>
	</div>

	<nav>
		<div class="container navbar">
			<a href="<?= get_home_url() ?>" class="home">Home</a>

			<?php wp_nav_menu() ?>
		</div>

		<div class="container burger" onclick="showMenu()">
			<i class="fas fa-bars"></i>
		</div>
	</nav>