
?>
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
	<style>
	table, td, th {
  		border: 1px solid black;
		}

		table {
		
		border-collapse: collapse;
		width: 80%;
		margin-left:10%;
		}

		td {
		text-align: center;
		}
</style>
</head>
<body>
<?php
		include('../Includes/header.php');
		if ($_SESSION['role']!='admin'){
			header("location:index.php");}



		include_once '../Repository/userRepository.php';
		include_once '../Repository/productRepository.php';
		include_once '../Repository/contactRepository.php';
		include_once '../Repository/logsRepository.php';
		include_once '../Controller/deleteUser.php';
		include_once '../Controller/deleteProduct.php';

        $userRepository = new UserRepository();
		$productRepository = new productRepository();
		$contactRepository = new contactRepository();
		$logsRepository = new logsRepository();	


        $users = $userRepository->getAllUsers();
		$products = $productRepository->getAllProducts();
		$logs= $logsRepository->getAllLogs();
		$feedbacks= $contactRepository->getAllFeedbacks();

    
        ?>

<div class="container">
		<div class="row">
			<div>
			
				
				<br><h1 style="margin-top:100px;text-align:center;">Users</h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>Name</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Role</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php 
					foreach($users as $user){?>
						<tr>
							<td><?= $user['name']?></td>
							<td><?= $user['lastname']?></td>
							<td><?= $user['email']?></td>
							<td><?= $user['role']?></td>
							<td class="align-text-center"><a href='editUser.php?id=<?=$user["ID"]?>'><button class="editBtn">Edit</button></a></td>
							<td class="align-text-center"><a href='dashboard.php?deleteID=<?=$user["ID"]?>'><button class="deleteBtn">Delete</button></a></td>
						</tr>
					<?php
					}
					?>
			</div>
				<div>
				<table class="align-center table-bordered dashboard-table">
				<br><h1 style="text-align:center;">Products</h1>
				<a style ='margin-left:47%;' href='addproduct.php'> Add Product</a></br>
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Price</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php 
					foreach($products as $product){?>
						<tr>
							<td class="align-text-center">
								<img style=" width: 100px; height:100px; border-radius: 75%;" src="../Resources/productImg/<?= $product['image']?>">
							</td>
							<td><?= $product['name']?></td>
							<td><?= $product['price']?></td>
							<td class="align-text-center"><a href='editProduct.php?id=<?=$product["ID"]?>'><button class="editBtn">Edit</button></a></td>
							<td class="align-text-center"><a href='dashboard.php?ID=<?=$product["ID"]?>'><button class="deleteBtn">Delete</button></a></td>
						</tr>
					<?php
					}
					?>
				</table>
				</div>
				<div>
				<br><h1 style="text-align:center;">Contact Us</h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
					</tr>
					<?php 
					foreach($feedbacks as $contact){
						?>
						<tr>
							
							<td><?= $contact['name']?></td>
							<td><?= $contact['email']?></td>
							<td><?= $contact['subject']?></td>
							<td><?= $contact['message']?></td>
						</tr>
					<?php
					}
					?>
				</table>
				</div>
				<div>
				<br><h1 style="text-align:center;">Logs</h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>User</th>
						<th>Action</th>
						<th>Log Date</th>
						<th>Users Logs</th>
					</tr>
					<?php 
					foreach($logs as $log){
						$user = $userRepository->getUserById($log['userID']);
						?>
						<tr>
							
							<td><?= $user['name']." ".$user['lastname']?></td>
							<td><?= $log['action']?></td>
							<td><?= $log['log_date']?></td>
							<td class="align-text-center"><a href='auditLogs.php?id=<?=$user["ID"]?>'><button class="editBtn">Users Logs</button></a></td>
						</tr>
					<?php
					}
					?>
				</table><br><br>
				</div>
			</div>
		</div>
	<?php
		include('../Includes/footer.php');
		
	?>

</body> 
</html>