<?php


//Connection Info
$servername="localhost";
$username="root";
$password="9991033902";
$db_name="laibrary";


//Create a connection
$conn = new mysqli($servername, $username, $password, $db_name);

//Check Connection
if($conn->connect_error){
	//die("Connection Falied :(".$conn->connect_error)."<br>";
}else{
	

	
         $dropdown = "
             
            ";
 

	
	
	$sql = "SELECT * FROM all_book";
	$result = $conn ->query($sql);
	
	
	
	if($result ->num_rows > 0){
		//echo "Some Data Selected"."<br>";
		
		$product = "";
		
    
		
		//Fetching the data and store it in the table
		while($row = $result -> fetch_assoc()){
			
			$product = $product." <div class='col-md-3'>
                        <div class='card mb-4 product-wap rounded-0'>
                            <div class='card rounded-0'>
                                <img width=320px  height=400px  src='".$row["pic"]."'>
                                <div class='card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center'>
                                    <ul class='list-unstyled'>
                                        <li><a class='btn btn-success text-white mt-2' href='".$row["pdf"]."'><i class='fas fa-cart-plus'></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class='card-body'>
                                <h1 class='h3 text-decoration-none'>".$row["book_name"]." </a>
                                <h1 class='h3 text-decoration-none'>".$row["book_type"]."</a>
                                <h1 style='text-align:right;'  class='h3 text-decoration-none'>".$row["author_name"]." </h1>
                            </div>
                        </div>
                    </div>";
			
		}
		
		//$select = $select."</select>";
		
	}else{
		
		//echo "No Data Selected"."<br>";
		
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>alkofahi laibrary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">mohammedalkfahi@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">0781277762</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Library
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                  
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/final%20project/aboutpage/about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/final%20project/aboutpage/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login/logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
                
         </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Category
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                  
                        <li class="nav-item">
                            <a class="nav-link" href="comic_page.php">Comic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="novels_page.php">Novels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="political_page.php">Political</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="children_page.php">Children</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="economic_page.php">Economic</a>
                        </li>
                    </ul>
                </div>
                
         </div>
    </nav>
    

</div>


 
             

<div class="row">
<?php echo $product; ?>	
 
</div>
</div>
</div>
</body>

</html>