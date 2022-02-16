<?php $mission = $data['pages']['mission']; ?>

<section>
	<?php
		foreach($mission['info'] as $info) {
			$heading = $info['heading'];
			$paragraphs = $info['paragraphs'];
			$listItems = $info['listItem'];

			echo "<h3>$heading</h3>";
		}
	?>
</section>