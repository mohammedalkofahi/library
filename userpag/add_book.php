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
	          <a href="http://localhost/final%20project/adminservices/admin_page.html"> <button type="submit" class="form-control btn btn-primary submit px-3">go back</button></a><br>
				
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
		      	<form action="add_book.php" class="signin-form" method="post" enctype="multipart/form-data">
		      		<div class="form-group">
		      			<input name="name" type="text" class="form-control" placeholder="book name" required>
		      		</div>
			
	            <div class="form-group">
		      			<input name="name2" type="text" class="form-control" placeholder="author name" required>
		      	</div>
	  
	  
			   <div class="form-group">
		      	<label> book link </label>   <input name="link" type="file" class="form-control" placeholder="book link" required>
		      	</div>
						<div class="form-group">
						 	<label> book photo </label>  
		      			<input name="img" type="file" class="form-control" placeholder="image link" required>
		      	</div>
	  
			
									<div class="form-group">
		      			<select name="book_type" style="width:190px;">
						<option value="comic_book">book type</option>
  <option value="comic_book">comic_book</option>
  <option value="economic_book">economic_book</option>
  <option value="children_stories">children_stories</option>
  <option value="political_book">political_book</option>
  <option value="novels">novels</option>
</select>
		      		</div>
	           
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">add book</button><br>
				
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
$x1 = $_POST['name'];
$x2 = $_POST['name2'];
$x3 = $_POST['link'];
$x4 = $_POST['img'];
$x5= $_POST['book_type'];



$servername="localhost";
$username="root";
$password="9991033902";
$DB_name="laibrary";


$con=new mysqli($servername,$username,$password,$DB_name);
if($con -> connect_error){
  die ("not connected " .$con -> connect_error);
  }
  
else {
	$target_dirr = "book_pdf/";
    $target_filee = $target_dirr . basename($_FILES["link"]["name"]);
    $imageFileTypee = strtolower(pathinfo($target_filee,PATHINFO_EXTENSION));
	
	
	
	$target_dir = "pic/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	

	
     $s1="ترفيهي";
     $s2="قصص اطفال";
     $s3="كتب اقتصادية";
     $s4="روايات";
     $s5="كتب سياسية";

if($x5=="comic_book"){
	 if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
		 	 if (move_uploaded_file($_FILES["link"]["tmp_name"], $target_filee)) {

             	 $ko="INSERT INTO all_book (book_name,author_name,book_type,pic,pdf) VALUES('$x1','$x2','$s1','$target_file','$target_filee')";
            	 $con -> multi_query($ko);
            	
}
}
}
elseif($x5=="economic_book"){
	if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
		 	 if (move_uploaded_file($_FILES["link"]["tmp_name"], $target_filee)) {
	
                $ko="INSERT INTO all_book (book_name,author_name,book_type,pic,pdf) VALUES('$x1','$x2','$s3','$target_file','$target_filee')";
	            $con -> multi_query($ko);
	}
	}
}
elseif($x5=="children_stories"){
	
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
		 	 if (move_uploaded_file($_FILES["link"]["tmp_name"], $target_filee)) {
	
                $ko="INSERT INTO all_book (book_name,author_name,book_type,pic,pdf) VALUES('$x1','$x2','$s2','$target_file','$target_filee')";
	            $con -> multi_query($ko);
	}
	}
}
elseif($x5=="political_book"){
	if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
		 	 if (move_uploaded_file($_FILES["link"]["tmp_name"], $target_filee)) {
	
                $ko="INSERT INTO all_book (book_name,author_name,book_type,pic,pdf) VALUES('$x1','$x2','$s5','$target_file','$target_filee')";
	            $con -> multi_query($ko);
	}
	}
}
elseif($x5=="novels"){
	
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
		 	 if (move_uploaded_file($_FILES["link"]["tmp_name"], $target_filee)) {
	
                $ko="INSERT INTO all_book (book_name,author_name,book_type,pic,pdf) VALUES('$x1','$x2','$s4','$target_file','$target_filee')";
	            $con -> multi_query($ko);
	}
	}
}
	$con -> close ;
	
	
}
  
  ?>


