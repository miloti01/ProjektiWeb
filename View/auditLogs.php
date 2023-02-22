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
		include_once '../Repository/logsRepository.php';




	$userRepository = new UserRepository();	
	$logsRepository = new logsRepository();	


	
	$id=$_GET['id'];

	$user = $userRepository->getUserById($id);
	$logs= $logsRepository->getLogsById($id);

	?>


	<div class="container">
		<div class="row">
			<div style="width: 100%;">
				<br><h1 style="text-align:center; margin-top:100px; "><?php echo $user['name'] . " " . $user['lastname']. "'s logs" ?></h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>User</th>
						<th>Action</th>
						<th>Log Date</th>
					</tr>
					<?php 
					foreach($logs as $log){
						?>
						<tr>
							
							<td><?= $user['name']." ".$user['lastname']?></td>
							<td><?= $log['action']?></td>
							<td><?= $log['log_date']?></td>
						</tr>
					<?php
					}
					?>
				</table><br><br>

				
			</div>
		</div>
	<?php
		include('../Includes/footer.php');
		
	?>
	</div>

	<script src="../Includes/Js/main.js"></script>
</body>
</html>