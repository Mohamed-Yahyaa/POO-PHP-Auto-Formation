<?php

include 'class.php';


$Student= new Student();

$Student->set_FirstName('imane');
$Student->set_LastName('Ajroudi');



echo "FirstName:" .$Student->get_FirstName();

 echo "<br>";


 echo "LastName:" .$Student->get_LastName();