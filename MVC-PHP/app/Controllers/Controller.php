<?php

namespace App\Controllers;

abstract class Controller {
    public function render($view, $data = []) {
        extract($data);
        include ROOT . "views/$view.php";
    }
}