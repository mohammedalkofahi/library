<?php

include "dbConn.php";

$id = $_GET['id'];

$qry = mysqli_query($db,"select * from all_book where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $book_name = $_POST['book_name'];
    $book_type = $_POST['book_type'];
    $author_name = $_POST['author_name'];
	
    $edit = mysqli_query($db,"update all_book set book_name='$book_name', book_type='$book_type', author_name='$author_name' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db);
        header("location:delete_book.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Error editing record";
        }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="book_name" value="<?php echo $data['book_name'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="book_type" value="<?php echo $data['book_type'] ?>" placeholder="Enter New Type" Required>
  <input type="text" name="author_name" value="<?php echo $data['author_name'] ?>" placeholder="Enter New Name" Required>
  <input type="submit" name="update" value="Update">
</form>