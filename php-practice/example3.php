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
	// Same as last time. Checks if the form has been submitted. Returns a boolean.
	$formSubmitted = isset($_POST["submitted"]);
	
	// Assign variables and convert from strings to numbers for the user submitted data.
	$numPeople = floatval($_POST["people"]); 
	$numPizzas = floatval($_POST["pizzas"]); 
	$numSlices = floatval($_POST["slices"]);

	// Take those variables to create new variables by using the same calculations. You'll notice that it's nearly identical to the pseudocode. 
	$slicesTotal = $numSlices * $numPizzas;
	$slicesEach = $slicesTotal / $numPeople;
	$slicesEach = floor($slicesEach);
	$slicesLeft = $slicesTotal - $numPeople * $slicesEach;

	// This is for constructing the sentences that'll be displayed on the page. Strings concatenated with variables. Don't know if I'd use the word "concatenate" for the way this is written out though...
	$first = "There are $numPeople people.";
	$second = "There are $numPizzas pizzas.";
	$third = "There are $numSlices slices per pie.";
	$fourth = "Each person gets $slicesEach slices.";
	$fifth = "There are $slicesLeft slices left.";

	// I have to modify the sentence for singular use cases. To do this I created multiple if statements that check if the value of the variables is 1. 
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


	// Almost the same code as last time. Checks if the form has been submitted. If so then check to see if the all the variables have any user submitted content. I'm using the or opererator (||) so if one of those fields is empty then it'll return the middle finger. If not then it'll display the message where it concatantes the structure of the sentence. 
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
