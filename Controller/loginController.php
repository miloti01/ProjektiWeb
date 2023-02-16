<?php
//e thirr kodin qe eshte ne userRepository.php
include_once '../Repository/userRepository.php';
include_once '../Models/user.php';
//e kqyr nese u kliku butoni me name="signin"
if(isset($_POST['signin'])){
    //e krijon ni instance te UserRepository
    $userRepository = new UserRepository();
    //e thirr funksionin editUser();
    $userRepository->logIn();
}


//e kqyr nese u kliku butoni me name="signup"
if(isset($_POST['signup'])){
    //i run tdhanat prej formes ne variable
    $name = $_POST['signup_name'];
    $lastname = $_POST['signup_last_name'];
    $email = $_POST['signup_email'];
    $role = "user";
    //passwordin e inkripton ne hash
    $password = password_hash($_POST['signup_password'],PASSWORD_DEFAULT);
    //e thirr konstruktorin e Userit edhe e krijon ni objekt tri
    $user  = new User($name,$lastname,$email,$password,$role);
    //e krijon ni instance te UserRepository
    $userRepository = new UserRepository();
    //e thirr funksionin insertUser(); edhe e dergon objektin qe sa e krijum si parameter
    $userRepository->insertUser($user);
}


?>