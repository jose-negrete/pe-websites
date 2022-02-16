<?php $home = $data['pages']['home'];?>

<header>
	<h1><?=$home['name']?></h1>
</header>

<address>
		<?php
			$address = $home['address'];

			foreach ($address as $line){
				echo "<h2>$line<h2>";
			}
		?>
	</address>


<section class="hours">
	<ul>
		<?php 
			$days = $home['days'];

			foreach($days as $day) {

				$dayOfWeek = $day['day'];

				if (!isset($day['open'])){
					$hours = "Closed";
				} else {
					$open = $day['open'];
					$close = $day['close'];
					$hours = "$open - $close";
				}

				echo "
				<li>
					<h3>$dayOfWeek</h3>

					<p>$hours</p>
				</li>";
			}
		?>
	</ul>
</section>

