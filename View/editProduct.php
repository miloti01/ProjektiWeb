<!DOCTYPE html>
<html>
<head>
<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>

	<title>ShootShop</title>

	<link rel="stylesheet" type="text/css" href="style.css">


	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<?php
		include('../Includes/header.php');
		if ($_SESSION['role']!='admin'){
			header("location:index.php");}
		include_once '../Repository/productRepository.php';
		include('../Controller/editProductController.php');



	$productRepository = new productRepository();
	$product  = $productRepository->getProductById($_GET['id']);

	?>

<section id="feature-product">
	<div class="feature-product-container">
		<div class="feature-product-box">
			<div  style="margin-top:100px;width: 100%;">
				<h1 style="text-align:center;">Edit the product</h1>
				<form class="" action="" method="post" enctype="multipart/form-data">
					<table class="profile-table table-bordered">
						<tr>
							<td colspan="4" style="text-align: center;"><br>
								<img style=" width: 200px; height: 200px; border-radius: 80%;" src="../Resources/productImg/<?= $product['image']?>"><br><br>
								<label for="file-upload" class="image-upload-label">
			    				<i>Upload Image</i> 
								</label>
								<input  accept="image/png, image/jpg, image/jpeg" id="file-upload" class="image-upload" type="file" name="myfile"><br><br><br>
							</td>
							
						</tr>


						<tr>
							<td colspan="2">
								<label class="profile-label">Name:</label>
								<input  type="text" class="form-control" name="name" value="<?= $product['name'] ?>" placeholder="Name...">
								<label class="profile-label">Price:</label>
								<input type="text" class="form-control" name="price" value="<?= $product['price'] ?>" placeholder="price...">
							</td>
						</tr>						<tr>
							<td colspan="4" style="text-align:center;">
								<button class="profile-btn" type="submit" name="editBtn">Change</button>
							</td>
						</tr>
					</table>
				</form>	
			</div>
		</div>
	</div>
		</section>
	<?php
		include('../Includes/footer.php');
		
	?>



	<script src="../Includes/Js/main.js"></script>
</body>
</html>