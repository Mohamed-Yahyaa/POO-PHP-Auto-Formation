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

    function __destruct()
    {
       echo "car Name :  {$this->Name} ";
       echo "<br></br>";
       echo "car Model : {$this->Model} "; 
   
    }

}

?>