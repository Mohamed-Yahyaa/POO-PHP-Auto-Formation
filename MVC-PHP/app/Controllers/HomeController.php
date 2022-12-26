<?php

namespace App\Controllers;

class HomeController extends Controller {

    public function index() {
        $this->render('index', [
            'title' => 'Index - Data sent from controller.'
        ]);
    }

}