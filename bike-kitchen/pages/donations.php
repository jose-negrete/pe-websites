<?php
	$donations = $data['pages']['donations'];
	$paragraphs = $donations['paragraphs'];
	$lists = $donations['lists'];
?>

<section>

<?php 
	foreach($paragraphs as $paragraph) {
		echo "<p>$paragraph</p>";
	}

	foreach($lists as $list) {
		$title = $list['title'];
		$listItem = $list['listItem'];

		echo "<h4>$title</h4>";
		
		echo "<ul>";
		
		foreach($listItem as $item) {
			echo "<li>$item</li>";
			}

		echo "</ul>";
	}
?>
	
</section>