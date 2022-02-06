<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lesson 124</title>

	<style>
		html {
			font-family: sans-serif;
			height: 100%;
		}

		body {
			display: flex;
			gap: 20px;
			flex-flow: wrap;
			justify-content: space-evenly;
   		background: repeating-linear-gradient(45deg, linen, linen 8px, gainsboro 8px, gainsboro 10px);



		}

		form, form *, .results, .results * {
			border: 2px solid;
			padding: 10px;
			border-radius: 10px;
			letter-spacing: 0.06em;
			line-height: 1.5;
		}

		form, .results {
			display: flex;
			flex-direction: column;
			gap: 10px;
			width: 100%;
			max-width: 230px;
			text-align: center;
			background-color: #F87FAE;
			box-shadow: -5px 5px black;
		}

		.field {
			display: flex;
			flex-direction: column;
			gap: 10px;
			background-color: #FEE25C;
		}

		label {
			border: none;
		}

		input {
			color: maroon;
			font-weight: 100;
			border-color: black;
			outline: none;
			background-color: linen;
		}

		.results {
			display: none;
			flex-direction: column;
			justify-content: space-around;
		}

		button {
			font-size: 1em;
			font-weight: 600;
			background-color: gainsboro;
		}
	</style>
</head>

<?php 
	$submitted = isset($_POST["submitted"]);
	$height = $_POST["height"];
	$width = $_POST["width"];

	// var_dump($_POST);

	if ($submitted){
		echo 
		"<style>
			.results {
				display: flex;
			}
		</style>";

		$sqft = $height * $width;
		$sqmt = $sqft * 0.09290304;
		$sqmt = round($sqmt, 3);

		$first = "You entered dimensions of $height and $width";
		$second = "The area is $sqft square feet and $sqmt square&nbsp;meters.";

		if ($height == 0 || $width == 0){
			$first = "<img style='padding:0px;' src='https://media.istockphoto.com/vectors/try-again-vector-hand-drawn-illustration-with-cartoon-lettering-good-vector-id1182313635?k=20&m=1182313635&s=612x612&w=0&h=toLZUQHqj58aetcXbUGqgbY9Eu6dJ63kUwNiFym03dQ='";

			$second = "Fields can't be empty doofus.";
		}
	}

?>

<body>
	<form method="POST">
		<div class="field">
			<label>What is the length of the room in feet?</label>
			<input name="height" type="number" value="<?=$height?>">
		</div>

		<div class="field">
			<label name="">What is the width of the room in feet?</label>
			<input name="width" type="number" value="<?=$width?>">
		</div>

		<button name="submitted" type="submit">SUBMIT</button>
	</form>

	<div class="results">

		<div class="field"><?=$first?></div>
		<div class="field"><?=$second?></div>

	</div>
	
</body>
</html>