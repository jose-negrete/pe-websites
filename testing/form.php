<?php
	if ( isset($_POST['info']) ){
		$range = $_POST['range'];
		$text = $_POST['text'];

		$message = "The range is $range and the text is '$text'.";
	} else {
		$message = 'Enter some info homes.';
	}
?>

<form method='POST'>
	<div class="field">
		<label>Enter text</label>
		<input type="text" name="text">
	</div>

	<div class="field">
		<label>Select range</label>
		<input type="range" 
			min="1" max="5" 
			name="range">
	</div>

	<button type="submit" name="button">Submit</button>
</form>

<p><?=$message?></p>