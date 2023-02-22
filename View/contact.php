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
		include('../Controller/addFeedbackController.php');
	?>


	<div class="container">
		<div class="contact-box">
			<div class="c-right">
			<form action="" method="post">
				<h2>Contact Us</h2>
				<input type="text" name="name" class="field" placeholder="Your Name">
				<input type="text" name="email" class="field" placeholder="Your Email">
				<input type="text" name="subject" class="field" placeholder="Subject">
				<textarea placeholder="Message"  name="message" class="field"></textarea>
				<button id="contactBtn" name="addFeedback" type="submit" class="btn">Submit</button>
				</form>
			</div>
			<div class="c-left">
			<img src="../Includes/img/c1.jpg" alt="">
			</div>
		</div>
	</div>


	<?php 
	  	include('../Includes/footer.php');
	?>
	<span class="copyright">© 2021 ShootShop</span>
</body>
</html>