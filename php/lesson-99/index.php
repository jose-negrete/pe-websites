<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Jose redesigns the AlphaNet">
	<meta property="og:image" content="https://www.peprojects.dev/alpha-3/jose/lesson-99/images/meta-img.png">
	<title>AlphaNet v3.0</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<header>
		<h1>Alpha 3</h1>
	</header>

	<main>

	<?php 
		$studentData = file_get_contents('students.json');
		$students = json_decode($studentData, true);

		shuffle($students);

		foreach ($students as $student) {
			$name = $student["name"];
			$blurb = $student["blurb"];
			$link = $student["link"];
			$linkContent = $student["linkContent"];
			$image = $student["image"];

			if (!$linkContent) {
				$linkContent = 'Click here';
			}

			if (!$blurb) {
				$blurb = "$name's stuff";
			}

			$fullBlurb = $blurb;

			if (strlen($blurb) > 72) {
				
				$blurb = substr($blurb, 0, 72) . '...';
			}


			echo 
			"<div class='card'>
				<picture>
					<img src='images/$image' alt='Photo of student'>
				</picture>

				<h2>$name</h2>

				<p>$blurb</p>

				<a href=$link target='_blank'>$linkContent</a>
			</div>";
		}
	?>	

	</main>	
</body>
</html>