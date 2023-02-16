<!DOCTYPE html>
<html>
<head>
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
	?>
	<section id="main">
		<div class="main-content">

			<div class="main-text">
				<span>Collection</span>
				<h1>Comfortable Shoes</h1>
				<p>ShootShop is a basketball specialist started over 15 years ago. We unite the best brands such as Nike, Air Jordan, Adidas, Under Armour, Spalding and all other basketball-related products under one roof. Premium service & quality from on court basketball experience. To be found in over 10 stores in Europe and online!</p>
				<a href="#">Shop Now</a>
			</div>

			<div class="main-img">
				<img src="../Includes/img/1.jfif" alt="shoes">
			</div>
		</div>
	</section>

	<section id="categories">
		<h2>Categories</h2>

		<div class="category-container">
			<a href="" class="category-box">
				<img src="../Includes/img/box1.jpg" alt="category">
				<span>Shoes</span>
			</a>

			<a href="#" class="category-box">
				<img src="../Includes/img/box2.jpg" alt="category">
				<span>Jersey</span>
			</a>

			<a href="#" class="category-box">
				<img src="../Includes/img/box3.jpg" alt="category">
				<span>Balls</span>
			</a>

			<a href="#" class="category-box">
				<img src="../Includes/img/box4.jpg" alt="category">
				<span>Jersey/Shorts Set</span>
			</a>
		</div>
	</section>


	<section id="feature-product">
		
		<h2>Featured Product</h2>

		<div class="feature-product-container">
			
			<div class="feature-product-box">
				
				<div class="product-feature-img">
					<img src="../Resources/productImg/p1.jpg" alt="">
				</div>

				<div class="product-feature-text-container">
					<div class="product-feature-text">
						<strong>Unique Collection</strong>
						<span>95.00€</span>
					</div>

					<div class="cart-like">
						<a href="#"><i class="fas fa-shopping-cart"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
				</div>
			</div>
			<div class="feature-product-box">
				
				<div class="product-feature-img">
					<img src="../Resources/productImg/p2.jpg" alt="">
				</div>

				<div class="product-feature-text-container">
					<div class="product-feature-text">
						<strong>Unique Collection</strong>
						<span>102.00€</span>
					</div>

					<div class="cart-like">
						<a href="#"><i class="fas fa-shopping-cart"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
				</div>
			</div>

			<div class="feature-product-box">
				
				<div class="product-feature-img">
					<img src="../Resources/productImg/p3.jpg" alt="">
				</div>

				<div class="product-feature-text-container">
					<div class="product-feature-text">
						<strong>Unique Collection</strong>
						<span>115.00€</span>
					</div>

					<div class="cart-like">
						<a href="#"><i class="fas fa-shopping-cart"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
				</div>
			</div>

			<div class="feature-product-box">
				
				<div class="product-feature-img">
					<img src="../Resources/productImg/p4.jpg" alt="">
				</div>

				<div class="product-feature-text-container">
					<div class="product-feature-text">
						<strong>Unique Collection</strong>
						<span>87.00€</span>
					</div>

					<div class="cart-like">
						<a href="#"><i class="fas fa-shopping-cart"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="banner">
		
		<div class="banner-text">
			<strong>Beatiful Shoes</strong>
			<span>From 125€</span>
			<p>Long Lasting and Comfortable to use. This is Only For You</p>
			<a href="#">Shop Now</a>
		</div>
		
		<div class="banner-img">
		<img src="../Includes/img/banner.png" alt="banner">
		</div>
		
	</section>

	<section id="news">
		
		<h3>Latest News</h3>

		<div class="news-box-container">
			
			<div class="news-box"> 
				<div class="news-img">
					<img src="../Includes/img/n1.jpg">
					<div class="news-label">New</div>
				</div>

				<div class="news-text">
					<strong>The Curry Flow 9:Lighter, Gripier & Quicker!</strong>
					<a href="https://bouncewear.com/blogs/news/the-curry-flow-9-lighter-gripier-quicker">Read More</a>
				</div>

			</div>

			<div class="news-box"> 
				<div class="news-img">
					<img src="../Includes/img/n2.jpg">
					<div class="news-label">New</div>
				</div>

				<div class="news-text">
					<strong>The Air Jordan XXXVI is here!</strong>
					<a href="https://bouncewear.com/blogs/news/the-air-jordan-xxxvi-is-here">Read More</a>
				</div>

			</div>		

			<div class="news-box"> 
				<div class="news-img">
					<img src="../Includes/img/n3.jpg">
					<div class="news-label">New</div>
				</div>

				<div class="news-text">
					<strong>Moonbird: How slow-paced breathing enhances your performance</strong>
					<a href="https://bouncewear.com/blogs/news/moonbird-how-slow-paced-breathing-enhances-your-performance">Read More</a>
				</div>

			</div>				

		</div>

	</section>
	<?php 
	include('../Includes/footer.php');
	?>
	<span class="copyright">© 2021 ShootShop</span>

</body>
</html>