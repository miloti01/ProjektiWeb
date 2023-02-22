<?php 
include_once '../Includes/config.php';


 
class cartRepository{
	private $connection;
	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }

    function addToCart($userId, $productId){
        $conn = $this->connection;

        $sql = "SELECT * FROM product WHERE ID='$productId'";
        $statement = $conn->query($sql);
        $product = $statement->fetch();

        $sql = "INSERT INTO cart (productID, userID) VALUES (?,?)";
	    $statement = $conn->prepare($sql);
	    $statement->execute([$product['ID'], $userId]);

        $date = date("l").", ".date("jS \of F Y").", ".date("h:i A");
        $sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
        $action= "User: ". $_SESSION['name']. " ". $_SESSION['lastname']. " with the ID: ". $_SESSION['id'] . " has put: " .$product['name']." in the cart";
        $statement = $conn->prepare($sql);
        $statement->execute([$_SESSION['id'],$action,$date]);

        
       	header("location:../view/cart.php");
    }
    
    function getAllCartProducts(){
        $conn = $this->connection;
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM cart WHERE userID='$id'";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }
    function getTotalOfWinnings(){
        $conn = $this->connection;
        $sql = "SELECT SUM(price) as total FROM cart";
        $statement = $conn->query($sql);
        $product = $statement->fetch();
        return $product;
    }
    function getAllItems(){
        $conn = $this->connection;

        $sql = "SELECT * FROM cart";

        $statement = $conn->query($sql);
        $items = $statement->fetchAll();

        return $items;
    }
    function getCartById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM cart WHERE ID='$id'";

        $statement = $conn->query($sql);
        $product = $statement->fetch();

        return $product;
    }
    function deleteFromCart($productID) {
        $conn = $this->connection;
        include_once'../Repository/productRepository.php';
        $productRepository = new ProductRepository();
        $product = $productRepository->getProductById($productID);


        $date = date("l").", ".date("jS \of F Y").", ".date("h:i A");
        $sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
        $action= "User: ". $_SESSION['name']. " ". $_SESSION['lastname']. " with the ID: ". $_SESSION['id'] . " has removed: " .$product['name']." from the cart.";
        $statement = $conn->prepare($sql);
        $statement->execute([$_SESSION['id'],$action,$date]);

        $sql = "DELETE FROM cart WHERE productID=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$productID]);
        
        
    }
}