<?php 

class Car {

public $name;
private $model;
protected $id;

public function set_name($name) {
    $this -> name = $name;
}

private function set_model($model) {
    $this -> model = $model;
}

protected function set_id($id) {
    $this -> id = $id;
}

}

?>