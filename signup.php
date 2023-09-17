<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bike Rental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/signup3.css">
</head>


<body>
        

        <div class="rightimage"> 

		   <h2>Join</h2>
		  

		</div>

	
		<div class="wrapper">

	
			
				<form method="post">
					        
                              	<h3>Sign Up</h3><br>


                              	<div class="input-box">
                              		<input type="text" name="fname" required placeholder="Name">
                              	</div>

                              	<div class="input-box">
                              		<input type="text" name="phone" required placeholder="Phone Number">
                              	</div>

                              	<div class="input-box">
                              		<input type="email" name="email" required placeholder="Email">
                              	</div>

                              	<div class="input-box">
                              		<input type="text" name="id_no" required placeholder="Password">
                              	</div>

                              	<div class="input-box">

                              		<input type="text" name="gender" required placeholder="Gender">

                              	</div>

                              	<div class="input-box">
                              		<input type="text" name="location" required placeholder="Location">                            
                              	</div>

                              	<div class="submitbutton">
                              		<input type="submit" name="save" value="Submit Details">                       
                              	</div>

                              	<div class ="haveaccount">
                              		<p> Already have account ? <a href="cilent_login.php">Login</a></p>
                              	</div>
					

					
			
				</form>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"cilent_login.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	