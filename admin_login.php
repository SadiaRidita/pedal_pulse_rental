<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bike Rental</title>

	<link rel="stylesheet" type="text/css" href="css/Admin2.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>


<body>
			<div class="wrapper">
			
				<form method="post">
					        
                              	<h3>Admin <br>Login Area</h3><br>


                              	<div class="input-box">Email Address
                              		<input type="text" name="uname" placeholder="Enter Username" required>
                              	</div>

                              	<div class="input-box">Password
                              		<input type="password" name="pass" placeholder="Enter Password" require>
                              	</div>

                              	<div class="submitbutton" >
                              		<input type="submit" name="login" value="Login Here">
                              	</div>
								
							</body>
</html>
				</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

