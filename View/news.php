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
		include_once '../Repository/newsRepository.php';
		$newsRepository = new newsRepository();
	    $newss = $newsRepository->getAllNews();

	?>

	<section id="news">
		
		<h3 style="margin-top:25px;" >Latest News</h3>

		<div class="news-box-container">
        <?php
        foreach($newss as $news){

            echo"
			<div class='news-box'> 
				<div class='news-img'>
                    <img src='../Resources/newsImg/".$news['image']."'>
					<div class='news-label'>New</div>
				</div>

				<div class='news-text'>
                <strong>".$news['description']."</strong>
                <a href='".$news['url']."'>Read More</a>
				</div>

			</div>";}
            ?>			

		</div>

	</section>
	<?php 
	include('../Includes/footer.php');
	?>
	<span class="copyright">© 2021 ShootShop</span>

</body>
</html>