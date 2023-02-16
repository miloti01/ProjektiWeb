<nav class="navigation">

		<a href="#" class="logo">ShootShop</a>

		<input type="checkbox" class="menu-btn" id="menu-btn">
		<label for="menu-btn" class="menu-icon">
			<span class="nav-icon">
				<i class="fas fa-bars"></i>
			</span>
		</label>

		<ul class="menu">
			<li><a href="index.php" class="active">Home</a></li>
			<li><a href="shop.php">Shop</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>

		<div class="right-elements">

			<a href="#" class="search">
				<i class="fas fa-search"></i>
			</a>

			<a href="#" class="cart">
				<i class="fas fa-shopping-bag"></i>
			</a>
            <?php
 			    session_start();
 				if(isset($_SESSION['role'])){
 					echo "
 						<a href='#'>".$_SESSION['name']."</a>
 						<a href='logout.php'>Log out</a>
  						";
 				}
 				else{
 					echo "
 						<a href='login.php'>Log In</a>
  						";
 				}
 			?>

		</div>
	</nav>