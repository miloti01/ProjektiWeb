<?php

include_once '../Repository/contactRepository.php';
include_once '../Models/contact.php';
if(isset($_POST['addFeedback'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $contact  = new contact($name,$email,$subject,$message);
    $contactRepository = new contactRepository();
    $contactRepository->insertContact($contact);
    header("location:contact.php");

}
?>