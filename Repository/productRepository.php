<?php 
//config.php eshte lidhja me databaz
include_once '../Includes/config.php';

 
class productRepository{
	private $connection;

//konstruktori i klases qe e krijon connection me databaz tu e perdor config.php
	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }

    function insertProduct($product){

        $conn = $this->connection;
        $name= $product->getName();
        $price= $product->getPrice();
        $filename = $_FILES['myfile']['name'];

        if (empty($filename)) {
            echo "<script>alert('Please upload an image!') </script>";
        }
        else{
            $sql = "SELECT ID FROM product ORDER BY ID DESC LIMIT 1";
            $statement = $conn->query($sql);
            $product = $statement->fetch(PDO::FETCH_ASSOC);
            $id=$product['ID'] +1;
            $file = $_FILES['myfile']['tmp_name'];
            $destination = '../Resources/productImg/'.$id. $filename;
            $filename = $id.$filename;
            move_uploaded_file($file, $destination);


            $sql = "INSERT INTO product (name, price, image) VALUES (?,?,?)";
            $statement = $conn->prepare($sql);
            $statement->execute([$name,$price,$filename]);

            $date = date("l").", ".date("jS \of F Y").", ".date("h:i A");
            $sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
            $action= "User: ". $_SESSION['name']. " ". $_SESSION['lastname']. " with the ID: ". $_SESSION['id'] . " has inserted: " .$name;
            $statement = $conn->prepare($sql);
            $statement->execute([$_SESSION['id'],$action,$date]);

        }
    
    }


    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM product";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }
    
    function getOlderProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM product ORDER BY ID LIMIT 4";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    function getNewerProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM product ORDER BY ID DESC LIMIT 4";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    function getProductById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM product WHERE ID='$id'";

        $statement = $conn->query($sql);
        $product = $statement->fetch();

        return $product;
    }
    function getNumberOfproducts(){
        $conn = $this->connection;
        $sql = "SELECT COUNT(*) as total FROM product";
        $statement = $conn->query($sql);
        $products = $statement->fetch();
        return $products;
    }

    function editProduct(){

        $conn = $this->connection;
        $newfilename = $_FILES['myfile']['name'];
        $id=$_GET['id'];
        $sql="SELECT image FROM product WHERE id='$id'";
        $statement = $conn->query($sql);
        $files=$statement->fetch(PDO::FETCH_ASSOC);
        $filename=$files['image'];

        if(!empty($newfilename)){
            
            $destination = '../Resources/productImg/'. $filename;
            unlink($destination);
            $destination = '../Resources/productImg/'.$id . $newfilename;
            $file = $_FILES['myfile']['tmp_name'];
            $filename= $id . $newfilename;
            move_uploaded_file($file, $destination);
        }

        $name=$_POST['name'];
        $price=$_POST['price'];
        $sql = "UPDATE product SET name='$name', price='$price', image='$filename' WHERE id='$id'";
        $statement = $conn->query($sql);

        $date = date("l").", ".date("jS \of F Y").", ".date("h:i A");
        $sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
        $action= "User: ". $_SESSION['name']. " ". $_SESSION['lastname']. " with the ID: ". $_SESSION['id'] . " has updated: " .$name. " with the ID: " . $id;
        $statement = $conn->prepare($sql);
        $statement->execute([$_SESSION['id'],$action,$date]);

    }

    function deleteProduct($id){
        $conn = $this->connection;
        $productRepository = new productRepository();
        $product = $productRepository->getProductById($id);

        $date = date("l").", ".date("jS \of F Y").", ".date("h:i A");
        $sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
        $action= "User: ". $_SESSION['name']. " ". $_SESSION['lastname']. " with the ID: ". $_SESSION['id'] . " has deleted: " .$product['name']. " with the ID: " . $id;
        $statement = $conn->prepare($sql);
        $statement->execute([$_SESSION['id'],$action,$date]);

        $sql = "DELETE FROM product WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

   }
    
}
?> 