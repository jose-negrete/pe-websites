<?php
	$volunteer = $data['pages']['volunteer'];
?>

<p><?=$volunteer['intro']?></p>

<?php 
	foreach($volunteer['faq'] as $faq) {
		$heading = $faq['heading'];
		$paragraph = $faq['paragraph'];
		echo "<h3>$heading</h3>";
		echo "<p>$paragraph</p>";
	}
?>

<h4><?=$volunteer['addendum']?></h4>