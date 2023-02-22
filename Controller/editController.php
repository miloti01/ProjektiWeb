<?php
//e thirr kodin qe eshte ne userRepository.php
include_once '../Repository/userRepository.php';
//e kqyr nese u kliku butoni me name="editBtn"
if(isset($_POST['editBtn'])){
    
        //e krijon ni instance te UserRepository
        $userRepository = new UserRepository();
        //e thirr funksionin editUser();
        $userRepository->editUser();

    }

?>