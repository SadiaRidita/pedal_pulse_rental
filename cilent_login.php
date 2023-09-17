<!doctype html>
<html lang="en">
  <head>
  	<title>Bike Rental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/login2.css">
	</head>
	
	
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				

				<div class="col-md-6 text-center mb-5">
					<h2 style="color:transparent;"class="body">BIKE RENTAL SYSTEM</h2>
				</div>


			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to login</h2>
								<p>Don't have an account?</p>
								<a href="signup.php" class="btn btn-white btn-outline-white">Sign Up</a>

							</div>


							
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		
							<form method="POST" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>

			      			<input type="email" name="email" class="form-control" placeholder="Enter Email" required>

			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>


		              <input type="password" name="pass" class="form-control" placeholder="Password" required>


		            </div>
		            <div class="form-group">
		            	

		            	<input type="submit" name="log" class="form-control btn btn-primary submit px-3"  value="Sign In">


		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		        </div>
		      </div>

		      	<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"home.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"cilent_login.php\")
									</script>";
					}
				}
			?>
		





				</div>
			</div>
		</div>
	</section>



