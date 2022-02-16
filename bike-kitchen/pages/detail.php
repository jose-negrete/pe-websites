<?php 
$nightmare = file_get_contents('nightmare.json');
$quickFix = json_decode($nightmare, true);


 if ( isset($_GET['class']) ){
 	$classId = $_GET['class'];
 }



 

 foreach($quickFix['list'] as $list){
 	if($classId == $list['id']){
 		$title = $list['title'];
 		$description = $list['description'];

 		echo $title;


 		echo "
 		<h1>$title</h1>";

 		foreach ($description as $paragraphs) {

 			echo "<p>$paragraphs</p>";
 		}
 	}
 }

?>

