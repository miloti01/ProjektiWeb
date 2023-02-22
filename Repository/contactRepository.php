<?php 
//config.php eshte lidhja me databaz
include_once '../Includes/config.php';

 
class contactRepository{
	private $connection;

	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }


    function insertContact($contact){
    	$conn = $this->connection;
        $name = $contact->getName();
        $email = $contact->getEmail();
        $subject = $contact->getSubject();
        $message = $contact->getMessage();
	    
	    $sql = "INSERT INTO contact (name, email, subject, message) VALUES (?,?,?,?)";
	    $statement = $conn->prepare($sql);
	    $statement->execute([$name,$email,$subject,$message]);

	}

	function getAllFeedbacks(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contact";

        $statement = $conn->query($sql);
        $feedbacks = $statement->fetchAll();

        return $feedbacks;
    }
}




?> 