<?php
	$classes = $data['pages']['classes'];
	$link = $classes['button']['link'];
	$linkText = $classes['button']['linkText'];

	$disclaimers = $classes['disclaimers'];
	$lessons = $classes['lessons'];

?>

<section>
	<p><?=$classes['intro']?></p>

	<a href='?page=<?=$link?>'><?=$linkText?></a>

	<p><?=$classes['emailInfo']?></p>

	<?php
		foreach($disclaimers as $disclaimer){
			echo "<h3>$disclaimer</h3>";
		}
	?>
</section>

<section>

	<?php

		foreach($lessons as $lesson){
			$img = $lesson['img'];
			$title = $lesson['title'];
			$description = $lesson['description'];


			echo "
			<div>
				<picture>
					<img src='$img'
				</picture>

				<h4>$title</h4>

				<p>$description</p>
			</div>";

		}
		
	?>

</section>
