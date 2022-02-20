
<?php

	$siteData = file_get_contents('database.json');
	$data = json_decode($siteData, true);

	include('functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$page?></title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header>
		<?php include('header.php') ?>
	</header>

	<main>
		<?php 

			
			include('page.php'); 
			
			
		?>
	</main>

</body>
</html>