<?php
include_once '../Repository/productRepository.php';
if(isset($_POST['editBtn'])){
    
        $productRepository = new productRepository();
        $productRepository->editProduct();
    }

?>