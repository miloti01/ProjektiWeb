<?php
class News{
    private $description;
    private $url;
    

    function __construct($description,$url){
            $this->description = $description;
            $this->url = $url;
    }


    function getDescription(){
        return $this->description;
    }
    function getUrl(){
        return $this->url;
    }
}




?>