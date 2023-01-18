
<?php

include "class.php" ;


$Mercedes= new Cars();

 $Mercedes->set_Name('Mercedes');
 $Mercedes->set_Model('AMG 500');


 echo "Name:"  .$Mercedes->get_Name();

 echo "<br>";

 echo "Model:"  .$Mercedes->get_Model();


?>