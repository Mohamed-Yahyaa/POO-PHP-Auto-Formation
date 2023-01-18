<?php

class Car {
    // proprties
    public $Name;
    public $Model;

    // Methods 

    function __construct($name,$model){
        $this->Name = $name;
        $this->Model =$model;
    }

    function get_Name(){
        return $this->Name;
    }


    function get_Model(){
        return $this->Model;
    }

}

?>