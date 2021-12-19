<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Beatles</title>
	<style>

		html{
			height: 100vh;
		}

		body {
			background: url('https://yt3.ggpht.com/MvKhDGWhId3aie2dlUYCtfnJpeb9pq3AssCpZbOZYT_ax9mCu7XiQUpyq3JQRY3MzK2l_WtuYjU=s900-c-k-c0x00ffffff-no-rj');
			background-size: cover;
			margin: 10%;
			letter-spacing: 0.06em;
			font-family: Arial, sans-serif;
		}

		p {
			color: white;
			font-size: 28px;
			background-color: #26ADEF;
		}

		span {
			font-style: italic;
			color: gold;
		}

		a {
			color: #26ADEF;
			background-color: gold;
			font-size: 24px;
			text-decoration: none;
			padding: 10px;
			border: 7px solid #26ADEF;
			position: fixed;
			bottom: 40px;
		}
	</style>


</head>
<body>
	<?php

		$members = ["John", "Paul", "George", "Ringo"];

		$instruments = [
			"John" => "rhythm guitar",
			"Paul" => "bass",
			"George" => "lead guitar",
			"Ringo" => "drums"
		];

		$albums = [
			"Please Please Me",
			"With the Beatles",
			"A Hard Day's Night",
			"Beatles for Sale",
			"Help!",
			"Rubber Soul",
			"Revolver",
			"Sgt Pepper's Lonely Hearts Club Band",
			"Magical Mystery Tour",
			"The Beatles (a.k.a The White Album)",
			"Yellow Submarine",
			"Abbey Road",
			"Let it Be"
		];

		$randAlbum = rand(0, count($albums)-1);	

		echo "<p>The Beatles have " . count($members) . " members.</p>"; 

		echo "<p>". $members[0] . " plays " . $instruments[$members[0]] . ".<br>" . $members[1] . " plays " . $instruments[$members[1]] . ".<br>" . $members[2] . " plays " . $instruments[$members[2]] . ".<br> " . $members[3] . " plays " . $instruments[$members[3]] . ".</p>";

		if ($albums[$randAlbum] === "Yellow Submarine" || $albums[$randAlbum] === "Magical Mystery Tour") {
			echo "<p>Their album <span>" . $albums[$randAlbum] . "</span> sucks.</p>";
		} else {
			echo "<p>Their album <span>" . $albums[$randAlbum] . " </span>is awesome!</p>";
		};

		echo "<a href='../the-beatles'>REFRESH</a>"

	?>
	
</body>
</html>