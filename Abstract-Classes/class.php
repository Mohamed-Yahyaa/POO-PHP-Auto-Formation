<?php
//superClass
 abstract class Car{
    public $name;
    public function __construct($Name)
    {
      $this->name=$Name;  
    }
    abstract public function intro():string;
}

//subClasses
class Audi extends Car{
     public function intro(): string {
        return "Choose Germany quality i'm an $this->name";
    }
}

class BMW extends Car{
    public function intro():string{
        return "proud to be Germany i'm  a $this->name";
    }
}

