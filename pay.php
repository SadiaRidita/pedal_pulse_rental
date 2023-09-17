<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bike Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/pay.css">


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>

			
	</section>

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3><b>Make Payments Here</h3>
	
			
				<form method="post">
					<table>
						<tr>
							
							<td><input type="text" name="bike_name" required placeholder="Transaction ID"></td>
						</tr>
						<tr>

							<td><input type="text" name="bike_type" required placeholder="National ID Number"></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
							if(isset($_POST['pay'])){
								include 'includes/config.php';

								$sel = "SELECT * FROM bikes WHERE bike_id = '$_GET[id]'";
						        $rs = $conn->query($sel);
						        $rws = $rs->fetch_assoc();


								$bike_name = $_POST['bike_name'];
								$bike_type = $_POST['bike_type'];
							
								
	
								$qry = "INSERT INTO book (bike_name,bike_type)
								VALUES('$bike_name','$bike_type')";
								$result = $conn->query($qry);


							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		
		</div>
	</section>	
