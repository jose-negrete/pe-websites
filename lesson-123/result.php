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

<section class="dom">
	<header>Result</header>
		

	<form method="POST">

		<div class="field">
			<label>How many people?</label>
			<input type="number" name="people" min="0" value="<?=$numPeople?>">
		</div>

		<div class="field">
			<label>How many pizzas do you have?</label>
			<input type="number" name="pizzas" min="0" value="<?=$numPizzas?>">
		</div>

		<div class="field">
			<label>How many slices per pizza?</label>
			<input type="number" name="slices" min="0" value="<?=$numSlices?>">
		</div>

		<button type="submit" name="submitted">SUBMIT</button>
	</form>
	<p><?=$message?></p>
</section>