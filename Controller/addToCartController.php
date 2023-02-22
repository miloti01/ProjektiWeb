<?php
include_once '../Repository/cartRepository.php';
session_start();
$productId = $_GET['id'];
$cartRepository = new cartRepository();
$cartRepository->addToCart($_SESSION['id'], $productId);

echo $_SESSION['id'];
echo $productId;
?>