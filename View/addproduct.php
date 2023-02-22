<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
	<?php
		include('../Includes/header.php');
		if ($_SESSION['role']!='admin'){
			header("location:index.php");}
		include('../Controller/addProductController.php');



	?>


	<div class="container">
		<div class="row">
			<div style="margin-top:100px; width: 100%;">
				<h1 style="text-align:center;">Add a product to the database:</h1>
				<form action="" method="post" enctype="multipart/form-data">
					
					<table class="profile-table table-bordered">
						
						<tr>
							<td >
								<label for="file-upload" class="image-upload-label">
			    				<i>Upload Image</i> 
								</label>
								<input  accept="image/png, image/jpg, image/jpeg" id="file-upload" class="image-upload" type="file" name="myfile"><br><br><br>
								<label class="profile-label">Name:</label>
								<input  type="text" class="form-control" name="name" placeholder="Name">
								<label class="profile-label">Price:</label>
								<input type="text" class="form-control" name="price" placeholder="Price">
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;">
								<button class="profile-btn" type="submit" name="addProductButton">Add Product</button>
							</td>
						</tr>
					</table>
				</form>	
			</div>
		</div>
	<?php
		include('../Includes/footer.php');
		
	?>
	</div>

	<script src="../Includes/Js/main.js"></script>
</body>
</html>