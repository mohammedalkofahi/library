<!doctype html>
<html lang="en">
  <head>
  	<title>alkofahi laibrary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<div class="form-group">
	          <a href="http://localhost/final%20project/mainpage/main%20page.html"> <button type="submit" class="form-control btn btn-primary submit px-3">go back</button></a><br>
				
	            </div>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">welcome to my site </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="user_log.php" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input name="name" type="text" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input name="password" id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3"> enter </button><br>
				
	            </div>
				 <div class="form-group">
	            	<a href="adminservices\add_user.php" > <button type="submit" class="form-control btn btn-primary submit px-3"> creat account </button></a><br>
	            </div>
			
	          </form>
		      </div>
				</div>
			</div>
		</div>
		
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

<?php
 session_start();
$message="";

$username1 = $_POST['name'];
$password1 = $_POST['password'];

$servername="localhost";
$username="root";
$password="9991033902";
$DB_name="laibrary";


$con=new mysqli($servername,$username,$password,$DB_name);
if($con -> connect_error){
  die ("not connected " .$con -> connect_error);
  }
  
else {
	
	$sql ="SELECT * FROM users WHERE name ='$username1' AND password='$password1'";
	
	$ko = $con -> query($sql);
	if($ko -> num_rows > 0){
		session_start();
		$_SESSION["name"] = "$username1";
		$_SESSION["password"] = "$password1";
		echo "ok";
        header('Location: ../userpag/user_page.php');
        exit;
		
	}
else{
	echo "User not found";
}

	$con -> close ;

   }
  ?>