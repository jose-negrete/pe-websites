<?php 
	$staff = $data['pages']['staff']; 
	$intro = $staff['intro'];
	$join = $staff['join'];
	$roster = $staff['roster'];
?>

<section>
	<p><?=$intro?></p>

	<p><?=$join?></p>

	<?php staffMachine($roster); ?>
</section>