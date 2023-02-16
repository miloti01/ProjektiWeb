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


	    	//e krijojm query per me i insertu tdhanat ne databaz
	    	$sql = "INSERT INTO users (name, lastname, email, password, role) VALUES (?,?,?,?,?)";
	    	$statement = $conn->prepare($sql);
	    	$statement->execute([$name,$lastname,$email,$password,$role]);

	    }
	}


}




?> 