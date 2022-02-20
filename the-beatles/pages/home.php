<?php 
	$paragraphs = $data['bio'];
	$title = $data['name'];
	$image = $data['image'];
?>

<main class="home">
	<div class="inner-column">
		<h1><?=$title?></h1>
		<picture>
			<img src='<?=$image?>'>
		</picture>
		<?php 
			foreach($paragraphs as $paragraph){
				echo "<p>$paragraph</p>";
			}	
		?>
	</div>
</main>