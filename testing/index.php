<!-- GET PHP -->

<?php include('car-data.php'); ?>

	<?php
		

		// difference between 'empty' and 'isset'

		// empty: asking is $color empty? True.

		//isset: asking is $color

		// This is the router 

		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 'cyan';
		}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			background-color: <?=$page?>;
		}
	</style>

</head>

<body>
	<?php var_dump($_GET)?>

	<nav class='site-menu'>
		<a href='?page=pink'>Pink</a>
		<a href='?page=lime'>Lime</a>
		<a href='?page=list'>List</a>
	</nav>

	<p>This is the <?=$page?> page.</p>

	<?php 
		if ($page == 'pink'){
			include('pink.php');
		}
		if ($page == 'lime') {
			include('lime.php');
		}
		if ($page == 'list'){
			include('list.php');
		}
		if ($page == 'detail'){
			include('detail.php');
		}

	?>
</body>
</html>