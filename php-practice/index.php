<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Practice</title>
</head>

<style>
	html {
		height: 100%;
		--light-periwinkle: #C4C5D8ff;
		--royal-blue-light: #496BDCff;
		--russian-violet: #390E4Fff;
		--cream: #FFFCC6ff;
		--olive-drab-7: #393213ff;
	}

	body {
		background-image: url("https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimagesvc.meredithcorp.io%2Fv3%2Fmm%2Fimage%3Furl%3Dhttps%253A%252F%252Fstatic.onecms.io%252Fwp-content%252Fuploads%252Fsites%252F6%252F2012%252F09%252Fpizza-eating.jpg&q=85");
		background-size: cover;
		background-position: center;
	}

	form, form * {
		padding: 10px;
		font-family: sans-serif;
	}

	form {
		margin: 20px auto;
		width: 90%;
		max-width: 350px;
		background-color: var(--light-periwinkle);
		display: flex;
		flex-direction: column;
		gap: 10px;
		border: 2px solid var(--olive-drab-7);
		border-radius: 10px;
		
	}

	.field {
		display: flex;
		flex-direction: column;
		gap: 10px;
		margin-bottom: 10px;
		background-color: var(--royal-blue-light);
		border-radius: 5px;
		border: 2px solid var(--olive-drab-7);
	}

	p {
		font-size: 1.5em;
		margin: 0 0 5px;
		text-align: center;
		color: var(--cream);
	}

	label, button {
		text-transform: uppercase;
		color: #FEE55D;
		text-align: center;
	}

	input {
		background-color: var(--cream);
	}

	button {
		background-color: var(--russian-violet);
		font-size: 1.2em;
		letter-spacing: 0.2em;
	}

	input, button {
		border: 3px outset grey;
		border-radius: 5px;
	}

	.message {
		background-color: var(--cream);
		border: 2px solid var(--olive-drab-7);
		width: 90%;
		margin: auto;
	}

	.message p {
		max-width: 500px;
		margin: 20px auto;
		font-size: 1.4em;
		color: var(--olive-drab-7);
		text-align: center;
		line-height: 1.5;
	}

</style>

<body>


<?php include('example3.php'); ?>


	
</body>
</html>