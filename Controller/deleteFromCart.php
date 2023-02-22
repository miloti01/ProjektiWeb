<?php
session_start();
    if (isset($_GET['ID'])) {
        $productID = $_GET['ID'];
        include_once '../Repository/cartRepository.php';

        $cartRepository = new cartRepository();
        $cartRepository->deleteFromCart($productID);
        header("location:../View/cart.php");
    }
?>