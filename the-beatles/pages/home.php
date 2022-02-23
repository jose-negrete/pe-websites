<?php 
	$paragraphs = $data['bio'];
	$title = $data['name'];
	$imageOne = $data['image'][0];
	$imageTwo = $data['image'][1];
?>

<main class="home">
	<div class="inner-column">
		<h1><?=$title?></h1>
		<picture>
			<img src='<?=$imageOne?>'>
		</picture>
		<?php 
			for($i = 0; $i <= count($paragraphs)-1; $i++){
				
				if ($i == 2){
					echo "
					<picture class='damnyou'>
						<img src=$imageTwo>
					</picture>";
				}
				echo "<p>$paragraphs[$i]</p>";
			}	
		?>
		

	</div>
</main>