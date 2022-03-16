<?php

include "dbConn.php";

$id = $_GET['id'];

$del = mysqli_query($db,"delete from all_book where id = '$id'");

if($del)
{
    mysqli_close($db); // Close connection
    header("location:delete_book.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>