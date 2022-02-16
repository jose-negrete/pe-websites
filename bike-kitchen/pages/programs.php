<?php $programs = $data['pages']['programs']; ?>

<section>
	<?php
		foreach($programs['info'] as $info) {
			$heading = $info['heading'];
			$paragraphs = $info['paragraphs'];

			echo "<h3>$heading</h3>";

			foreach($paragraphs as $paragraph) {
				echo "<p>$paragraph</p>";
			}


		}
	?>
</section>