<?php 

class Person {
    public $name;
    function __construct($Name)
    {
         $this->name=$Name;
    }
}
class Student extends Person{
   function info(){
    echo 'Med';
   }
}