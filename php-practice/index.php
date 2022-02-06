<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Practice</title>
</head>

<style>
	html {
		height: 100%;
		--light-periwinkle: #C4C5D8ff;
		--royal-blue-light: #496BDCff;
		--russian-violet: #390E4Fff;
		--cream: #FFFCC6ff;
		--olive-drab-7: #393213ff;
	}

	body {
		background-image: url("https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimagesvc.meredithcorp.io%2Fv3%2Fmm%2Fimage%3Furl%3Dhttps%253A%252F%252Fstatic.onecms.io%252Fwp-content%252Fuploads%252Fsites%252F6%252F2012%252F09%252Fpizza-eating.jpg&q=85");
		background-size: cover;
		background-position: center;
	}

	form, form * {
		padding: 10px;
		font-family: sans-serif;
	}

	form {
		margin: 20px auto;
		width: 90%;
		max-width: 350px;
		background-color: var(--light-periwinkle);
		display: flex;
		flex-direction: column;
		gap: 10px;
		border: 2px solid var(--olive-drab-7);
		border-radius: 10px;
		
	}

	.field {
		display: flex;
		flex-direction: column;
		gap: 10px;
		margin-bottom: 10px;
		background-color: var(--royal-blue-light);
		border-radius: 5px;
		border: 2px solid var(--olive-drab-7);
	}

	p {
		font-size: 1.5em;
		margin: 0 0 5px;
		text-align: center;
		color: var(--cream);
	}

	label, button {
		text-transform: uppercase;
		color: #FEE55D;
		text-align: center;
	}

	input {
		background-color: var(--cream);
	}

	button {
		background-color: var(--russian-violet);
		font-size: 1.2em;
		letter-spacing: 0.2em;
	}

	input, button {
		border: 3px outset grey;
		border-radius: 5px;
	}

	.message {
		background-color: var(--cream);
		border: 2px solid var(--olive-drab-7);
		width: 90%;
		margin: auto;
	}

	.message p {
		max-width: 500px;
		margin: 20px auto;
		font-size: 1.4em;
		color: var(--olive-drab-7);
		text-align: center;
		line-height: 1.5;
	}

</style>

<body>


<!-- 

1. Evenly divide pizzas.
2. Prompt for the number of people. 
3. Prompt for the number of pizzas.
4. Prompt for the number of slices per pizza.
5. Make sure the number of peices comes out even.
6. Display the number of pieces each person should get. 
7. If there are leftovers, show the number of leftover pieces.

1. pizzas * slices / people = slices per person
2. Round "slices per person" down to the nearest integer.
3. Total number of slices - number of slices each person evenly gets.

-->

<?php
	$formSubmitted = isset($_POST["submitted"]);
	
	$numPeople = floatval($_POST["people"]); 
	$numPizzas = floatval($_POST["pizzas"]); 
	$numSlices = floatval($_POST["slices"]);

	$slicesTotal = $numSlices * $numPizzas;
	$slicesEach = $slicesTotal / $numPeople;
	
	$slicesEach = floor($slicesEach);

	$slicesLeft = $slicesTotal - $numPeople * $slicesEach;

	$first = "There are $numPeople people.";
	$second = "There are $numPizzas pizzas.";
	$third = "There are $numSlices slices per pie.";
	$fourth = "Each person gets $slicesEach slices.";
	$fifth = "There are $slicesLeft slices left.";

	if ($numPeople == 1) {
		$first = "There is 1 person.";
		$fourth = "This person gets $slicesEach slices.";
	}

	if ($numPizzas == 1) {
		$second = "There is 1 pizza.";
	}

	if ($slicesEach == 1){
		$fourth = "Each person gets 1 slice.";
	}

	if ($slicesLeft == 1) {
		$fifth = "There is 1 slice left";
	}



	if ($formSubmitted) {
		if ($numPeople == "" || $numPizzas == "" || $numSlices == "") {
			$message = "What's wrong? Cat got your keyboard... 😾 <br>Fill out the form properly! 🖕";
		} else {
			$message = "$first<br>" . "$second<br>" . "$third<br>" . "$fourth<br>" . $fifth;
			
		}
	}
?>	


	<form method="POST">

		<div class="field">
			<label>How many people?</label>
			<input type="number" name="people" min="0" value="<?=$numPeople?>">
		</div>

		<div class="field">
			<label>How many pizzas do you&nbsp;have?</label>
			<input type="number" name="pizzas" min="0" value="<?=$numPizzas?>">
		</div>

		<div class="field">
			<label>How many slices per&nbsp;pizza?</label>
			<input type="number" name="slices" min="0" value="<?=$numSlices?>">
		</div>

		<button type="submit" name="submitted">Turtle Power!</button>
	</form>

	<section class="message" style=<?php if ($formSubmitted){echo 'display:block;';} else {echo 'display:none;';} ?>>
		<p><?=$message?></p>
	</section>
	
</body>
</html>