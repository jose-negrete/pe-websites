<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		body {
			width: 65vw;
			background-color: #333;
		}
		header {
			color: lightcoral;
			font-size: 28px;
		}

		p {
			font-size: 24px;
		}

		p:nth-of-type(1) {
			color: lemonchiffon;
		}

		p:nth-of-type(2) {
			color: lightgreen;
		}

		p:nth-of-type(3) {
			color: lightblue;
		}
	</style>
</head>
<body>
	<header>
		<h1>Mad Libs Y'all...<h1>
	</header>

	<?php
		$event = 'burning man';
		$secondNoun = 'loincloth';
		$place = 'trauma center';
		$person = 'Nicolas Cage';
		$firstAdjective = 'loud';
		$bodyPartPlural = 'eyelashes';
		$verb = 'juxtapose';
		$secondAdjective = 'perpendicular';
		$thirdNoun = 'chia pet';
		$food = 'gushers';
		$pluralNoun = 'compadres';

		echo "<p>I can't believe it's already " . $event . "! I can't wait to put on my " . $secondNoun . " and visit every " . $place . " in my neighborhood."
	?>

	<p>This year, I am going to dress up as
	<?php echo $person;?> with <?php echo $firstAdjective;?> <?php echo $bodyPartPlural;?>.</p>

	<p>Before I <?=$verb?>, I make sure to grab my <?=$secondAdjective?> <?=$thirdNoun?> to hold all of my <?=$food?>. Finally, all of my <?=$pluralNoun?> are ready to go!</p>

</body>
</html>