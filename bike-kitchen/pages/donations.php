<?php
	$donations = $data['pages']['donations'];
	$paragraphs = $donations['paragraphs'];
	$lists = $donations['lists'];
?>

<section>
	<?php 
		spitHTML($paragraphs, "p");
		listMaker($lists);
	?>
</section>