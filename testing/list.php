<?php include('car-data.php'); ?>

<h1>Auto Zone</h1>

<ul>
	<?php foreach($car_data as $car) { 
		$price = "$" . number_format($car["price"], 2, ".", 
			",");
	?>
		<li class="car">
			<div>
				<h2 class='make'>Make: <?=$car['make']?></h2>
				<h2 class='model'>Model: <?=$car['model']?></h3>
				<h4 class='year'>Year: <?=$car['year']?></h4>
				<h5 class='price'>Price: <?=$price?></h5>
				<a href='?page=detail&car=<?=$car["id"]?>'>See it now!</a>
			</div>
		</li>
	<?php } ?>
</ul>