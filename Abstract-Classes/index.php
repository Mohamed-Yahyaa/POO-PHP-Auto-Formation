<?php

include 'class.php';

// create objects from the child classes 
$audi = new  Audi("audi 10");
echo $audi->intro();
echo "<br>";

$bmw=new BMW("BMW X-6");
echo $bmw->intro();