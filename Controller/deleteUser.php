<?php
if (isset($_GET['deleteID'])) {
$userId = $_GET['deleteID'];
include_once '../Repository/userRepository.php';



$userRepository = new UserRepository();
$userRepository->deleteUser($userId);
header("location:../View/dashboard.php");

}
?>