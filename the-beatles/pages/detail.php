<?php 
	$getId = $_GET['id'];
	$members = $data['members'];

	foreach ($members as $member){
		$memberId = strtolower($member['first']);

		if ($getId == $memberId){
			$name = $member['first'] . " " . $member['last'];
			$imageOne = $member['image'][0];
			$imageTwo = $member['image'][1];
			$bio = $member['bio'];
		}
	}

?>

<main>
	<div class="inner-column">
		<h1><?=$name?></h1>
		<picture>
			<img src='<?=$imageOne?>'>
		</picture>
		<?php 
			for ($i = 0; $i <= count($bio)-1; $i++){

				if ($i == 2){
					echo "
					<picture class='damnyou'>
						<img src=$imageTwo>
					</picture>";
				}
				echo "<p>$bio[$i]</p>";
			}
		?>
	</div>
</main>
