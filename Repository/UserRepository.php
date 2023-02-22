<?php 
//config.php eshte lidhja me databaz
include_once '../Includes/config.php';

 
class userRepository{
	private $connection;

//konstruktori i klases qe e krijon connection me databaz tu e perdor config.php
	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }


//funksioni qe perdoret per me u login nje user (thirret prej loginController)
	function logIn(){
        $conn = $this->connection;

        //i run tdhanat qe vijn prej formes
        $email=$_POST['email'];
        $password=$_POST['password'];

        //e kontrollen nese emaila qe e ka shkrujt useri ekziston ne databazen tone
       	$sql = "SELECT * FROM users WHERE email='$email'";
		$statement = $conn->query($sql);
       	$user = $statement->fetch(PDO::FETCH_ASSOC);
		$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");

		//rowcount e kthen numrin e rreshtave qe i kthen query nalt, nese ska kthy asnja eshte 0, nese ekziston emaila ateher eshte 1
		//kjo if statement i tregon qe emaila eshte shkruar gabim nese rowcount eshte ma i vogel se sa 1
		if($statement->rowCount() < 1){
       		echo "<script> alert('Email entered incorrectly!'); </script>";
		}
		else{
			//password_verify perdoret per me testu nese passwordi qe e ka shkruar useri eshte i barabart me passwordin hashed(te enkriptum) qe e kem ne databaza
       		if (!password_verify($password,$user['password'])) {
       			echo "<script> alert('Password entered incorrectly!'); </script>";
       		}
       		else{
       			//e startojm nje session qe perdoret per me rujt variabla qe munden me u perdor nqdo file
       			session_start();
       			$_SESSION['name'] = $user['name'];
       			$_SESSION['lastname'] = $user['lastname'];
       			$_SESSION['role'] = $user['role'];
       			$_SESSION['id'] = $user['ID'];
				$sql = "UPDATE users SET last_access='$date' WHERE email='$email'";
       			$statement = $conn->query($sql);

       			$sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
       			$action= "User: ". $user['name']. " ". $user['lastname']. " with the ID: ". $user['ID'] . " logged in";
       			$statement = $conn->prepare($sql);
	    		$statement->execute([$user['ID'],$action,$date]);

       			


       			//tqon te profile.php pasi je log in
       			header("location:index.php");

        	}
    	}

	}


    function insertUser($user){
		//e run lidhjen e databazen mrena variables $conn
        $conn = $this->connection;
        //ni select i thjeshte qe e kontrollon a ekziston emaila ne databaz qe po munohet me register useri
        $sql = "SELECT name FROM users WHERE email=?";
		$statement = $conn->prepare($sql);
		$statement->execute([$_POST['signup_email']]);
		$count = $statement->rowCount();
		//e kontrollon a ka marr naj tdhane prej databazes, nese po $count bahet 1 qe dmth emaila ekziston, nese jo ateher emaila nuk ekziston dhe useri eshte i ri
		if($count>0){
			echo "<script>alert('Email already exists!') </script>";

		}
		else{
			//e perdor parametrin e funksionit tu i thirr getters edhe i run tdhanat ne variable
	    	$name = $user->getName();
	    	$lastname = $user->getLastname();
	    	$email = $user->getEmail();
	    	$password = $user->getPassword();
	    	$role = $user->getRole();
			$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");


	    	//e krijojm query per me i insertu tdhanat ne databaz
	    	$sql = "INSERT INTO users (name, lastname, email, password, role, created_at) VALUES (?,?,?,?,?,?)";
	    	$statement = $conn->prepare($sql);
	    	$statement->execute([$name,$lastname,$email,$password,$role,$date]);

			if(isset($_SESSION['id'])){
	    		$id=$_SESSION['id'];
	    	}
	    	else{
	    		$sql = "SELECT ID FROM users WHERE email='$email'";
				$statement = $conn->query($sql);
       			$user = $statement->fetch(PDO::FETCH_ASSOC);
       			$id=$user['ID'];
	    	}

			$userRepository = new UserRepository();
	    	$user = $userRepository->getUserById($id);

			$sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
       		$action= "User: ". $name . " ". $lastname . " with the ID: ". $id. " has been registered";
       		$statement = $conn->prepare($sql);
	   		$statement->execute([$id,$action,$date]);

	    }
	}

	//funksioni qe perdoret per me e kthy nje user specific baz parametrit qe ju dergohet
	function getUserById($id){
        $conn = $this->connection;

        //e krijojme nje query qe i merr tdhanat e userit baze te ids qe u dergu si parameter
        $sql = "SELECT * FROM users WHERE id='$id'";
        $statement = $conn->query($sql);
        $user = $statement->fetch();

        //i kthen qato tdhana te userit
        return $user;
    }

    function getNumberOfUsers(){
        $conn = $this->connection;
        $sql = "SELECT COUNT(*) as total FROM users";
        $statement = $conn->query($sql);
        $users = $statement->fetch();
        return $users;
    }

	function getAllUsers(){
        $conn = $this->connection;
        $id=$_SESSION['id'];
        $sql = "SELECT * FROM users WHERE id<>'$id' ";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users; 
    }
	function deleteUser($id){
		$conn = $this->connection;
		$userID=$_SESSION['id'];
        $userRepository = new UserRepository();
	    $user = $userRepository->getUserById($id);
		$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");

        $sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
       	$action= "User: ". $user['name']. " " . $user['lastname'] . " with the ID: " . $user['ID'] . " has been deleted by the user: " . $_SESSION['name'] . " " . $_SESSION['lastname'] . " with the ID: " . $userID; 
       	$statement = $conn->prepare($sql);
	    $statement->execute([$userID,$action,$date]);



        $conn = $this->connection;
        $sql = "DELETE FROM users WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

   } 
   function editUser(){

	$conn = $this->connection;
	  //e run IDn e userit ne nje variabes
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
	else{
		$id=$_SESSION['id'];
	}
	//e bajm nje query qe kthen rezultat nese emaila qe po munohet me ndrru useri ekziston ne databaz
	//id<>'$id' dmth qe mos me kontrollu vetvetin useri, sepse nese se ka ndryshu emailen tani gjithmon do tjet true
	$sql = "SELECT * FROM users WHERE email=? AND id<>'$id'";
	$statement = $conn->prepare($sql);
	$statement->execute([$_POST['email']]);
	
	//nese tkthen rezultat ateher emaila ekziston
	$count = $statement->rowCount();
	if($count>0){
		echo "<script>alert('Email already exists!') </script>";
	}
	else{
		//i rujm tdhanat prej formes qe don me i ndryshu useri
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$role=$_POST['role'];
	$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");

	//e krijojme nje query per me i update tdhanat ne databaz
	$sql = "UPDATE users SET name='$name', lastname='$lastname', email='$email',role='$role', updated_at='$date' WHERE id='$id'";
	$statement = $conn->query($sql);
	$userID=$_SESSION['id'];
	$userRepository = new UserRepository();
	$user = $userRepository->getUserById($id);
	$sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
       	$action= "User: ". $user['name']. " " . $user['lastname'] . " with the ID " . $user['ID'] . " has been updated by the user: " . $_SESSION['name'] . " " . $_SESSION['lastname'] . " with the ID: " . $_SESSION['id']; 
       	$statement = $conn->prepare($sql);
		$statement->execute([$userID,$action,$date]);	  
   }
}



}




?> 