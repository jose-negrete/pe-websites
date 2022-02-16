<?php //include('car-data.php'); ?>

<?php if ( isset($_GET['car']) ){
	$this_car_id = $_GET['car'];
}

echo $this_car_id;

foreach ($car_data as $car){
	if ($this_car_id == $car['id']){
		$detail = $car;
	} 
} ?>

<?php if( isset($detail) ){ ?>
	<h1><?=$detail['make']?></h1>
	<picture>
		<img src='https://static.myfigurecollection.net/pics/figure/big/1197135.jpg'>
	</picture>
	<p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Quos corporis reiciendis molestiae necessitatibus rem cum cumque, quidem dolorem doloremque laudantium provident laborum sit dolore reprehenderit facere culpa voluptatum repellat asperiores.</p>

<?php } else { ?>

	<h1>There's no car here you idiot!</h1>

	<a href='?page=list'>Try Again!</a>

<?php } ?>