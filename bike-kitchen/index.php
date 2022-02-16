<?php
	$siteData = file_get_contents('database.json');
	$data = json_decode($siteData, true);



	if (isset($_GET['page'])){
		$page = $_GET['page'];
	} 

	else {
		$page = 'home';
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$page?> — San Francisco Bike Kitchen</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	This is the <?=$page?> page.
	<!-- header -->
	<?php include('pages/header.php');?>

	<!-- main -->
	<main>
		<div class="inner-column">
			<?php
				if ($page){
					include("pages/" . $page . ".php");
				}
			?>
		</div>
	</main>


	<!-- footer -->
	
</body>
</html>