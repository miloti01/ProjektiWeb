<?php

include_once '../Repository/productRepository.php';
include_once '../Models/product.php';
if(isset($_POST['addProductButton'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    
    $product  = new Product($name,$price);
    $productRepository = new productRepository();
    $productRepository->insertProduct($product);
    

}
?>