<!DOCTYPE html>
<html lang="en">
<head>
	<title>Biker Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/contact4.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<section class="">
	<div class="php">
		<?php
			include 'header.php';
		?>
		</div>


<div class="head">

<div class="contacticon">
	                <a href="https://m.me/zaid.mahmud.54" target="blanck" style="--i:1" ><i class='bx bxl-messenger' ></i></a>
					<a href="https://www.facebook.com/zaid.mahmud.54/" target="blanck" style="--i:1" ><i class='bx bxl-facebook' ></i></a>
					<a href="" target="blanck" style="--i:2"><i class='bx bxl-whatsapp' ></i></a>
					<a href="" target="blanck" style="--i:3"><i class='bx bxl-telegram' ></i></a>
					<a href="" target="blanck" style="--i:3"><i class='bx bxl-twitter' ></i></a>
					
	    </div>


<div class="context">	
	  <h1>CONTACT </h1>
	  <h2>INFROMATION</h2>
	  <p1> we believe in customer satisfaction you can message us between out office time by the phone number or email or can directily message to the admin </p1>
	  <p> 
		<br><i class='bx bxs-phone' ></i>Phone Number : 8801400776768
		<br> <i class='bx bxl-gmail' ></i> Email : ZaeedMahmud@gmail.com
	  </p>
	  </div>

	  <div class="midline"> </div>

	 

<div class="textbox">	
		 <form method="post"> 
		          <h1>Message Here</h1>
		          <p>Enter Your Message Here</p>
                  <div class="messagebox">
				      <textarea name="message" placeholder="Enter Message Here" class="txt"></textarea>
				  </div>

				  <div class="sendbox">
				        <input type="submit" name="send" value="Send Message">
				  </div>
				</form>
			 </div>
		 </div>




				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,client_id,time,status)
							VALUES('$message','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->
	
