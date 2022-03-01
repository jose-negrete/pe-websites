<!-- GET PHP -->

<?php 
	include('car-data.php'); 
	require('functions.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		body {
			background-color: <?=$page?>;
		}
	</style>

</head>

<header>
	<?php include('nav.php'); ?>
</header>

<body>
	
	<p>This is the <?=$page?> page.</p>

	<div class="shadow"></div>

	<?php getTemplate($page); ?>

</body>
</html>