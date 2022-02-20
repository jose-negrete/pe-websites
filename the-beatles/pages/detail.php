<?php 
	$getId = $_GET['id'];
	$members = $data['members'];

	foreach ($members as $member){
		$memberId = strtolower($member['first']);

		if ($getId == $memberId){
			$name = $member['first'] . " " . $member['last'];
			$image = $member['image'];
			$bio = $member['bio'];

		}
	}

	echo $getId;
?>

<main>
	<div class="inner-column">
		<h1><?=$name?></h1>
		<picture>
			<img src='<?=$image?>'>
		</picture>
		<?php 
			foreach($bio as $paragraph){
				echo "<p>$paragraph</p>";
			}
		?>
	</div>
</main>
