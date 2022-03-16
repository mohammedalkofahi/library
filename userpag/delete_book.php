<!doctype html>
<html lang="en">
  <head>
  	<title>Alkofahi Laibrary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body class="img js-fullheight">
		<div class="form-group">
	    	<a href="../adminservices/admin_page.html"> <button type="submit" class="form-control btn btn-primary submit px-3">go back</button></a><br>
		</div>

		<h2>Books</h2>
		<table border="2" align="center" width="70%">
		<tr>
			<td>ID</td>
			<td>Book Name</td>
			<td>Book Type</td>
			<td>Author</td>
			<td>Action</td>
			<td>Edit</td>
		</tr>
		<?php
		include "dbConn.php";
		$records = mysqli_query($db,"select * from all_book");
		while($data = mysqli_fetch_array($records)) {
			?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td ><?php echo $data['book_name']; ?></td>
				<td><?php echo $data['book_type']; ?></td>
				<td><?php echo $data['author_name']; ?></td>
				<td><a href="delete_record.php?id=<?php echo $data['id']; ?>">Delete</a></td>
				<td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
			</tr>
			<?php
			}
			?>	
		</table>
	</body>
</html>