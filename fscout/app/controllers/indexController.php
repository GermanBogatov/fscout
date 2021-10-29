<?php

class IndexController extends Controller {
    public function __construct() {
        parent::__construct();
        $this->view->setTitle("Главная страница");
        
    }
}
