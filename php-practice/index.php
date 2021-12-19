<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Practice</title>

	<style>
		body {
			background-color: seashell;
			margin: 50px 50px;
		}

		h1 {
			font-size: 42px;
			color: saddlebrown;
		}

		p {
			font-size: 32px;
			color: sienna;
		}

		strong {
			text-transform: uppercase;
			color: darkgreen;
		}

	</style>

</head>
<body>

	<h1>PHP Practice</h1>

	<?php 
		$name = 'Jose';
		$city = 'Portland';
		$today = date("m/d");
		$christmas = '12/25';
		$days = 25 - date('d');

		echo '<p>My name is ' . $name . ' and I live in ' . $city . '.</p>';

		if ($today === $christmas) {
			echo '<p>Today is Christmas</p>';
		} elseif ($today > $christmas) {
			echo '<p>Any resolutions?</>';
		} else {
			echo '<p>Today is ' . $today . '. There are <strong>' . $days . ' days</strong> til Christmas.</p>';
		}
	?>
	
</body>
</html>