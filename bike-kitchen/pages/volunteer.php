<?php
	$volunteer = $data['pages']['volunteer'];
	$faq = $volunteer['faq'];
	$intro = $volunteer['intro'];
	$addendum = $volunteer['addendum'];
?>

<p><?=$intro?></p>

<?php arrayOfObjects($faq); ?>

<h4><?=$addendum?></h4>