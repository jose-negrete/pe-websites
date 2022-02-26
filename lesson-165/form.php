<form method='POST'>
	<div class="field">
		<label>Add Reason:</label>

		<input type="text" name="reason">
	</div>

	
	<button type="submit">submit</button>
</form>

<?php 

$reasons = $data['enemies'][2]['reasons'];

$sgReason = $_POST['reason'];

array_push($reasons, $sgReason);
json_encode($reasons);
file_put_contents('database.json', $reasons);


var_dump($reasons);

?>

