<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lesson 95</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<header>
		<img class="logo" src="images/logo.svg">

		<nav>
			<a href="#">|||</a>
		</nav>
	</header>

	<section class="welcome">
		<div class="inner-column">
			<h1>Something to Guilt Trip them and Reel Them In</h1>
			<h2>Elaborate some more. Blah Blah yada yada.</h2>
		</div>
	</section>

	<?php
		
		$cody = [
			"id" => 1856,
			"name" => "Codey",
			"favoriteFood" => "Mountain Dew Code Red",
			"age" => 7,
			"adopted" => true,
			"image" => "images/codey.jpg"
		];

		$lima = [
			"id" => 1256,
			"name" => "Limabean",
			"favoriteFood" => "Lima beans",
			"age" => 4,
			"adopted" => false,
			"image" => "images/limabean.jpg"
		];

		$fragoo = [
			"id" => 1463,
			"name" => "Fragoo",
			"favoriteFood" => "Funyons",
			"age" => 2,
			"adopted" => false,
			"image" => "images/fragoo.jpg"
		];

		$readsalot = [
			"id" => 1733,
			"name" => "Miss Reads-a-lot",
			"favoriteFood" => "Ricola",
			"age" => 10,
			"adopted" => true,
			"image" => "images/miss-reads-a-lot.jpg"
		];

		$mrbanana = [
			"id" => 1298,
			"name" => "Mr. Banana",
			"favoriteFood" => "Bananas",
			"age" => 8,
			"adopted" => true,
			"image" => "images/mr-banana.jpg"
		];

		$orangina = [
			"id" => 1769,
			"name" => "Orangina",
			"favoriteFood" => "Cheetos",
			"age" => 3,
			"adopted" => false,
			"image" => "images/orangina.jpg"
		];

		$shadow = [
			"id" => 1145,
			"name" => "Shadow",
			"favoriteFood" => "Gushers",
			"age" => 4,
			"adopted" => false,
			"image" => "images/shadow.jpg"
		];

		$monsters = [$cody, $lima, $fragoo, $readsalot, $mrbanana, $orangina, $shadow];

		echo "<section class='monsters'>";
				echo "<div class='inner-column'>";
					echo "<div class='card-container'>";

		foreach ($monsters as $monster) {
			$name = $monster["name"];
			$age = $monster["age"];
			$favoriteFood = $monster["favoriteFood"];
			$image = $monster["image"];

			if ($monster["adopted"] == false) {
				$status = "<a href='#' class='status'>Adopt me today!</a>";
			} else {
				$status = "<a href='#' class='status'>Already Taken!</a>";
			}

			$photo = "
				<picture class='card-img' style='background-image: url(" . $image . ")'>
					<img src='" . $image . "'>
				</picture>";

			$story = "
				<p class='story'>My name is " . $name . " and I am " . $age . " years old. My favorite food is " . $favoriteFood . ".</p>";
			
						echo "<div class='card'>";
							echo "<div class='card-content'>";
								echo $photo; 
								echo $story; 
								echo $status; 
							echo "</div>";
						echo "</div>";
			}	

						echo "</div>";
				echo "</div>";
			echo "</section>";
	?>



</body>
</html>