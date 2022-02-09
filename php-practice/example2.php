<?php 

		// isset() checks if the variable has been set.
		// returns either true or false
		$formSubmitted = isset($_POST["submitted"]);

		// grabs current date with the date() function.
		// You can grab a lot of info with this function but I only want the year so you can specify by adding "Y" to the argument.
		$currentYear = date("Y");


		$currentAge = 0;
		$retiredAge = 0;

		if ($formSubmitted) {
			$currentAge = floatval( $_POST["currentAge"] );
			$retiredAge = floatval( $_POST["retiredAge"] );
		}

		$yearsLeft = $retiredAge - $currentAge;
		$retirementYear = $currentYear + $yearsLeft;

		if ($yearsLeft <= 0) {
			$message = "Retire already fool!";
		} else {
			$message = "You have $yearsLeft years left until&nbspretirement.<br>It's $currentYear, so you can retire&nbspin&nbsp$retirementYear.";
		}
	?>

	<form method="POST">

		<p>Retirement Calculator</p>

		<div class="field">
			<label>What is your current age?</label>
			<input 
				type="number" 
				name="currentAge" 
				min="0" 
				value="<?=$currentAge?>">
		</div>
		
		<div class="field">
			<label>At what age should you retire?</label>
			<input 
				type="number" 
				name="retiredAge" 
				min="0" 
				value="<?=$retiredAge?>">
		</div>

		<button type="submit" name="submitted">Submit</button>
	</form>

	<p><?=$message?></p>
