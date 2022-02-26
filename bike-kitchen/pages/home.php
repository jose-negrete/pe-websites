<?php 
	$home = $data['pages']['home'];
	$name = $home['name'];
	$address = $home['address'];
	$donations = $home['donations'];
	$days = $home['days'];
	$about = $home['about'];
?>

<header>
	<h1><?=$name?></h1>
</header>

<address>
	<?php spitHTML($address, "h2"); ?>
</address>

<section>
	<?php hours($days); ?>
</section>

<section>
	<?php headingBody($donations); ?>
</section>

<section>
	<?php headingBody($about); ?>
</section>
