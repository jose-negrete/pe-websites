<?php 
	$albums = $data['albums'];

	$album = 
	$firstName = 
	$lastName = 
	$address = 
	$city = 
	$state = 
	$zip = 
	$quantity = 
	$album = '';

	if( isset($_POST['submitted']) ){
		if ( isset($_POST['album']) ) {
		$album = $_POST['album'];
	}
		$quantity = $_POST['quantity'];
		$firstName = $_POST['first-name'];
		$lastName = $_POST['last-name'];
		$fullName = "$firstName $lastName";
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = strtoupper($_POST['state']);
		$zip = $_POST['zip'];

		$message = $quantity . " order(s) of " . $album . " will be sent to " . $fullName . " at " . $address . ", " . $city . ", " . $state . ".";
	}

	function soAnnoying($checkThis){
		
		if( isset($_POST['submitted']) && isset($checkThis)){
			echo "value='$checkThis'";
		} 
	}
?>
<main>
	<div class="inner-column">
		<h1>The Record Shoppe</h1>
		<picture class="form-photo">
			<img src='images/form-photo.png'>
		</picture>
		<form method='POST'>
			<h2>Order Form</h2>
			<div class="field">
				
				<label>Select Album:</label>
				<?php 
					if( isset($_POST['submitted']) && !$album){
						echo "<h5>Please select an album</h5>";
					}
				?>
				<select name="album" required>
					<option 
						selected 

						disabled>Album list...</option>
					<?php 
						foreach($albums as $album){
							$name = $album['name'];

							echo "<option value='$name'>$name</option>";
						}
					?>
				</select>
			</div>
			<div class="field">
				<label>Choose Quantity:</label>
				<input 
					type="number" 
					placeholder='0' 
					min='1' 
					name='quantity' 
					<?php soAnnoying($quantity); ?>
					required>
			</div>
			<div class="field">
				<h3>Shipping Address:</h3>
				<label>First Name:</label>
				<input 
					type='text' 
					name='first-name' 
					<?php soAnnoying($firstName); ?>
					required>
				<label>Last Name:</label>
				<input 
					type='text' 
					name='last-name' 
					<?php soAnnoying($lastName); ?>
					required>
				<label>Address:</label>
				<input 
					type='text' 
					name='address' 
					<?php soAnnoying($address); ?>
					required>
				<label>City:</label>
				<input 
					type='text' 
					name='city'
					<?php soAnnoying($city); ?>
					required>
				<label>State:</label>
				<input 
					type='text' 
					name='state' 
					maxlength='2' 
					style='text-transform:uppercase;' 
					<?php soAnnoying($state); ?>
					required>
				<?php 
					if (strlen($zip) > 5 || strlen($zip) < 5 && $zip){
						echo "<h5>Zip code needs to be less than 5 digits.</h5>";
					}
				?>
				<label>Zip:</label>
				<input 
					type='number' 
					name='zip' 
					pattern="[0-9]{5}" 
					<?php soAnnoying($zip); ?>
					required>
			</div>
			<button name='submitted'>Place Order</button>
		</form>	
	</div>

	<?php 
		if( isset($_POST['submitted']) && strlen($zip) === 5 && isset($_POST['album'])){
			echo "<p>$message</p>";
		}
	?>
</main>




