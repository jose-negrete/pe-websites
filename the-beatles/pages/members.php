<?php
	$members = $data['members'];
?>

<main>
	<div class="inner-column">
		<h1>Band Members</h1>

		<?php 
			echo "<ul>";
			foreach($members as $member){
				$imageOne = $member['image'][0];
				$name = $member['first'] . " " . $member['last'];
				$instrument = ucfirst($member['instrument']);
				$birth = date("M d, Y", strtotime($member['born']));
				$id = strtolower($member['first']);

				echo "
				<li>
					<picture>
						<img src='$imageOne'>
					</picture>
					<h2>
						<strong>Name:</strong>
						<span>$name</span>
					</h2>
					<h3>
						<strong>Instrument:</strong>
						<span>$instrument</span>
					</h3>
					<h4>
						<strong>Born:</strong>
						<span>$birth</span>
					</h4>";

					if ( isset($member['died']) ){
						$death = date("M d, Y",strtotime($member['died']));
					 	$datetime1 = date_create($birth);
		  				$datetime2 = date_create($death);
		 
		  				$age = date_diff($datetime1, $datetime2);
		  				$age = $age->format('%y years');
		 
						echo "
						<h4>
							<strong>Died:</strong>
							<span>$death</span>
						</h4>
						<h4>
							<strong>Aged:</strong>
							<span>$age</span>
						</h4>";
					} else {
						$datetime1 = date_create($birth);
		  				$datetime2 = date_create(date('Y-m-d'));

						$age = date_diff($datetime1, $datetime2);
		  				$age = $age->format('%y years');

		  				echo "
		  				<h4>
							<strong>Age:</strong>
							<span>$age</span>
						</h4>";
					}
				echo "
					<a href='?page=detail&id=$id'>More Info</a>
				</li>";
			}
			echo "</ul>";
		?>
	</div>
</main>