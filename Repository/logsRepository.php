<?php 
//config.php eshte lidhja me databaz
include_once '../Includes/config.php';

 
class logsRepository{
	private $connection;

//konstruktori i klases qe e krijon connection me databaz tu e perdor config.php
	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }




	function getAllLogs(){
        $conn = $this->connection;
        $sql = "SELECT * FROM logs ORDER BY ID DESC";

        $statement = $conn->query($sql);
        $logs = $statement->fetchAll();

        return $logs;
    }

    function getLogsById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM logs WHERE userID='$id' ORDER BY ID DESC";
        $statement = $conn->query($sql);
        $logs = $statement->fetchAll();

        return $logs;
    }

}




?> 