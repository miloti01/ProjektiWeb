<!DOCTYPE html>
<html>
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
	
	<link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>
<body>
	<?php
		include('../Includes/header.php');
        include_once '../Repository/cartRepository.php';
		include_once '../Models/product.php';
		include_once '../Repository/productRepository.php';
		$cartRepository = new cartRepository();
		$productRepository = new productRepository();
        $products = $cartRepository->getAllCartProducts();
	?>

	<section style='padding-top:35px;' id="feature-product">
		<h2>Products you have added to cart</h2>
		<div class='feature-product-container'>
					<?php
						foreach($products as $p){
							$product = $productRepository->getProductById($p['productID']);
							echo"
							<div class='feature-product-box'>
					
									<div class='product-feature-img'>
										<img src='../Resources/productImg/".$product['image']."'>
									</div>

								<div class='product-feature-text-container'>
									<div class='product-feature-text'>
										<strong>".$product['name']."</strong>
										<span>".$product['price']."€</span>
									</div>

									<div class='cart-like'>
									<a href='../Controller/deleteFromCart.php?ID=$product[ID]'><i class='fa fa-close'></i></a>
									</div>
								</div>
							</div>.";
						}
					?>
		</div>
	</section>
		<?php
			include('../Includes/footer.php');
		?>
</body>
</html>