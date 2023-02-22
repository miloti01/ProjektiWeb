<?php
class contact{
    private $name;
    private $email;
    private $subject;
    private $message;

    function __construct($name,$email,$subject,$message){
            $this->name = $name;
            $this->email = $email;
            $this->subject = $subject;
            $this->message = $message;
    }


    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    //feedback
    function getSubject(){
        return $this->subject;
    }
    //number
    function getMessage(){
        return $this->message;
    }
}




?>