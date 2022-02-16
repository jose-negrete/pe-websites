<?php 
	// create a function with one parameter
		function generateCard ($card){

			// grabs values from the keys and saves them to variables
			$heading = $card["heading"];
			$description = $card["description"];
			$links = $card["links"];

			echo "
			<div class='card'>";

			// apply the values from the variables to HTML
			echo "
			<h2>$heading</h2>
			<p>$description</p>
			<div class='card-links'>";

			// loop the items in the links array
			foreach ($links as $link) {

				// grab the values and save them to variables
				$url = $link["url"];
				$name = $link["name"];

				// apply the values from variables to HTML

				if ($name === "Case Study") {
					echo "<a href=case-studies/$url>$name</a>";
				} else {
				echo "
				<a href=$url target='_blank'>$name</a>";
			}
			}

		echo "
		</div>
		</div>";
		}
?>