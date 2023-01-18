<?php

class Cars {
    // proprties
    public $Name;
    public $Model;

    // Methods 

    function set_Name($name){
        $this->Name = $name;
    }

    function get_Name(){
        return $this->Name;
    }

    function set_Model($model){
        $this->Model =$model;
    }

    function get_Model(){
        return $this->Model;
    }

}

?>