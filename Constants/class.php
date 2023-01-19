<?php



class Car {
    public $Name;
    public $Model;
    public $Color;
    const ALL = "This is car ";
    const ALL_TWO = "This is a Name car ";


    public function __construct($name, $model, $color){
        $this->Name = $name;
        $this->Model = $model;
        $this->Color = $color;
        echo self::ALL_TWO;
     
    }

    public function demo()  {
        echo "<br></br>";
        echo "  {$this->Name}, {$this->Model}, {$this->Color}";
        echo "<p></p>";
       
    }


}

















?>