<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lesson 96</title>
</head>
<style>
	body {
		background-color: #333;
		font-family: monospace;
		color: orange;
		font-size: 24px;
		margin: 30px;
	}

	img {
		object-fit: cover;
		max-width: 200px;
		height: 200px;
		border: 5px solid orange;
		margin-top: 50px;
	}


</style>
<body>

	<h1>The Beatles w/ PHP</h1>

	<?php
		function theBeatles($name, $instrument, $age, $alive, $photo) {
			$beatle = [
				"name" => $name,
				"instrument" => $instrument,
				"age" => $age,
				"alive" => $alive,
				"photo" => $photo
			];

			return $beatle;
		}
		
		$john = theBeatles('John', 'rhythm guitar', 40, false, 'images/john.jpeg');
		$paul = theBeatles('Paul', 'bass', 79, true, 'images/paul.jpeg');
		$george = theBeatles('George', 'lead guitar', 58, false, 'images/george.jpeg');
		$ringo = theBeatles('Ringo', 'drums', 81, true, 'images/ringo.jpeg');


		$members = [$john, $paul, $george, $ringo];

		foreach ($members as $member) {
			echo "<img src=" . $member["photo"] . ">";

			echo "<p>" . $member["name"] . " plays " . $member["instrument"] . ".</p>";

			if ($member["alive"] === false) {
				echo "<p>He died at age " . $member["age"] . ".</p>";
			} else {
				echo "<p>He is " . $member["age"] . " years old.</p>";
			}
		}

	?>

</body>
</html>