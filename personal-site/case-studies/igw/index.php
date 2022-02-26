<?php 

	$siteData = file_get_contents('../../database.json');
	$data = json_decode($siteData, true);

	$id = $data['caseStudies'][0]['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/icon.svg" type="image/svg+xml">
	<title>J. Negrete — Developer / Designer</title>
	<link rel="stylesheet" href="../../css/style.css">
</head>

<?php include('../../modules/header.php'); ?>