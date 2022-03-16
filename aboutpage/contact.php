<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" action="contact.php">
					<span class="contact3-form-title">
						Contact Us
					</span>

					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice" value="say-hi" checked="checked">
							<label class="label-radio3" for="radio1">
								Say Hi
							</label>
						</div>

				

					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="name" placeholder="Your Name">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="email" placeholder="Your Email">
						<span class="focus-input3"></span>
					</div>

						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Message is required">
						<textarea class="input3" name="message" placeholder="Your Message"></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn">
							Submit
						</button>
					</div>

				</form>
					<br><br>
				    <a href="http://localhost/final%20project/mainpage/main%20page.html">	<button class="contact3-form-btn">
						go back
						</button></a>
			</div>
			
				
		</div>
	</div>

</body>
</html>

<?php
$name1 = $_POST['name'];
$e_mail1 = $_POST['email'];
$message1 = $_POST['message'];




$servername="localhost";
$username="root";
$password="9991033902";
$DB_name="laibrary";

$con=new mysqli($servername,$username,$password,$DB_name);
if($con -> connect_error){
  die ("not connected " .$con -> connect_error);
  }
  
else {
    echo "conneted"."<br>" ;
	$ko="INSERT INTO messages (name,e_mail,message) VALUES('$name1','$e_mail1','$message1')";
	$con -> multi_query($ko);

	
	$con -> close ;
	
	
	
   }
  ?>