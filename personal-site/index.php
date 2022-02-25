<?php 
	$siteData = file_get_contents('database.json');
	$data = json_decode($siteData, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>J. Negrete — Developer / Designer</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include('modules/header.php'); ?>

	<main>
		<?php 
			include('modules/about.php');
			include('modules/projects.php');
			include('modules/blog.php'); 
		?>

	</main>
	<?php include('modules/footer.php'); ?>
	
</body>
</html>