<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bike Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/rentbike2.css">


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
			<h2 class="caption" style="text-align: center">RANT THE BIKE </h2>
			<div class=line><div>
			</section>
	</section>

	
	<section class="listings">
		<div class="wrapper">
		<ul   style="list-style-type: none"class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM bikes WHERE bike_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li >
				<div class="bikebg"><div>
					<a href="book_bike.php?id=<?php echo $rws['bike_id'] ?>">
						<img style="border-radius: 10px 10px 0px 0px"class="thumb" src="bikes/<?php echo $rws['image'];?>" width="100%" height="200">
					</a>
					<p class="price"><?php echo 'BDT.'.$rws['hire_cost'];?></p>
					<div class="property_details">
						<h1> 
							<a style="text-decoration: none;  padding-left: 10px;" href="book_bike.php?id=<?php echo $rws['bike_id'] ?>"><?php echo ''.$rws['bike_type'];?></a>
						</h1>
						<h2 style=" width: 350px">Model: <span class="property_size"><?php echo $rws['bike_name'];?></span></h2>
					</div>
				</li>
				<h3>Proceed to Rant <?php echo $rws['bike_name'];?><br> <a style=" color:red"href="pay.php">Click to Book</a></h3>
				
				
							
	
				
			</ul>
		</div>
	</section>	

	
