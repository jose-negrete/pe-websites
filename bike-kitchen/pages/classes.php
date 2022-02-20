<?php
	$classes = $data['pages']['classes'];
	$link = $classes['button']['link'];
	$linkText = $classes['button']['linkText'];
	$disclaimers = $classes['disclaimers'];
	$lessons = $classes['lessons'];
	$emailInfo = $classes['emailInfo'];
	$img = $classes['img'];
?>

<section>
	<p><?=$classes['intro']?></p>

	<?php linkMaker($link, $linkText); ?>

	<p><?=$emailInfo?></p>

	<?php 
		spitHTML($disclaimers, "h3"); 
		pictureMaker($img);
	?>

</section>

<section>
	<?php moduleMaker($lessons); ?>
</section>
