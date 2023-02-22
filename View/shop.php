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
		include_once '../Repository/productRepository.php';
		$productRepository = new productRepository();
	    $products = $productRepository->getAllproducts();
		$productRepository = new productRepository();
		$product  = $productRepository->getProductById($id);
		

	?>
	<section style='padding-top:35px;' id="feature-product">
		<h2>Shoes</h2>

		<div class="feature-product-container">
			<?php
				foreach($products as $p){

				echo"
				<div class='feature-product-box'>
					
					<div class='product-feature-img'>
						<img src='../Resources/productImg/".$p['image']."'>
					</div>

					<div class='product-feature-text-container'>
						<div class='product-feature-text'>
							<strong>".$p['name']."</strong>
							<span>".$p['price']."€</span>
						</div>

						<div class='cart-like'>
							<a class='cart-btn' href='../Controller/addToCartController.php?id=$p[ID]'><i class='fas fa-shopping-cart'></i></a>
						</div>
					</div>
				</div>.";
			}
			if (isset($_GET['id'])) {
				include_once '../Controller/addToCartController.php';
			}
			?>

	</section>

	<?php 
	  	include('../Includes/footer.php');
	 ?>
	<span class="copyright">© 2021 ShootShop</span>

</body>
</html>