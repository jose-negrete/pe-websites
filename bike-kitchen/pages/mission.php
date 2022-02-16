<?php 
	$mission = $data['pages']['mission'];


?>

<section>
	<?php
		foreach($mission['info'] as $info) {
			$heading = $info['heading'];
			$paragraphs = $info['paragraphs'];
			

			echo "<h3>$heading</h3>";

			foreach($paragraphs as $paragraph) {
				
				if ( is_array($paragraph) ){
					foreach($paragraph as $list){
						foreach ($list as $li) {
							echo "<li>$li</li>";
						}
					}
				} else {
					echo "<p>$paragraph</p>"; 
				}
			}
		}
	?>
</section>