<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>

	<title>ShootShop</title>

	<link rel="stylesheet" type="text/css" href="loginStyle.css">


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
		include_once '../Repository/userRepository.php';
		include('../Controller/editController.php');

	    $userRepository = new UserRepository();
	    $user  = $userRepository->getUserById($_GET['id']);

	?>

    <section id="L-S-Form">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="post" class="sign-in-form">
            <h2 class="title">Change Information</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Name" value="<?= $user['name'] ?>"  name="name"  required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last Name" value="<?= $user['lastname'] ?>"  name="lastname"  required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email Address" value="<?= $user['email'] ?>"  name="email"  required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Role" value="<?= $user['role'] ?>"  name="role"  required />
            </div>

          <input type="submit" value="Change" name="editBtn" class="btn solid" />
        </form>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
          </div>
        </div>
      </div>
    </div>
    </section>
    <?php
    include('../Includes/footer.php');
	  ?>
    <span class="copyright">© 2021 ShootShop</span>

    <script src="loginApp.js"></script>

</body>
</html>