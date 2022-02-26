<?php

	// cool but on the back burner for now. Doesn't seem practical.
	function pageBuilder($key){
		foreach($key as $value) {
			if ( is_array($value) ){
				foreach($value as $list) {
					if ( is_array($list) ){
						foreach($list as $li){
							echo $li;
						}
					} else {
						echo $list;
					}
				}
			} else {
				echo $value;
			}
		}
	}

	//Calculate the open hours
	function hours($days) {
		echo "<ul>";
		foreach($days as $day) {

			$dayOfWeek = $day['day'];

			if (!isset($day['open'])){
				$hours = "Closed";
			} else {
				$open = $day['open'];
				$close = $day['close'];
				$hours = "$open - $close";
			}

			echo "
			<li>
				<h3>$dayOfWeek</h3>";

			if ( isset($day['addInfo']) ){	
				echo "<h4>" . $day['addInfo'] . "</h4>";
			}

			echo	"
				<p>$hours</p>
			</li>";
		}
		echo "</ul>";
	}


	// Encloses values from arrays within an HTML tag. 
	function spitHTML($key, $tag){
		foreach ($key as $value){
			echo "<$tag>$value</$tag>";		
		}
	}

	// Heading and body generator
	function headingBody($key){
		$heading = $key['heading'];
		$body = $key['body'];

		if ( is_array($heading) ){
			foreach($heading as $value){
				echo "<h2>$value</h2>";
			} 
		} else {
			echo "<h2>$heading</h2>";
		}
		
		if ( is_array($body) ){
			foreach($body as $value){
				echo "<p>$value</p>";
			} 
		} else {
			echo "<p>$body</p>";
		}
	}

	// Heading and body in an array
	function arrayOfObjects($key){
		foreach($key as $value) {
			$heading = $value['heading'];
			$paragraph = $value['paragraph'];
			echo "<h3>$heading</h3>";

			if ( is_array($paragraph) ) {
				foreach($paragraph as $p) {
					echo "<p>$p</p>";
				}
			} else {
			echo "<p>$paragraph</p>";
			}
		}
	}

	// Link Maker
	function linkMaker($link, $linkName){
		echo "<a href='$link'>$linkName</a>";
	}

	// Make basic modules
	function moduleMaker($key){
		foreach($key as $key){
			$img = $key['img'];
			$title = $key['title'];
			$description = $key['description'];

			echo "
			<div>
				<picture>
					<img src='$img'
				</picture>

				<h4>$title</h4>

				<p>$description</p>
			</div>";
		}
	}

	// Picture maker
	function pictureMaker($img){
		echo "
		<picture>
			<img src='$img'>
		</picture>";
	}

	// List maker
	function listMaker($lists){
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
	}

	// Staff Machine
	function staffMachine($key){
		echo "<div class='roster'>";
		foreach ($key as $value){
			$name = $value['name'];
			$img = $value['img'];

			echo "
			<div class='staff-member'>
				<h3>$name</h3>
				<img src=$img>
			</div>";
		}
		echo "</div>";
	}
 
?>