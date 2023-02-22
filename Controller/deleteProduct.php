<?php
if (isset($_GET['ID'])) {
$productID = $_GET['ID'];
include_once '../Repository/productRepository.php';


$productRepository = new productRepository();
$productRepository->deleteProduct($productID);
header("location:../View/dashboard.php");

}
?>