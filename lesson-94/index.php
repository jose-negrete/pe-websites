<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lesson 94</title>

	<style>

		body {
			background-color: hsl(42, 26%, 93%);
			margin: 50px;
		}

		body * {
			font-size: 32px;
			font-family: Arial, sans-serif;
			letter-spacing: 0.06em;
			line-height: 1.5;
			font-weight: 900;
			display: block;
		}

		h1 {
			text-shadow: none;
		}

		.first {
			color: hsl(210, 49%, 48%);
		}

		.second {
			color: hsl(132, 44%, 40%);
		}

		.third {
			color: hsl(4, 80%, 58%);
		}

		.fourth {
			color: hsl(347, 65%, 70%);
		}

		a {
			margin-top: 25px;
			display: inline-block;
			text-decoration: none;
			text-shadow: none;
			background-color: hsl(50, 86%, 56%);
			color: blue;
			font-size: 20px;
			padding: 5px 10px;
			border: 4px solid blue;
			border-radius: 15px;
		}

		a:hover {
			background-color: hsl(322, 100%, 79%);
		}
	</style>

</head>
<body>

	<?php

		$first = [
			'Champ ', 
			'Fact: ', 
			'Everybody says ', 
			'Dang... ', 
			'Check it: ', 
			'Just saying... ', 
			'Superstar, ', 
			'Tiger, ', 
			'Self, ', 
			'I know this: ', 
			'News alert: ', 
			'Girl, ', 
			'Ace, ', 
			'Excuse me but ', 
			'Experts agree: ', 
			'In my opinion, ', 
			'Hear ye, hear ye: ', 
			'Okay, listen up: '
		];

		$second = [
			'the mere idea of you ', 
			'your soul ', 
			'your hair today ', 
			'everything you do ', 
			'your personal style ', 
			'every thought you have ', 
			'that sparkle in your eye ', 
			'your presence here ', 
			'what you got going on ', 
			'the essential you ', 
			"your life's journey ", 
			'that saucy personality ', 
			'your DNA ', 
			'that brain of yours ', 
			'your choice of attire ', 
			'the way you roll ', 
			'whatever your secret is ', 
			"all of y'all " 
		];

		$third = [
			'has serious game, ', 
			'rains magic, ', 
			'deserves the Nobel Prize, ', 
			'raises the roof, ', 
			'breeds miracles, ', 
			'is paying off big time, ', 
			'shows mad skills, ', 
			'just shimmers, ', 
			'is a national treasure, ', 
			'gets the party hopping, ', 
			'is the next big thing, ', 
			'roars like a lion, ', 
			'is a rainbow factory, ', 
			'is made of diamonds, ', 
			'makes birds sing, ', 
			'should be taught in school, ', 
			"makes my world go 'round, ", 
			'is 100% legit, '
		];

		$fourth = [
			'24/7.', 
			'can I get an amen?', 
			"and that's a fact.", 
			'so treat yourself.', 
			'you feel me?', 
			"that's just science.", 
			'would I lie?', 
			'for reals.', 
			'mic drop.', 
			'you hidden gem.', 
			'snuggle bear.', 
			'period.', 
			'can I get an amen?', 
			"now let's dance.", 
			'high five', 
			'say it again!', 
			'according to CNN.', 
			'so get used to it.'
		];

		echo '<h1>PEP TALK GENERATOR<h1>';

		echo '<p><span class="first">' . $first[(rand(0, count($first)-1))] . '</span><span class="second">' . $second[(rand(0, count($second)-1))] . '</span><span class="third">' . $third[(rand(0, count($third)-1))] . '</span><span class="fourth">' . $fourth[(rand(0, count($fourth)-1))] . '</span></p>';

		echo '<a href="../lesson-94/">Generate!</a>';
	?>
	
</body>
</html>