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

	<article>
		<p>Welcome to the Alpha-Net. WTF is the Alpha-Net you ask? This is where we host the work of our students (collectively known as Alpha-3) as they make the way through our flagship course, <a href="https://perpetual.education" target="_blank">Design for the Web</a>. We're sort of like <em>Bad News Bears</em> meets <em>The Social Network</em> but with less pazzazz. Our leader is this super legit dude we met on the internet named <a href="#derek">Derek</a> who's going to help us obliterate the job market without sacrificing our dignity. If you have any desire for a bright future, then please click all the links below.</p>
	</article>
	
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
			$fullBlurb = $student["blurb"];
			$bgColor = $student["bgColor"];
			$fgColor = $student["fgColor"];
			$derek = "";

			if ($student['name'] === 'sheriffderek') {
				$derek = 'id = derek';
			}

			if (!$linkContent) {
				$linkContent = 'Click here';
			}

			if (!$blurb) {
				$blurb = "$name's stuff";
			}

			if (strlen($blurb) > 72) {
				$blurb = substr($blurb, 0, 72) . '...';
			}

			echo 
			"<div class='card' style='background-color:$bgColor;border-color:$bgColor;' $derek>
				<div class='card__content'>
					<picture>
						<img src='images/$image' alt='Photo of student'>
					</picture>
						
					<div class='card__text'>
						<h2 class='card__text--name'>$name</h2>

						<p style='color:$fgColor;'>$blurb</p>
					</div>
				</div>
				<a style='color:$bgColor;background-color:$fgColor;' href=$link target='_blank'>$linkContent</a>
			</div>";
		}
	?>	

	</main>	
</body>
</html>