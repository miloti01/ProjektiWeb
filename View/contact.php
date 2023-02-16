<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="contactStyle.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
<?php
		include('../Includes/header.php');
	?>

	<div class="container">
		<div class="contact-box">
			
			<div class="c-right">
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Your Name">
				<input type="text" class="field" placeholder="Your Email">
				<input type="text" class="field" placeholder="Subject">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="btn">Send</button>
			</div>
			<div class="c-left">
			
			</div>
		</div>
	</div>

	<footer>
		<div class="footer-container">

			<div class="footer-logo-container">
				<div class="footer-logo">ShootShop</div>
				<span>Copyright 2021</span>

				<div class="footer-social">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
				</div>
			</div>

			<div class="footer-menu">
				
				<div class="footer-menu-box">
					<strong>Rewards</strong>
					<ul>
						<li><a href="#">Join Now</a></li>
						<li><a href="#">Gift Cards</a></li>
						<li><a href="#">Manage Account</a></li>
						<li><a href="#">Learn More</a></li>
						<li><a href="#">Send Us Feedback</a></li>
					</ul>
				</div>

				<div class="footer-menu-box">
					<strong>Get Help</strong>
					<ul>
						<li><a href="#">Order Status</a></li>
						<li><a href="#">Shipping and Delivery</a></li>
						<li><a href="#">Returns</a></li>
						<li><a href="#">Payment Options</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>

				<div class="footer-menu-box">
					<strong>About ShootShop</strong>
					<ul>
						<li><a href="#">News</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Investors</a></li>
						<li><a href="#">Purpose</a></li>
						<li><a href="#">Sustainability</a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>
	<span class="copyright">© 2021 ShootShop</span>
</body>
</html>