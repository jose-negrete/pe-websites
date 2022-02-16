<?php
	$nightmare = file_get_contents('nightmare.json');
	$quickFix = json_decode($nightmare, true);

	$classPreview = $quickFix['list'];
?>

<section>
	<?php 
		foreach($classPreview as $preview){
			$title = $preview['title'];
			$date = $preview['date'];
			$price = $preview['price'];
			$img = $preview['img'];
			$id = $preview['id'];

			echo "<a class='preview' href='?page=detail&class=$id'>";

				echo "
				<h2>$title</h2>
				<h3>$date</h3>
				<h4>$price</h4>";

			echo "</a>";
		}
	?>
	
</section>