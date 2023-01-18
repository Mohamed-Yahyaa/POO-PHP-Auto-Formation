<?php

class Student{
     
    public $FirstName;
    public $LastName;



     function set_FirstName($firstname){

        $this->FirstName = $firstname;
        
    }

    function get_FirstName(){

        return $this->FirstName;
    }

    function set_LastName($lastname){

        $this->LastName = $lastname;
        
    }

    function get_LastName(){

        return $this->LastName;
    }





}

